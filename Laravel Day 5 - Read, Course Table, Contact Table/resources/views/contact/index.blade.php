<x-layout>


    <section>
        <div class="container py-16">
            <div class="w-full flex justify-between items-center">
                <h1 class="text-4xl text-center mt-2 mb-2">Contact</h1>
                <a href="/contact/create" class="bg-[purple] text-white px-6 py-2 rounded-full">add new</a>
            </div>

            <table class="w-full mt-10 mb-10 text-center">
                <thead>
                    <tr class="bg-purple-300">
                        <th class="py-2 border border-purple-300">SN</th>
                        <th class="py-2 border border-purple-300">Name</th>
                        <th class="py-2 border border-purple-300">Email</th>
                        <th class="py-2 border border-purple-300">Phone</th>
                        <th class="py-2 border border-purple-300">Subject</th>
                        <th class="py-2 border border-purple-300">Message</th>
                        <th class="py-2 border border-purple-300">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($contact as $item)
                        <tr>
                            <td class="border border-purple-200 py-2">{{$loop->iteration}}</td>
                            <td class="border border-purple-200 py-2">{{$item->name}}</td>
                            <td class="border border-purple-200 py-2">{{$item->email}}</td>
                            <td class="border border-purple-200 py-2">{{$item->phone}}</td>
                            <td class="border border-purple-200 py-2">{{$item->subject}}</td>
                            <td class="border border-purple-200 py-2">{{$item->message}}</td>
                            <td class="border border-purple-200 py-2">Edit | Delete</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>


</x-layout>
