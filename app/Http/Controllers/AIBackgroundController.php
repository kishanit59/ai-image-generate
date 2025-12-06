<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AIBackgroundController extends Controller
{
    public function index()
    {
        return view('ai-background');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:5120', // Max 5MB
            'prompt' => 'required|string|max:1000',
            'style' => 'nullable|string',
            'seed' => 'nullable|integer|min:1',
        ]);

        try {
            // Check if API key is configured
            $apiKey = env('IMAGINE_API_KEY');
            if (empty($apiKey)) {
                return back()->withErrors(['error' => 'IMAGINE_API_KEY is not configured in .env file']);
            }

            $image = $request->file('image');

            \Log::info('Making API request to Vyro.ai', [
                'prompt' => $request->input('prompt'),
                'style' => $request->input('style', 'product-shoot'),
                'seed' => $request->input('seed', '12'),
                'image_name' => $image->getClientOriginalName(),
            ]);

            $response = Http::timeout(60)
                ->withToken($apiKey)
                ->asMultipart()
                ->post('https://api.vyro.ai/v2/image/generations/ai-background', [
                    [
                        'name' => 'prompt',
                        'contents' => $request->input('prompt'),
                    ],
                    [
                        'name' => 'style',
                        'contents' => $request->input('style', 'product-shoot'),
                    ],
                    [
                        'name' => 'seed',
                        'contents' => $request->input('seed', '12'),
                    ],
                    [
                        'name' => 'image',
                        'contents' => fopen($image->getPathname(), 'r'),
                        'filename' => $image->getClientOriginalName(),
                    ],
                ]);

            \Log::info('API Response', [
                'status' => $response->status(),
                'content_type' => $response->header('Content-Type'),
                'body_length' => strlen($response->body()),
            ]);

            if ($response->successful()) {
                // Check Content-Type to determine response format
                $contentType = $response->header('Content-Type');
                
                if (str_contains($contentType, 'application/json')) {
                    // API returned a JSON response with image data
                    \Log::info('Processing JSON response');
                    $result = $response->json();
                    $imageBase64 = $result['image'] ?? null;
                    
                    if (!$imageBase64) {
                        \Log::error('JSON response missing image field', ['response' => $result]);
                        return back()->withErrors([
                            'error' => 'API returned JSON but no image data was found'
                        ]);
                    }
                } else {
                    // API returned image content directly (binary)
                    \Log::info('Processing binary response');
                    $imageBase64 = base64_encode($response->body());
                }

                return view('ai-background', [
                    'image' => $imageBase64,
                    'success' => 'AI background added successfully!',
                ]);
            } else {
                // Get detailed error information
                $statusCode = $response->status();
                $errorBody = $response->body();
                
                \Log::error('API call failed', [
                    'status_code' => $statusCode,
                    'response_body' => $errorBody,
                ]);

                // Try to parse JSON error response
                $errorMessage = 'API call failed';
                try {
                    $errorData = $response->json();
                    if (isset($errorData['message'])) {
                        $errorMessage = $errorData['message'];
                    } elseif (isset($errorData['error'])) {
                        $errorMessage = $errorData['error'];
                    }
                } catch (\Exception $e) {
                    // If not JSON, use the raw body if it's short enough
                    if (strlen($errorBody) < 200) {
                        $errorMessage = $errorBody;
                    }
                }

                return back()->withErrors([
                    'error' => "API Error (Status {$statusCode}): {$errorMessage}"
                ]);
            }
        } catch (\Illuminate\Http\Client\ConnectionException $e) {
            \Log::error('Connection error', ['message' => $e->getMessage()]);
            return back()->withErrors([
                'error' => 'Connection error: Unable to reach the API server. Please check your internet connection.'
            ]);
        } catch (\Exception $e) {
            \Log::error('Exception occurred', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            return back()->withErrors([
                'error' => 'Error: ' . $e->getMessage()
            ]);
        }
    }
}
