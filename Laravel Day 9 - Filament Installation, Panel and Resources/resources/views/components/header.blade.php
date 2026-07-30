<header class="shadow-md py-4 bg-purple-100">
    <nav class="container flex justify-between items-center">
        <div>
            <strong class="text-2xl text-[purple]">Laravel</strong><strong class="text-2xl text-[gray]">Project</strong>
        </div>
        <div class="space-x-6">
            <a href="/"
                class="{{ request()->is('/') ? 'text-purple-500 border border-purple-500 px-2 py-1 rounded-md' : 'text-gray-700 hover:text-purple-500' }}"><i
                    class="fa-solid fa-house mr-1"></i>Home</a>
            <a href="/about"
                class="{{ request()->is('about') ? 'text-purple-500 border border-purple-500 px-2 py-1 rounded-md' : 'text-gray-700 hover:text-purple-500' }}">About</a>
            <a href="/services"
                class="{{ request()->is('services') ? 'text-purple-500 border border-purple-500 px-2 py-1 rounded-md' : 'text-gray-700 hover:text-purple-500' }}">Services</a>
            <a href="/courses"
                class="{{ request()->is('courses') ? 'text-purple-500 border border-purple-500 px-2 py-1 rounded-md' : 'text-gray-700 hover:text-purple-500' }}">Courses</a>
            <a href="/contact"
                class="{{ request()->is('contact') ? 'text-purple-500 border border-purple-500 px-2 py-1 rounded-md' : 'text-gray-700 hover:text-purple-500' }}">Contact</a>
        </div>
        <div>
            <a href="/admission/index" class="bg-[purple] hover:bg-orange-500 text-white px-4 py-2 rounded-full">
                Admission</a>
        </div>
    </nav>
</header>
