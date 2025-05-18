<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AI Image Tools | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 to-white min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-white shadow-sm py-6 px-8 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-indigo-700">AI Image Tools</h1>
    </header>

    <!-- Hero Section -->
    <section class="flex-1 flex flex-col items-center justify-center text-center px-4">
        <h2 class="text-4xl font-extrabold text-gray-800 leading-tight mb-4">
            Empower Your Creativity with AI
        </h2>
        <p class="text-gray-600 text-lg mb-8 max-w-2xl">
            Use powerful AI tools to generate stunning images, remove backgrounds, or add professional AI-generated backgrounds to your photos with a single click.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="{{ url('/generate') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-lg text-lg font-semibold shadow hover:bg-indigo-700 transition">
                Text to Image
            </a>
            <a href="{{ route('remove.bg.form') }}" class="bg-green-600 text-white px-6 py-3 rounded-lg text-lg font-semibold shadow hover:bg-green-700 transition">
                Remove Background
            </a>
            <a href="{{ route('ai.background.index') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg text-lg font-semibold shadow hover:bg-blue-700 transition">
                AI Background
            </a>
            <a href="{{ route('upscale.form') }}" class="bg-purple-600 text-white px-6 py-3 rounded-lg text-lg font-semibold shadow hover:bg-blue-700 transition">
                AI Upscale Image
            </a>
            <a href="{{ route('text.to.pngimage.form') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-lg text-lg font-semibold shadow hover:bg-blue-700 transition">
                Text to Png Image
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t py-4 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} AI Image Tools. All rights reserved.
    </footer>

</body>
</html>
