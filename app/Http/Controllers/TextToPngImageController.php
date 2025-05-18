<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TextToPngImageController extends Controller
{
    public function index()
    {
        return view('text-to-pngimage');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:255',
        ]);

        $text = $request->input('text');
        $apiKey = env('IMAGINE_API_KEY');

        try {
            $response = Http::timeout(60)
                ->withToken($apiKey)
                ->asMultipart()
                ->post('https://api.vyro.ai/v2/image/generations/transparent', [
                    [
                        'name' => 'prompt', // use 'prompt', not 'text'
                        'contents' => $text,
                    ],
                    [
                        'name' => 'style',
                        'contents' => 'logo', // optional, but helps define output
                    ],
                    [
                        'name' => 'seed',
                        'contents' => '42', // optional
                    ],
                ]);

            $contentType = $response->header('Content-Type');

            if (str_contains($contentType, 'application/json')) {
                $result = $response->json();
                $imageBase64 = $result['image'] ?? null;
            } else {
                $imageBase64 = base64_encode($response->body());
            }

            if ($imageBase64) {
                return view('text-to-pngimage', [
                    'image' => $imageBase64,
                    'success' => 'Text image generated successfully!',
                ]);
            } else {
                return back()->withErrors(['error' => 'No image returned from API.']);
            }

        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Something went wrong: ' . $e->getMessage()]);
        }
    }
}
