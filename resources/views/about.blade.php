<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-red-600 text-white py-10 text-center">
        <h1 class="text-4xl font-bold">About Us</h1>
        <p class="mt-2 text-lg">Learn more about our journey and mission</p>
    </header>

    <!-- About Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-800">Who We Are</h2>
                <p class="mt-4 text-gray-600 text-lg">We are a team of passionate individuals committed to bringing the best services and solutions for your business. With years of experience and a dedicated approach, we strive to help you achieve your goals.</p>
            </div>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/500" alt="Our Team" class="rounded-lg shadow-lg">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-800">Our Journey</h3>
                    <p class="mt-4 text-gray-600">Founded in 2020, our company started with a vision to innovate the tech industry by creating cutting-edge solutions for businesses of all sizes. Our passion for excellence has driven us to expand our services, grow our team, and continually push the boundaries of what's possible in our field.</p>
                    <p class="mt-4 text-gray-600">Today, we serve hundreds of clients worldwide, providing customized services that meet the unique needs of each business. We believe in building long-term relationships and delivering exceptional value to our clients.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-800">Our Mission & Vision</h2>
            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-red-600">Our Mission</h3>
                    <p class="mt-4 text-gray-600">To provide innovative and reliable solutions that empower businesses to thrive in a fast-paced, ever-changing world. We are dedicated to delivering the best customer experience and continuously improving our services to meet evolving demands.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-red-600">Our Vision</h3>
                    <p class="mt-4 text-gray-600">To be the leading provider of business solutions, recognized for our exceptional service, cutting-edge technology, and unwavering commitment to customer success. We aim to transform the way businesses operate and grow through our innovative products and services.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-800">Meet Our Team</h2>
            <p class="mt-4 text-gray-600">Our team of experts is dedicated to ensuring your success.</p>

            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="John Doe" class="w-32 h-32 rounded-full mx-auto">
                    <h3 class="mt-4 text-xl font-bold text-gray-800">John Doe</h3>
                    <p class="text-gray-600">CEO & Founder</p>
                </div>

                <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Jane Smith" class="w-32 h-32 rounded-full mx-auto">
                    <h3 class="mt-4 text-xl font-bold text-gray-800">Jane Smith</h3>
                    <p class="text-gray-600">CTO</p>
                </div>

                <div class="p-6 bg-gray-100 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Alice Johnson" class="w-32 h-32 rounded-full mx-auto">
                    <h3 class="mt-4 text-xl font-bold text-gray-800">Alice Johnson</h3>
                    <p class="text-gray-600">COO</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Back Button -->
    <div class="text-center mt-8">
        <a href="javascript:history.back()" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700">Back</a>
    </div>


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
