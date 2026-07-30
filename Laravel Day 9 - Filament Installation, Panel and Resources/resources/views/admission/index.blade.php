<x-layout>


    <section>

        <div class="container py-10">

            <div class="w-full flex justify-between items-center">
                <h1 class="text-4xl text-center mt-2 mb-2">Admission</h1>
                <a href="/admission/create" class="bg-[purple] hover:bg-orange-500 text-white px-6 py-2 rounded-full">add
                    new</a>
            </div>

            <table class="w-full mt-10 mb-10 text-center">
                <thead>
                    <tr class="bg-purple-300">
                        <th class="py-2 border border-purple-300">S.N.</th>
                        <th class="py-2 border border-purple-300">Name</th>
                        <th class="py-2 border border-purple-300">Email</th>
                        <th class="py-2 border border-purple-300">Phone</th>
                        <th class="py-2 border border-purple-300">Course</th>
                        <th class="py-2 border border-purple-300">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($admissions as $ad)
                        <tr>
                            <td class="border border-purple-200 py-2">{{ $loop->iteration }}</td>
                            <td class="border border-purple-200 py-2">{{ $ad->name }}</td>
                            <td class="border border-purple-200 py-2">{{ $ad->email }}</td>
                            <td class="border border-purple-200 py-2">{{ $ad->phone }}</td>
                            <td class="border border-purple-200 py-2">{{ $ad->course->name }}, Rs. {{ $ad->course->price }}/- </td>
                            <td class="border border-purple-200 py-2 flex gap-1 justify-center">
                                <a href="/admission/edit/{{ $ad->id }}" class="bg-[green] hover:bg-orange-500 text-white px-2 py-1 rounded-md">
                                    Edit
                                </a>
                                <span>|</span>
                                <form action="/admission/delete/{{ $ad->id }}" method="post" class="bg-[red] hover:bg-orange-500 text-white px-2 py-1 rounded-md">
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
