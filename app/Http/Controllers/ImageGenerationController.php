<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ImageGenerationController extends Controller
{
    public function index()
    {
        return view('generate');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'prompt' => 'required|string|max:255',
            'style' => 'required|string',
            'aspect_ratio' => 'nullable|string',
            'seed' => 'nullable|integer',
        ]);

        $response = Http::withToken(env('IMAGINE_API_KEY'))
            ->asMultipart()
            ->post('https://api.vyro.ai/v2/image/generations', [
                [
                    'name' => 'prompt',
                    'contents' => $request->input('prompt'),
                ],
                [
                    'name' => 'style',
                    'contents' => $request->input('style'),
                ],
                [
                    'name' => 'aspect_ratio',
                    'contents' => $request->input('aspect_ratio', '1:1'),
                ],
                [
                    'name' => 'seed',
                    'contents' => $request->input('seed', '5'),
                ],
            ]);

        if ($response->successful()) {
            $imageData = base64_encode($response->body());
            return view('generate', ['image' => $imageData]);
        } else {
            return back()->withErrors(['error' => 'Image generation failed.']);
        }
    }
}
