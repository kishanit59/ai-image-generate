<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AI Image Tools | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="https://img.icons8.com/fluency/48/000000/web.png" type="image/x-icon">
    <style>
        .tool-card {
            transition: all 0.3s ease;
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }
        .tool-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(99,102,241,0.9) 0%, rgba(168,85,247,0.85) 100%);
            z-index: 1;
        }
        .tool-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .tool-content {
            position: relative;
            z-index: 2;
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

    <!-- Animated Header -->
    <header class="bg-white/80 backdrop-blur-md shadow-sm py-6 px-4 sm:px-8 flex justify-between items-center sticky top-0 z-50">
    <a href="/" class="text-2xl font-bold text-indigo-700 flex items-center">
        <i class="fas fa-robot mr-2 text-indigo-500 animate-bounce"></i> AI Image Tools
    </a>
        <nav class="hidden md:flex space-x-6">
            <a href="{{ url('/') }}" class="text-indigo-600 font-medium">Home</a>
            <a href="{{ route('how.it.works') }}" class="text-gray-600 hover:text-indigo-600 font-medium">How It Works</a>
            <a href="{{ route('ai.information') }}" class="text-gray-600 hover:text-indigo-600 font-medium">AI Information</a>
        </nav>
    </header>

    <!-- Hero Section with Animated Background -->
    <section class="relative overflow-hidden py-20 px-4 text-center bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
        <div class="floating-icons">
            <i class="floating-icon fas fa-image" style="left:10%; animation-delay:0s;"></i>
            <i class="floating-icon fas fa-camera" style="left:20%; animation-delay:2s;"></i>
            <i class="floating-icon fas fa-paint-brush" style="left:30%; animation-delay:4s;"></i>
            <i class="floating-icon fas fa-magic" style="left:40%; animation-delay:6s;"></i>
            <i class="floating-icon fas fa-star" style="left:50%; animation-delay:8s;"></i>
            <i class="floating-icon fas fa-expand" style="left:60%; animation-delay:10s;"></i>
            <i class="floating-icon fas fa-cut" style="left:70%; animation-delay:12s;"></i>
            <i class="floating-icon fas fa-font" style="left:80%; animation-delay:14s;"></i>
        </div>
        <div class="max-w-4xl mx-auto relative z-10">
            <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">
                Unleash Your <span class="text-yellow-300">Creativity</span> with AI
            </h2>
            <p class="text-xl md:text-2xl mb-8 opacity-90">
                Transform ordinary images into extraordinary masterpieces with our powerful AI tools
            </p>
            <div class="flex justify-center space-x-4">
                <a href="/ai-information" class="bg-white text-indigo-600 px-6 py-3 rounded-full text-lg font-semibold shadow-lg hover:bg-gray-100 transition transform hover:scale-105">
                    AI Information <i class="fas fa-arrow-down ml-2"></i>
                </a>
                <a href="/how-it-works" class="border-2 border-white text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-white/10 transition transform hover:scale-105">
                    How It Works
                </a>
            </div>
        </div>
    </section>

    <!-- Tools Section -->
    <section id="tools" class="container mx-auto px-4 py-16 space-y-12">
        <!-- Text to Image -->
        <div class="tool-card rounded-2xl shadow-xl" style="background-image: url('https://images.unsplash.com/photo-1534972195531-d756b9bfa9f2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
            <div class="tool-content text-white p-8 md:p-12">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center mb-4 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                        <i class="fas fa-magic mr-2"></i>
                        <span class="font-semibold">AI GENERATION</span>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold mb-4">Text to Image</h3>
                    <p class="text-lg mb-6 opacity-90">Describe your vision in words and watch as our AI brings it to life with stunning, high-quality images generated from your text prompts.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ url('/generate') }}" class="bg-white text-indigo-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition transform hover:scale-105">
                            Try Now <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Text to PNG Image -->
        <div class="tool-card rounded-2xl shadow-xl" style="background-image: url('https://images.unsplash.com/photo-1635070041078-e363dbe005cb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
            <div class="tool-content text-white p-8 md:p-12">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center mb-4 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                        <i class="fas fa-font mr-2"></i>
                        <span class="font-semibold">TEXT EFFECTS</span>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold mb-4">Text to PNG Image</h3>
                    <p class="text-lg mb-6 opacity-90">Create professional transparent PNG images from text with custom fonts, colors, and effects - perfect for logos, banners, and social media.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('text.to.pngimage.form') }}" class="bg-white text-purple-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition transform hover:scale-105">
                            Try Now <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Remove Background -->
        <div class="tool-card rounded-2xl shadow-xl" style="background-image: url('https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
            <div class="tool-content text-white p-8 md:p-12">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center mb-4 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                        <i class="fas fa-cut mr-2"></i>
                        <span class="font-semibold">IMAGE EDITING</span>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold mb-4">Remove Background</h3>
                    <p class="text-lg mb-6 opacity-90">Instantly remove backgrounds from your photos with perfect precision - no green screen or complex editing required.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('remove.bg.form') }}" class="bg-white text-green-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition transform hover:scale-105">
                            Try Now <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- AI Background -->
        <div class="tool-card rounded-2xl shadow-xl" style="background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
            <div class="tool-content text-white p-8 md:p-12">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center mb-4 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                        <i class="fas fa-mountain mr-2"></i>
                        <span class="font-semibold">BACKGROUNDS</span>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold mb-4">AI Background</h3>
                    <p class="text-lg mb-6 opacity-90">Replace dull backgrounds with stunning AI-generated scenes or create perfect professional backgrounds for product photos.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('ai.background.index') }}" class="bg-white text-blue-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition transform hover:scale-105">
                            Try Now <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- AI Upscale Image -->
        <div class="tool-card rounded-2xl shadow-xl" style="background-image: url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
            <div class="tool-content text-white p-8 md:p-12">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center mb-4 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                        <i class="fas fa-expand mr-2"></i>
                        <span class="font-semibold">IMAGE ENHANCEMENT</span>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold mb-4">AI Upscale Image</h3>
                    <p class="text-lg mb-6 opacity-90">Increase your image resolution up to 4x without losing quality - perfect for enlarging photos, artwork, or screenshots.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('upscale.form') }}" class="bg-white text-purple-600 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition transform hover:scale-105">
                            Try Now <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-white py-16 px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Trusted by Creatives Worldwide</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-indigo-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center mr-4">
                            <i class="fas fa-user text-indigo-500 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">Sarah J.</h4>
                            <p class="text-sm text-indigo-600">Graphic Designer</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"The background removal tool saves me hours of work. The precision is incredible!"</p>
                    <div class="mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="bg-purple-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mr-4">
                            <i class="fas fa-user text-purple-500 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">Mike T.</h4>
                            <p class="text-sm text-purple-600">E-commerce Owner</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"AI Backgrounds transformed my product photos from amateur to professional overnight."</p>
                    <div class="mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="bg-pink-50 p-6 rounded-xl">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-pink-100 flex items-center justify-center mr-4">
                            <i class="fas fa-user text-pink-500 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold">Lisa M.</h4>
                            <p class="text-sm text-pink-600">Social Media Manager</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Text to Image helps me create unique visuals for our campaigns in seconds. Game changer!"</p>
                    <div class="mt-4 text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="bg-gradient-to-r from-indigo-500 to-purple-600 py-16 px-4 text-center text-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Transform Your Images?</h2>
            <p class="text-xl mb-8 opacity-90">Join thousands of creators using our AI tools to bring their visions to life</p>
            <a href="/" class="inline-block bg-white text-indigo-600 px-8 py-4 rounded-full text-lg font-semibold shadow-lg hover:bg-gray-100 transition transform hover:scale-105">
                Start Creating Now <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12 px-4">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 flex items-center">
                        <i class="fas fa-robot mr-2 text-indigo-400"></i> AI Image Tools
                    </h3>
                    <p class="text-gray-400">Empowering creativity through artificial intelligence.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Tools</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ url('/generate') }}" class="text-gray-400 hover:text-white transition">Text to Image</a></li>
                        <li><a href="{{ route('text.to.pngimage.form') }}" class="text-gray-400 hover:text-white transition">Text to PNG</a></li>
                        <li><a href="{{ route('remove.bg.form') }}" class="text-gray-400 hover:text-white transition">Remove Background</a></li>
                        <li><a href="{{ route('ai.background.index') }}" class="text-gray-400 hover:text-white transition">AI Background</a></li>
                        <li><a href="{{ route('upscale.form') }}" class="text-gray-400 hover:text-white transition">AI Upscale</a></li>
                    </ul>
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