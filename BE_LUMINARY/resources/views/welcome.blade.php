<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-red-600">BrandName</a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-600 hover:text-gray-800">Home</a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">Features</a>
                    <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-800">About</a>
                    <a href="#" class="text-gray-600 hover:text-gray-800">Contact</a>
                </div>
                <div class="md:flex items-center space-x-4">
                    <a href="#" class="text-gray-600 hover:text-gray-800">Login</a>
                    <a href="#" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>
    

    <!-- Hero Section -->
    <header class="bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
            <h1 class="text-5xl font-bold text-gray-800">Welcome to Our Amazing Product</h1>
            <p class="mt-4 text-gray-600 text-lg">Discover the best solution for your business. Grow your potential with our powerful platform.</p>
            <div class="mt-8">
                <a href="#" class="px-6 py-3 bg-red-600 text-white rounded-md hover:bg-red-700">Get Started</a>
                <a href="#" class="ml-4 px-6 py-3 bg-gray-200 text-gray-800 rounded-md hover:bg-gray-300">Learn More</a>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-800">Our Features</h2>
            <p class="mt-4 text-gray-600">What makes us different and better?</p>
            
            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold text-gray-800">Feature 1</h3>
                    <p class="mt-2 text-gray-600">Brief description of what makes this feature useful.</p>
                </div>

                <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold text-gray-800">Feature 2</h3>
                    <p class="mt-2 text-gray-600">Brief description of what makes this feature useful.</p>
                </div>

                <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold text-gray-800">Feature 3</h3>
                    <p class="mt-2 text-gray-600">Brief description of what makes this feature useful.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-800">What Our Users Say</h2>
            <p class="mt-4 text-gray-600">See what others have experienced using our platform.</p>

            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <p class="text-gray-600 italic">"This platform has revolutionized my business!"</p>
                    <h3 class="mt-4 text-lg font-bold text-gray-800">John Doe</h3>
                </div>

                <div class="p-6 bg-white rounded-lg shadow-md">
                    <p class="text-gray-600 italic">"I couldn't be happier with the results."</p>
                    <h3 class="mt-4 text-lg font-bold text-gray-800">Jane Smith</h3>
                </div>

                <div class="p-6 bg-white rounded-lg shadow-md">
                    <p class="text-gray-600 italic">"The best decision I made for my company."</p>
                    <h3 class="mt-4 text-lg font-bold text-gray-800">Alice Johnson</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-red-600 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h2 class="text-3xl font-bold">Ready to get started?</h2>
            <p class="mt-4 text-lg">Join us today and see how we can transform your business.</p>
            <div class="mt-8">
                <a href="#" class="px-6 py-3 bg-white text-red-600 rounded-md hover:bg-gray-100">Sign Up Now</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-400">
            <p>&copy; 2024 BrandName. All rights reserved.</p>
            <div class="mt-4">
                <a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a>
                <span class="mx-2">|</span>
                <a href="#" class="text-gray-400 hover:text-white">Terms of Service</a>
            </div>
        </div>
    </footer>

</body>
</html>
