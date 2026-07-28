<footer class="bg-purple-200 text-[#2d2b2b] mt-10 border-t-8 border-[gray]">

    <div class="container mx-auto px-6 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Company -->
            <div>
                <h2 class="text-2xl font-bold text-[purple]">
                    Laravel<span class="text-[gray]">Project</span>
                </h2>
                <p class="mt-4 text-[#2d2b2b]">
                    We develop modern Laravel web applications featuring responsive design, fast performance, secure
                    architecture, scalable solutions, intuitive user experiences, and reliable functionality tailored to
                    business needs.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-xl font-semibold mb-4 text-[purple]">
                    Quick Links
                </h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ url('/') }}" class="group flex items-center gap-1 hover:text-orange-500">
                            Home
                            <span class="transition-transform duration-300 group-hover:rotate-90">
                                <i class="fa-solid fa-angles-up"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}" class="group flex items-center gap-1 hover:text-orange-500">
                            About
                            <span class="transition-transform duration-300 group-hover:rotate-90">
                                <i class="fa-solid fa-angles-up"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/courses') }}" class="group flex items-center gap-1 hover:text-orange-500">
                            Courses
                            <span class="transition-transform duration-300 group-hover:rotate-90">
                                <i class="fa-solid fa-angles-up"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}" class="group flex items-center gap-1 hover:text-orange-500">
                            Contact
                            <span class="transition-transform duration-300 group-hover:rotate-90">
                                <i class="fa-solid fa-angles-up"></i>
                            </span>
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
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-blue-400 hover:bg-orange-600 flex items-center justify-center">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-pink-400 hover:bg-orange-600 flex items-center justify-center">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-[red] hover:bg-orange-600 flex items-center justify-center">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>

        <hr class="border-purple-700 my-8">

        <!-- Footer Menu -->
        <div class="container mx-auto flex justify-center py-1 pb-8 gap-6">
            <div class="space-x-2 items-center">
                <a href="/" class="hover:text-white hover:bg-orange-500 text-[white] bg-[purple] px-2 py-1 border rounded-md">Home</a>
                <a href="/about" class="hover:text-white hover:bg-orange-500 text-[purple] px-2 py-1 border rounded-md">About</a>
                <a href="/contact" class="hover:text-white hover:bg-orange-500 text-[purple] px-2 py-1 border rounded-md">Contact</a>
                <a href="#" class="hover:text-white hover:bg-orange-500 text-[purple] px-2 py-1 border rounded-md">Disclaimer</a>
                <a href="#" class="hover:text-white hover:bg-orange-500 text-[purple] px-2 py-1 border rounded-md">Privacy</a>
                <a href="#" class="hover:text-white hover:bg-orange-500 text-[purple] px-2 py-1 border rounded-md">Sitemap</a>
                <a href="#" class="hover:text-white hover:bg-orange-500 text-[purple] px-2 py-1 border rounded-md">Terms</a>
            </div>
            <div>
                <a href="https://wa.me/9860013137" target="_blank"
                    class="fixed right-5 bottom-5 flex items-center gap-2 bg-[green] text-[white] px-4 py-1 rounded-md shadow-lg hover:bg-green-600 transition">Chat
                    on Whatsapp<i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
        <div class="text-center text-[gray]">
            © {{ date('Y') }} <a href="http://127.0.0.1:8000/" class="hover:text-orange-600">Laravel Project</a>.
            All Rights Reserved.
        </div>
    </div>

</footer>
