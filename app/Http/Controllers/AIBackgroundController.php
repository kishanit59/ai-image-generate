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
            'prompt' => 'required|string|max:255',
            'style' => 'nullable|string',
            'seed' => 'nullable|integer|min:1',
        ]);

        try {
            $image = $request->file('image');

            $response = Http::timeout(60)
                ->withToken(env('IMAGINE_API_KEY'))
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

            if ($response->successful()) {
                $imageBase64 = base64_encode($response->body());

                return view('ai-background', [
                    'image' => $imageBase64,
                    'success' => 'AI background added successfully!',
                ]);
            } else {
                return back()->withErrors(['error' => 'API call failed.']);
            }
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Something went wrong: ' . $e->getMessage()]);
        }
    }
}
