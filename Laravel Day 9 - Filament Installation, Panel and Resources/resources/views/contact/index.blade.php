<x-layout>


    <section>
        <div class="container py-16">
            <div class="w-full flex justify-between items-center">
                <h1 class="text-4xl text-center mt-2 mb-2">Contact</h1>
                <a href="/contact/create" class="bg-[purple] hover:bg-orange-500 text-white px-6 py-2 rounded-full">add
                    new</a>
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
                    @foreach ($contact as $con)
                        <tr>
                            <td class="border border-purple-200 py-2">{{ $loop->iteration }}</td>
                            <td class="border border-purple-200 py-2">{{ $con->name }}</td>
                            <td class="border border-purple-200 py-2">{{ $con->email }}</td>
                            <td class="border border-purple-200 py-2">{{ $con->phone }}</td>
                            <td class="border border-purple-200 py-2">{{ $con->subject }}</td>
                            <td class="border border-purple-200 py-2">{{ $con->message }}</td>
                            <td class="border border-purple-200 py-2 flex gap-1 justify-center">
                                <a href="/contact/edit/{{ $con->id }}"
                                    class="bg-[green] hover:bg-orange-500 text-white px-2 py-1 rounded-md">
                                    Edit
                                </a>
                                <span>|</span>
                                <form action="/contact/delete/{{ $con->id }}" method="post"
                                    class="bg-[red] hover:bg-orange-500 text-white px-2 py-1 rounded-md">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>


</x-layout>
