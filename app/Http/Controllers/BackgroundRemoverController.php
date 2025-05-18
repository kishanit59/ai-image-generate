<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BackgroundRemoverController extends Controller
{
    public function index()
    {
        return view('remove-background');
    }

    public function remove(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5120', // Max 5MB
        ]);
    
        $image = $request->file('image');
        $apiKey = env('IMAGINE_API_KEY');
    
        try {
            $response = \Illuminate\Support\Facades\Http::timeout(60)
                ->withToken($apiKey)
                ->asMultipart()
                ->post('https://api.vyro.ai/v2/image/background/remover', [
                    [
                        'name' => 'image',
                        'contents' => fopen($image->getPathname(), 'r'),
                        'filename' => $image->getClientOriginalName(),
                    ],
                ]);
    
            $contentType = $response->header('Content-Type');
    
            if (str_contains($contentType, 'application/json')) {
                // API returned a JSON response
                $result = $response->json();
                $imageBase64 = $result['image'] ?? null;
            } else {
                // API returned image content directly
                $imageBase64 = base64_encode($response->body());
            }
    
            if ($imageBase64) {
                return view('remove-background', [
                    'image' => $imageBase64,
                    'success' => 'Background removed successfully!',
                ]);
            } else {
                return back()->withErrors(['error' => 'No image returned from API.']);
            }
    
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Something went wrong: ' . $e->getMessage()]);
        }
    }
    
}
