<x-layout>


    <section>
        <div class="container py-10">
            <div class="flex justify-between items-center">
                <h1 class="text-4xl text-center mt-20 mb-5">Course Create</h1>
            <a href="/courses" class="bg-[purple] hover:bg-orange-500 text-white px-6 py-2 rounded-full">go back</a>
            </div>

            <form action="/save-course" method="post" class="space-y-6">
                @csrf

                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label for="course_name">Course Name</label>
                        <input type="text" name="course_name" id="course_name" placeholder="eg. Laravel" class="border px-1 py-2 w-full rounded-md" value="{{ old('course_name') }}">
                         @error('course_name')
                            <span class="text-sm text-[red]">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="price">Course Price</label>
                        <input type="number" name="price" id="price" placeholder="eg. 2499" class="border px-1 py-2 w-full rounded-md" value="{{ old('price') }}">
                         @error('price')
                            <span class="text-sm text-[red]">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <label for="description">Course Description</label>
                        {{-- <input type="text" name="description" id="description" class="border px-1 py-2 w-full" required> --}}
                        <textarea name="description" id="description" rows="6" class="border px-1 py-2 w-full rounded-md"></textarea>
                         @error('description')
                            <span class="text-sm text-[red]">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="bg-[purple] hover:bg-orange-500 px-5 py-2 rounded-md text-white">Save Record</button>
            </form>

        </div>
    </section>


</x-layout>
