<x-guest-layout>

    <section class="w-full">
    <h1 class="text-2xl">Countries</h1>

    <table class="table w-full">
        <thead class="bg-gray-500 text-white">
        <tr>
            <th class="px-2 py-1">ID</th>
            <th class="px-2 py-1">ISO 2</th>
            <th class="px-2 py-1">Name</th>
            <th class="px-2 py-1">Added</th>
            <th class="px-2 py-1">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($countries as $country)
        <tr>
            <td class="px-2 py-1">{{ $country->id }}</td>
            <td class="px-2 py-1">{{ $country->iso2 }}</td>
            <td class="px-2 py-1">{{ $country->name }}</td>
            <td class="px-2 py-1">{{ $country->created_at }}</td>
            <td class="px-2 py-1">Show Edit Delete</td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td colspan="5" class="p-2">
                {{ $countries->links() }}
            </td>
        </tr>
        </tfoot>
    </table>
    </section>
</x-guest-layout>
