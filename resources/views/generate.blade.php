<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Imagine Art Generator - Text to Image</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 min-h-screen flex flex-col justify-between p-6">

    <!-- Navbar at bottom -->
    <nav class="w-full px-6 py-4 flex justify-end items-center">
        <a href="{{ url('/') }}"
            class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">
            Back to Home
        </a>
    </nav>

    <!-- Card Section -->
    <div class="w-full max-w-3xl mx-auto bg-white rounded-3xl shadow-2xl p-10 space-y-8">
        <h1 class="text-4xl font-extrabold text-center text-indigo-700 mb-2">Imagine Art Generator</h1>
        <p class="text-center text-indigo-500 font-medium mb-8">
            Create stunning Images from Text
        </p>

        <!-- Validation and Session Messages -->
        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-5 py-3 rounded-lg mb-6">
            <strong>Whoops! Something went wrong:</strong>
            <ul class="list-disc pl-5 mt-2">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-5 py-3 rounded-lg mb-6">
            {{ session('success') }}
        </div>
        @endif

        <!-- Form -->
        <form action="{{ route('generate.image') }}" method="POST" class="space-y-7">
            @csrf

            <div>
                <label for="prompt" class="block text-sm font-semibold text-indigo-700 mb-1">Creative Prompt</label>
                <textarea name="prompt" id="prompt" rows="5" required
                    class="w-full rounded-lg border border-indigo-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-4
                           placeholder-indigo-400 text-indigo-900 font-medium"
                    placeholder="e.g. A futuristic city at night, glowing neon lights, rain, flying cars, cinematic lighting...">{{ old('prompt') }}</textarea>
                @error('prompt')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-7">
                <div>
                    <label for="style" class="block text-sm font-semibold text-indigo-700 mb-1">Style</label>
                    <select name="style" id="style" required
                        class="w-full rounded-lg border border-indigo-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-3 font-medium">
                        <option value="">Select a style</option>
                        <option value="realistic" {{ old('style') == 'realistic' ? 'selected' : '' }}>Realistic</option>
                        <option value="anime" {{ old('style') == 'anime' ? 'selected' : '' }}>Anime</option>
                        <option value="sdxl-1.0" {{ old('style') == 'sdxl-1.0' ? 'selected' : '' }}>SDXL 1.0</option>
                        <option value="imagine-turbo" {{ old('style') == 'imagine-turbo' ? 'selected' : '' }}>Imagine Turbo</option>
                    </select>
                    @error('style')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="aspect_ratio" class="block text-sm font-semibold text-indigo-700 mb-1">Aspect Ratio</label>
                    <select name="aspect_ratio" id="aspect_ratio"
                        class="w-full rounded-lg border border-indigo-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-3 font-medium">
                        <option value="1:1" {{ old('aspect_ratio') == '1:1' ? 'selected' : '' }}>1:1 (Square)</option>
                        <option value="3:2" {{ old('aspect_ratio') == '3:2' ? 'selected' : '' }}>3:2</option>
                        <option value="4:3" {{ old('aspect_ratio') == '4:3' ? 'selected' : '' }}>4:3</option>
                        <option value="3:4" {{ old('aspect_ratio') == '3:4' ? 'selected' : '' }}>3:4</option>
                        <option value="16:9" {{ old('aspect_ratio') == '16:9' ? 'selected' : '' }}>16:9 (Widescreen)</option>
                        <option value="9:16" {{ old('aspect_ratio') == '9:16' ? 'selected' : '' }}>9:16 (Vertical)</option>
                    </select>
                </div>
            </div>

            <div class="text-center">
                <button type="submit"
                    class="inline-flex items-center gap-2 px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-full shadow-lg transition">
                    Generate Image
                </button>
            </div>
        </form>

        <!-- Image Preview -->
        @isset($image)
        <div class="text-center mt-10">
            <h2 class="text-2xl font-bold text-green-700 mb-5">Your Generated Image</h2>
            <img src="data:image/png;base64,{{ $image }}" alt="Generated Image"
                class="mx-auto rounded-2xl shadow-lg max-w-full h-auto border border-indigo-200 mb-5" />

            <a href="data:image/png;base64,{{ $image }}" download="imagine-art-{{ time() }}.png"
                class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold rounded-full px-6 py-3 shadow-lg transition">
                Download Image
            </a>
        </div>
        @endisset
    </div>

</body>


</html>