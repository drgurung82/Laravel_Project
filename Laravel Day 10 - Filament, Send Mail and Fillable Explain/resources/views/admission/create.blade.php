<x-layout>


    <section>
        <div class="container py-20">
            <div class="flex justify-between items-center">
                <h1 class="text-4xl text-center mt-20 mb-5">Admission Create</h1>
                <a href="/admission/index" class="bg-[purple] hover:bg-orange-500 text-white px-6 py-2 rounded-full">go
                    back</a>
            </div>

            <form action="/admission/store" method="post" class="space-y-6">
                @csrf

                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label for="name">Enter Your Name</label>
                        <input type="text" name="name" id="name" placeholder="eg. Dhan Raj Gurung" class="border px-1 py-2 w-full rounded-md"
                            value="{{ old('name') }}">
                        @error('name')
                            <span class="text-sm text-[red]">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="email">Enter Your Email</label>
                        <input type="email" name="email" id="email" placeholder="eg. abc@gmail.com" class="border px-1 py-2 w-full rounded-md"
                            value="{{ old('email') }}">
                        @error('email')
                            <span class="text-sm text-[red]">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="phone">Enter Your Phone Number</label>
                        <input type="tel" name="phone" id="phone" placeholder="eg. 9xxxxxxxxx" class="border px-1 py-2 w-full rounded-md"
                            value="{{ old('phone') }}">
                        @error('phone')
                            <span class="text-sm text-[red]">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="course">Select Course</label>
                        {{-- <input type="text" name="course" id="course" class="border px-1 py-2 w-full"> --}}
                        <select name="course" id="course" class="border px-1 py-2 w-full rounded-md">
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}"
                                    {{ old('course') == $course->id ? 'selected' : '' }}>{{ $course->name }}, Rs.
                                    {{ $course->price }}/-
                                </option>
                            @endforeach
                        </select>
                        @error('course')
                            <span class="text-sm text-[red]">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="bg-[purple] hover:bg-orange-500 px-5 py-2 rounded-md text-white">Save
                    Record</button>
            </form>

        </div>
    </section>


</x-layout>
