<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>How It Works | AI Image Tools</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="https://img.icons8.com/fluency/48/000000/maintenance.png" type="image/x-icon">
    <style>
        .step-card {
            transition: all 0.3s ease;
            border-left: 4px solid;
        }
        .step-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        .floating-icons {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }
        .floating-icon {
            position: absolute;
            opacity: 0.1;
            animation: float 15s infinite linear;
        }
        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            100% { transform: translateY(-1000px) rotate(720deg); }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-white/80 backdrop-blur-md shadow-sm py-6 px-4 sm:px-8 flex justify-between items-center sticky top-0 z-50">
        <a href="/" class="text-2xl font-bold text-indigo-700 flex items-center">
            <i class="fas fa-robot mr-2 text-indigo-500 animate-bounce"></i> AI Image Tools
        </a>
        <nav class="hidden md:flex space-x-6">
            <a href="{{ url('/') }}" class="text-gray-600 hover:text-indigo-600 font-medium">Home</a>
            <a href="{{ route('how.it.works') }}" class="text-indigo-600 font-medium">How It Works</a>
            <a href="{{ route('ai.information') }}" class="text-gray-600 hover:text-indigo-600 font-medium">AI Information</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="py-16 px-4 text-center bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">
                How Our AI Image Tools Work
            </h1>
            <p class="text-xl mb-8 opacity-90">
                Simple steps to transform your ideas into stunning visuals using artificial intelligence
            </p>
        </div>
    </section>

    <!-- Steps Section -->
    <section class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8 mb-16">
                <!-- Text to Image -->
                <div class="step-card bg-white p-6 rounded-lg border-l-indigo-500">
                    <div class="flex items-center mb-4">
                        <div class="bg-indigo-100 text-indigo-600 p-3 rounded-full mr-4">
                            <i class="fas fa-font text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold">Text to Image</h3>
                    </div>
                    <ol class="list-decimal list-inside space-y-2 text-gray-600">
                        <li>Enter your descriptive text prompt</li>
                        <li>Choose style preferences (optional)</li>
                        <li>Click "Generate" and wait a few seconds</li>
                        <li>Download or regenerate your image</li>
                    </ol>
                    <a href="{{ url('/generate') }}" class="mt-4 inline-block bg-indigo-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-indigo-700 transition">
                        Try Text to Image <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <!-- Remove Background -->
                <div class="step-card bg-white p-6 rounded-lg border-l-green-500">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 text-green-600 p-3 rounded-full mr-4">
                            <i class="fas fa-cut text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold">Remove Background</h3>
                    </div>
                    <ol class="list-decimal list-inside space-y-2 text-gray-600">
                        <li>Upload your image (JPG, PNG, etc.)</li>
                        <li>Our AI automatically detects the subject</li>
                        <li>Background is removed in seconds</li>
                        <li>Download transparent PNG result</li>
                    </ol>
                    <a href="{{ route('remove.bg.form') }}" class="mt-4 inline-block bg-green-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-green-700 transition">
                        Try Background Removal <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <!-- AI Background -->
                <div class="step-card bg-white p-6 rounded-lg border-l-blue-500">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 text-blue-600 p-3 rounded-full mr-4">
                            <i class="fas fa-mountain text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold">AI Background</h3>
                    </div>
                    <ol class="list-decimal list-inside space-y-2 text-gray-600">
                        <li>Upload your subject image</li>
                        <li>Describe your desired background</li>
                        <li>Choose from AI suggestions (optional)</li>
                        <li>Download your professionally composed image</li>
                    </ol>
                    <a href="{{ route('ai.background.index') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-700 transition">
                        Try AI Background <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>

                <!-- AI Upscale -->
                <div class="step-card bg-white p-6 rounded-lg border-l-purple-500">
                    <div class="flex items-center mb-4">
                        <div class="bg-purple-100 text-purple-600 p-3 rounded-full mr-4">
                            <i class="fas fa-expand text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold">AI Upscale</h3>
                    </div>
                    <ol class="list-decimal list-inside space-y-2 text-gray-600">
                        <li>Upload your low-resolution image</li>
                        <li>Select upscaling factor (2x, 4x, etc.)</li>
                        <li>AI enhances details while upscaling</li>
                        <li>Download high-quality version</li>
                    </ol>
                    <a href="{{ route('upscale.form') }}" class="mt-4 inline-block bg-purple-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-purple-700 transition">
                        Try AI Upscale <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="bg-white rounded-xl shadow-md p-8">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Frequently Asked Questions</h2>
                <div class="space-y-6">
                    <div>
                        <h3 class="font-semibold text-lg mb-2">How long does image generation take?</h3>
                        <p class="text-gray-600">Most images generate in 10-30 seconds depending on complexity and server load.</p>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg mb-2">What image formats are supported?</h3>
                        <p class="text-gray-600">We support JPG, PNG, and WEBP formats for input and output.</p>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg mb-2">Is there a limit to file size?</h3>
                        <p class="text-gray-600">Current limit is 10MB per image for most tools.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="bg-gradient-to-r from-indigo-500 to-purple-600 py-16 px-4 text-center text-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold mb-6">Ready to Create Amazing Images?</h2>
            <p class="text-xl mb-8">Start using our AI tools today - no design skills required!</p>
            <a href="{{ url('/') }}" class="inline-block bg-white text-indigo-600 px-8 py-4 rounded-full text-lg font-semibold shadow-lg hover:bg-gray-100 transition">
                Get Started Now <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 px-4">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 flex items-center">
                        <i class="fas fa-robot mr-2 text-indigo-400"></i> AI Image Tools
                    </h3>
                    <p class="text-gray-400">Empowering creativity through artificial intelligence.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ url('/') }}" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="{{ route('how.it.works') }}" class="text-gray-400 hover:text-white transition">How It Works</a></li>
                        <li><a href="{{ route('ai.information') }}" class="text-gray-400 hover:text-white transition">AI Information</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Connect</h4>
                    <div class="flex space-x-4">
                        <a href="https://twitter.com" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-indigo-600 transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://facebook.com" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-indigo-600 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://instagram.com" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-indigo-600 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://github.com" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-indigo-600 transition">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} AI Image Tools. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>