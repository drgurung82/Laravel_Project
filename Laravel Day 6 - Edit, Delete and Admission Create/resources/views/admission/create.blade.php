<x-layout>


    <section>
        <div class="container py-10">
            <div class="flex justify-between items-center">
                <h1 class="text-4xl text-center mt-20 mb-5">Admission Create</h1>
            <a href="/admission/index" class="bg-[purple] hover:bg-orange-500 text-white px-6 py-2 rounded-full">go back</a>
            </div>

            <form action="/save-course" method="post" class="space-y-6">
                @csrf

                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label for="name">Enter Your Name</label>
                        <input type="text" name="name" id="name" class="border px-1 py-2 w-full" required>
                    </div>

                    <div>
                        <label for="mobile">Enter Your Mobile Number</label>
                        <input type="number" name="mobile" id="mobile" class="border px-1 py-2 w-full" required>
                    </div>

                    <div>
                        <label for="email">Enter Your Email</label>
                        <input type="email" name="email" id="email" class="border px-1 py-2 w-full" required>
                    </div>

                    <div>
                        <label for="course">Select Course</label>
                        <input type="text" name="course" id="course" class="border px-1 py-2 w-full" required>
                    </div>
                </div>

                <button type="submit" class="bg-[purple] hover:bg-orange-500 px-5 py-2 rounded-md text-white">Save Record</button>
            </form>

        </div>
    </section>


</x-layout>
