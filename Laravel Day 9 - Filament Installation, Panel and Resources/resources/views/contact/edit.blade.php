<x-layout>


    <section>
        <div class="container py-10">
            <div class="flex justify-between items-center">
                <h1 class="text-4xl text-center mt-20 mb-5">Contact Edit</h1>
                <a href="/contact" class="bg-[purple] hover:bg-orange-500 text-white px-6 py-2 rounded-full">go
                    back</a>
            </div>

            <form action="/contact/update/{{ $contact->id }}" method="post" class="space-y-6">
                @csrf
                @method('patch')
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="eg. Dhan Raj Gurung"
                            class="border px-1 py-2 w-full" value="{{ Old("name") ?? $contact->name }}">
                        @error('name')
                            <span class="text-sm text-[red]">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="eg. abc@gmail.com"
                            class="border px-1 py-2 w-full" value="{{ Old("email") ?? $contact->email }}">
                        @error('email')
                            <span class="text-sm text-[red]">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" id="phone" class="border px-1 py-2 w-full"
                            value="{{ Old("phone") ?? $contact->phone }}">
                        @error('phone')
                            <span class="text-sm text-[red]">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" class="border px-1 py-2 w-full"
                            value="{{ Old("subject") ?? $contact->subject }}">
                        @error('subject')
                            <span class="text-sm text-[red]">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-span-2">
                        <label for="message">Message</label>
                        {{-- <input type="text" name="description" id="description" class="border px-1 py-2 w-full" required> --}}
                        <textarea name="message" id="message" rows="6" class="border px-1 py-2 w-full" value="{{ Old("message") ?? $contact->message }}">{{ $contact->message }}</textarea>
                        @error('message')
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
