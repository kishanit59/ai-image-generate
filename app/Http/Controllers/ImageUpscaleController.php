<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ImageUpscaleController extends Controller
{
    public function index()
    {
        return view('upscale-image');
    }

    public function upscale(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:5120', // Max 5MB
        ]);
    
        try {
            $image = $request->file('image');
    
            $response = Http::timeout(60)
                ->withToken(env('IMAGINE_API_KEY'))
                ->asMultipart()
                ->post('https://api.vyro.ai/v2/image/enhance', [
                    [
                        'name'     => 'image',
                        'contents' => fopen($image->getPathname(), 'r'),
                        'filename' => $image->getClientOriginalName(),
                    ]
                ]);
    
            if ($response->successful()) {
                $imageBase64 = base64_encode($response->body()); // Convert binary to base64
    
                return view('upscale-image', [
                    'image' => $imageBase64,
                    'success' => 'Image upscaled successfully!',
                ]);
            } else {
                Log::error('Upscale API failed.', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
    
                return back()->withErrors([
                    'error' => 'API call failed. Status: ' . $response->status()
                ]);
            }
    
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => 'Something went wrong: ' . $e->getMessage()
            ]);
        }
    }
    
}
