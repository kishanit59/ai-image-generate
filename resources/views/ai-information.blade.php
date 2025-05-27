<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AI in Image Generation & Editing | AI Image Tools</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="https://img.icons8.com/fluency/48/000000/brain.png" type="image/x-icon">

    <style>
        .info-card {
            transition: all 0.3s ease;
            border-top: 4px solid;
        }
        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        .ai-process {
            position: relative;
        }
        .ai-process::before {
            content: "";
            position: absolute;
            left: 24px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, #6366f1, #8b5cf6, #ec4899);
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
            <a href="{{ route('how.it.works') }}" class="text-gray-600 hover:text-indigo-600 font-medium">How It Works</a>
            <a href="{{ route('ai.information') }}" class="text-indigo-600 font-medium">AI Information</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="py-16 px-4 text-center bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">
                Power of AI in Image Generate & Edit
            </h1>
            <p class="text-xl mb-8 opacity-90">
                Discover how artificial intelligence is revolutionizing digital creativity
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="container mx-auto px-4 py-16 flex-1">
        <div class="max-w-4xl mx-auto">
            <!-- Introduction -->
            <div class="bg-white rounded-xl shadow-md p-8 mb-12">
                <h2 class="text-2xl font-bold mb-4 text-gray-800">Understanding AI Image Technology</h2>
                <p class="text-gray-600 mb-4">
                    Artificial Intelligence has transformed the way we create and edit images. Using advanced machine learning models, AI can now generate stunning visuals from text descriptions, enhance existing images, and perform complex edits that previously required professional skills.
                </p>
                <p class="text-gray-600">
                    Our tools leverage cutting-edge technologies like Stable Diffusion, GANs (Generative Adversarial Networks), and computer vision algorithms to deliver professional-quality results in seconds.
                </p>
            </div>

            <!-- AI Capabilities Section -->
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <!-- Generation Card -->
                <div class="info-card bg-white p-6 rounded-lg border-t-indigo-500">
                    <div class="flex items-center mb-4">
                        <div class="bg-indigo-100 text-indigo-600 p-3 rounded-full mr-4">
                            <i class="fas fa-magic text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold">Image Generation</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        AI can create entirely new images from text prompts by understanding:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li>Objects and their relationships</li>
                        <li>Artistic styles and compositions</li>
                        <li>Color palettes and lighting</li>
                        <li>Contextual understanding of prompts</li>
                    </ul>
                </div>

                <!-- Editing Card -->
                <div class="info-card bg-white p-6 rounded-lg border-t-green-500">
                    <div class="flex items-center mb-4">
                        <div class="bg-green-100 text-green-600 p-3 rounded-full mr-4">
                            <i class="fas fa-edit text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold">Image Editing</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        AI-powered editing can perform complex tasks automatically:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li>Precise background removal</li>
                        <li>Object removal and inpainting</li>
                        <li>Style transfer between images</li>
                        <li>Quality enhancement and upscaling</li>
                    </ul>
                </div>
            </div>

            <!-- How AI Process Works -->
            <div class="bg-white rounded-xl shadow-md p-8 mb-12">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">How AI Creates and Edits Images</h2>
                
                <div class="ai-process space-y-8 pl-12">
                    <!-- Step 1 -->
                    <div class="relative">
                        <div class="absolute left-0 top-0 w-8 h-8 rounded-full bg-indigo-500 text-white flex items-center justify-center">
                            <span>1</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2" style="margin-left:40px;">Training Phase</h3>
                        <p class="text-gray-600">
                            AI models are trained on millions of images to learn patterns, styles, and relationships between visual elements and text descriptions.
                        </p>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="relative">
                        <div class="absolute left-0 top-0 w-8 h-8 rounded-full bg-purple-500 text-white flex items-center justify-center">
                            <span>2</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2" style="margin-left:40px;">Understanding Input</h3>
                        <p class="text-gray-600">
                            When you provide a prompt or image, the AI analyzes it using natural language processing (for text) or computer vision (for images).
                        </p>
                    </div>
                    
                    <!-- Step 3 -->
                    <div class="relative">
                        <div class="absolute left-0 top-0 w-8 h-8 rounded-full bg-pink-500 text-white flex items-center justify-center">
                            <span>3</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2" style="margin-left:40px;">Generation/Editing Process</h3>
                        <p class="text-gray-600">
                            The AI uses its trained knowledge to predict and generate new pixels that match your request, iteratively refining the output.
                        </p>
                    </div>
                    
                    <!-- Step 4 -->
                    <div class="relative">
                        <div class="absolute left-0 top-0 w-8 h-8 rounded-full bg-blue-500 text-white flex items-center justify-center">
                            <span>4</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2" style="margin-left:40px;">Output Delivery</h3>
                        <p class="text-gray-600">
                            The final image is rendered and delivered to you, often with options to refine or make adjustments.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Benefits Section -->
            <div class="bg-white rounded-xl shadow-md p-8 mb-12">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Benefits of AI-Powered Image Tools</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-indigo-50 p-4 rounded-lg">
                        <div class="text-indigo-600 mb-2">
                            <i class="fas fa-bolt text-2xl"></i>
                        </div>
                        <h3 class="font-semibold mb-2">Speed</h3>
                        <p class="text-gray-600 text-sm">
                            Complete complex edits in seconds that would take hours manually
                        </p>
                    </div>
                    <div class="bg-purple-50 p-4 rounded-lg">
                        <div class="text-purple-600 mb-2">
                            <i class="fas fa-dollar-sign text-2xl"></i>
                        </div>
                        <h3 class="font-semibold mb-2">Cost-Effective</h3>
                        <p class="text-gray-600 text-sm">
                            Professional results without expensive software or skills
                        </p>
                    </div>
                    <div class="bg-pink-50 p-4 rounded-lg">
                        <div class="text-pink-600 mb-2">
                            <i class="fas fa-lightbulb text-2xl"></i>
                        </div>
                        <h3 class="font-semibold mb-2">Creativity</h3>
                        <p class="text-gray-600 text-sm">
                            Explore ideas beyond your current technical abilities
                        </p>
                    </div>
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <div class="text-blue-600 mb-2">
                            <i class="fas fa-chart-line text-2xl"></i>
                        </div>
                        <h3 class="font-semibold mb-2">Consistency</h3>
                        <p class="text-gray-600 text-sm">
                            Maintain quality across multiple images
                        </p>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <div class="text-green-600 mb-2">
                            <i class="fas fa-magic text-2xl"></i>
                        </div>
                        <h3 class="font-semibold mb-2">Accessibility</h3>
                        <p class="text-gray-600 text-sm">
                            Professional tools available to everyone
                        </p>
                    </div>
                    <div class="bg-yellow-50 p-4 rounded-lg">
                        <div class="text-yellow-600 mb-2">
                            <i class="fas fa-infinity text-2xl"></i>
                        </div>
                        <h3 class="font-semibold mb-2">Possibilities</h3>
                        <p class="text-gray-600 text-sm">
                            Endless creative potential with evolving technology
                        </p>
                    </div>
                </div>
            </div>

            <!-- Future Section -->
            <div class="bg-white rounded-xl shadow-md p-8">
                <h2 class="text-2xl font-bold mb-4 text-gray-800">The Future of AI in Imaging</h2>
                <p class="text-gray-600 mb-6">
                    AI image technology is advancing rapidly. Future developments may include:
                </p>
                <ul class="list-disc list-inside text-gray-600 space-y-2 mb-6">
                    <li>Real-time collaborative AI editing</li>
                    <li>3D model generation from 2D images</li>
                    <li>Full-scene video generation from text</li>
                    <li>Emotion-aware image generation</li>
                    <li>Personalized AI art styles</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="bg-gradient-to-r from-indigo-500 to-purple-600 py-16 px-4 text-center text-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold mb-6">Ready to Experience AI-Powered Creativity?</h2>
            <p class="text-xl mb-8">Try our tools today and see what AI can do for your images</p>
            <a href="{{ url('/') }}" class="inline-block bg-white text-indigo-600 px-8 py-4 rounded-full text-lg font-semibold shadow-lg hover:bg-gray-100 transition">
                Explore Tools <i class="fas fa-arrow-right ml-2"></i>
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