<x-layout>


    {{-- <section>
        <div class="container">
            <h1 class="text-4xl text-center mt-20 mb-5">This is Courses Page.</h1>

            <form action="/save-course" method="post" class="space-y-6">
                @csrf
                <label for="name">Enter Your Name</label>
                <input type="text" name="age" id="name" placeholder="eg. Ram Bahadur Gurung" class="border px-1 py-2 w-full" required>

                <label for="age">Enter Your Age</label>
                <input type="number" name="age" id="age" placeholder="eg. 25" class="border px-1 py-2 w-full" required>

                <label for="dob">DOB</label>
                <input type="date" name="dob" id="dob" class="border px-1 py-2 w-full" required>

                <label for="time">Time</label>
                <input type="time" name="time" id="time" class="border px-1 py-2 w-full">

                <label for="email">Enter Your Email</label>
                <input type="email" name="email" id="email" placeholder="eg. abc@gmail.com" class="border px-1 py-2 w-full" required>

                <label for="password">Enter Your Password</label>
                <input type="password" name="password" id="password" placeholder="eg. !@456*&" class="border px-1 py-2 w-full" required>

                <label for="course">Select Course</label>
                <select name="course" id="course" class="border px-1 py-2 w-full">
                    <option value="laravel">laravel</option>
                    <option value="react">react</option>
                    <option value="Node">Node</option>
                </select>

                <button type="submit" class="bg-[green] px-5 py-2 rounded-md text-white">Save Record</button>
            </form>

        </div>
    </section> --}}


    <section>
        <div class="container py-16">
            <h1 class="text-4xl text-center mb-8">Create Course</h1>

            <form action="/save-course" method="post" class="space-y-6">
                @csrf

                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label for="course_name">Course Name</label>
                        <input type="text" name="course_name" id="course_name" class="border px-1 py-2 w-full" required>
                    </div>

                    <div>
                        <label for="price">Course Price</label>
                        <input type="number" name="price" id="price" class="border px-1 py-2 w-full">
                    </div>

                    <div class="col-span-2">
                        <label for="description">Course Description</label>
                        {{-- <input type="text" name="description" id="description" class="border px-1 py-2 w-full" required> --}}
                        <textarea name="description" id="description" rows="10" class="border px-1 py-2 w-full"></textarea>
                    </div>
                </div>

                <button type="submit" class="bg-[green] px-5 py-2 rounded-md text-white">Save Record</button>
            </form>

        </div>
    </section>


</x-layout>
