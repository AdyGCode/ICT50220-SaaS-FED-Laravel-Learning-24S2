<x-guest-layout>

    <section class="w-full">
        <h1 class="text-2xl">States</h1>

        <a href="{{ route('states.create') }}"
           class="bg-zinc-500 hover:bg-zinc-100
                           text-zinc-50 hover:text-zinc-500
                           border border-zinc-500
                           rounded
                           p-1 px-2
                           transition duration-500">
            {{ __('Add State') }}
        </a>

        <table class="table w-full">
            <thead class="bg-gray-500 text-white">
            <tr>
                <th class="px-2 py-1">{{__('ID')}}</th>
                <th class="px-2 py-1">{{__('Code')}}</th>
                <th class="px-2 py-1">{{__('Name')}}</th>
                <th class="px-2 py-1">{{__('Added')}}</th>
                <th class="px-2 py-1">{{__('Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($states as $state)
                <tr>
                    <td class="px-2 py-1">{{ $state->id }}</td>
                    <td class="px-2 py-1">{{ $state->code }}</td>
                    <td class="px-2 py-1">{{ $state->name }}</td>
                    <td class="px-2 py-1">{{ $state->created_at }}</td>
                    <td class="px-2 py-1 flex flex-row gap-2">
                        <form method="POST" action="{{ route('states.destroy', $state) }}">
                            @csrf
                            @method('DELETE')

                        <a href="{{ route('states.show', $state) }}"
                           class="inline-flex items-center
                   px-4 py-2
                   bg-gray-700 hover:bg-gray-50
                   border border-gray-300
                   focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                   rounded-md
                   font-semibold text-xs text-gray-100 hover:text-gray-700
                   uppercase tracking-widest shadow-sm disabled:opacity-25 transition ease-in-out duration-500">
                            {{__('Show')}}
                        </a>
                        <a href="{{ route('states.edit', $state) }}"
                           class="inline-flex items-center
                   px-4 py-2
                   bg-gray-700 hover:bg-gray-50
                   border border-gray-300
                   focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                   rounded-md
                   font-semibold text-xs text-gray-100 hover:text-gray-700
                   uppercase tracking-widest shadow-sm disabled:opacity-25 transition ease-in-out duration-500">
                            {{__('Edit')}}
                        </a>
                            <x-secondary-button type="submit">
                        {{__('Delete')}}
                            </x-secondary-button>

                        </form>
                    </td>
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
