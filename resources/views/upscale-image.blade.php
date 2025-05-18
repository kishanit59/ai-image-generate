<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upscale Image</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center py-12 px-4">

    <!-- Navbar -->
    <nav class="w-full bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 mb-8 px-6 py-4 flex justify-end items-center">
        <a href="{{ url('/') }}" 
        class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">
            Back to Home
        </a>
    </nav>

    <h1 class="text-3xl font-bold mb-8 text-indigo-700">AI Image Upscaler</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded mb-4">
            {{ $errors->first() }}
        </div>
    @endif

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('upscale.process') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-lg bg-white p-6 rounded shadow">
        @csrf
        <div class="mb-4">
            <label for="image" class="block text-sm font-semibold mb-2">Upload Image to Upscale</label>
            <input type="file" name="image" id="image" required class="w-full border border-gray-300 rounded px-4 py-2">
        </div>

        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded shadow">
            Upscale Image
        </button>
    </form>

    @isset($image)
        <div class="mt-10 text-center">
            <h2 class="text-xl font-semibold text-green-600 mb-4">Upscaled Result:</h2>
            <img id="resultImage" src="data:image/png;base64,{{ $image }}" 
                 alt="Upscaled Image" 
                 class="rounded-lg shadow-lg max-w-xl mx-auto cursor-pointer hover:scale-105 transition" 
                 title="Click to view fullscreen" />

            <a href="data:image/png;base64,{{ $image }}" download="upscaled-{{ time() }}.png"
               class="mt-4 inline-block bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-full shadow">
                Download Image
            </a>
        </div>

        <!-- Fullscreen Modal -->
        <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center hidden z-50 cursor-zoom-out">
            <img src="data:image/png;base64,{{ $image }}" class="max-w-4xl max-h-[90vh] rounded shadow-2xl" />
        </div>

        <script>
            const modal = document.getElementById('imageModal');
            const img = document.getElementById('resultImage');
            img.addEventListener('click', () => modal.classList.remove('hidden'));
            modal.addEventListener('click', () => modal.classList.add('hidden'));
            document.addEventListener('keydown', (e) => {
                if (e.key === "Escape") modal.classList.add('hidden');
            });
        </script>
    @endisset

</body>
</html>
