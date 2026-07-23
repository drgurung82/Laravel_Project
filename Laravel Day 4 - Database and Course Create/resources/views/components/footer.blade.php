<footer class="bg-purple-200 text-[#2d2b2b] mt-10">
    <div class="container mx-auto px-6 py-10">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Company -->
            <div>
                <h2 class="text-2xl font-bold text-[purple]">
                    Laravel<span class="text-[gray]">Project</span>
                </h2>

                <p class="mt-4 text-[#2d2b2b]">
                    We provide modern Laravel web applications with responsive
                    design and high performance.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-semibold mb-4 text-[purple]">
                    Quick Links
                </h3>

                <ul class="space-y-2">
                    <li>
                        <a href="{{ url('/') }}" class="hover:text-orange-500">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/about') }}" class="hover:text-orange-500">
                            About
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/courses') }}" class="hover:text-orange-500">
                            Courses
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/contact') }}" class="hover:text-orange-500">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-xl font-semibold mb-4 text-[purple]">
                    Contact
                </h3>

                <p class="mb-2">
                    <i class="fa-solid fa-location-dot text-orange-500"></i>
                    Waling-1, Syangja, Nepal
                </p>

                <p class="mb-2">
                    <i class="fa-solid fa-phone text-orange-500"></i>
                    +977-9860013137
                </p>

                <p>
                    <i class="fa-solid fa-envelope text-orange-500"></i>
                    drgurung82@gmail.com
                </p>
            </div>

            <!-- Social -->
            <div>
                <h3 class="text-xl font-semibold mb-4 text-[purple]">
                    Follow Us
                </h3>

                <div class="flex gap-4">

                    <a href="#" class="w-10 h-10 rounded-full bg-blue-500 hover:bg-orange-600 flex items-center justify-center">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#" class="w-10 h-10 rounded-full bg-pink-500 hover:bg-orange-600 flex items-center justify-center">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="#" class="w-10 h-10 rounded-full bg-red-500 hover:bg-orange-600 flex items-center justify-center">
                        <i class="fab fa-youtube"></i>
                    </a>

                </div>
            </div>

        </div>

        <hr class="border-gray-700 my-8">

        <div class="text-center text-[gray]">

            © {{ date('Y') }} Laravel Project. All Rights Reserved.

        </div>

    </div>
</footer>
