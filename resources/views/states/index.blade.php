<x-guest-layout>

    <section class="w-full">
    <h1 class="text-2xl">States</h1>

    <table class="table w-full">
        <thead class="bg-gray-500 text-white">
        <tr>
            <th class="px-2 py-1">ID</th>
            <th class="px-2 py-1">Code</th>
            <th class="px-2 py-1">Name</th>
            <th class="px-2 py-1">Added</th>
            <th class="px-2 py-1">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($states as $state)
        <tr>
            <td class="px-2 py-1">{{ $state->id }}</td>
            <td class="px-2 py-1">{{ $state->code }}</td>
            <td class="px-2 py-1">{{ $state->name }}</td>
            <td class="px-2 py-1">{{ $state->created_at }}</td>
            <td class="px-2 py-1">Show Edit Delete</td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td colspan="5" class="p-2">
                {{ $states->links() }}
            </td>
        </tr>
        </tfoot>
    </table>
    </section>
</x-guest-layout>
