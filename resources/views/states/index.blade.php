<x-guest-layout>

    <section class="w-full">
        <h1 class="text-2xl">States</h1>

        <a href="{{ route('states.create') }}"
           class="inline-flex items-center
                  px-4 py-2
                  bg-gray-700 hover:bg-gray-50
                  border border-gray-300
                  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                  rounded-md
                  font-semibold text-xs text-gray-100 hover:text-gray-700
                  uppercase tracking-widest shadow-sm disabled:opacity-25 transition ease-in-out duration-500">
            {{ __('Add State') }}
        </a>

        <table class="table w-full mt-4">
            <thead class="bg-gray-500 text-white">
            <tr>
                <th class="px-2 py-1 rounded-tl text-right">{{__('ID')}}</th>
                <th class="px-2 py-1">{{__('Code')}}</th>
                <th class="px-2 py-1">{{__('Name')}}</th>
                <th class="px-2 py-1 text-left">{{__('Country')}}</th>
                <th class="px-2 py-1 text-right">{{__('Added')}}</th>
                <th class="px-2 py-1 rounded-tr text-right">{{__('Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($states as $state)
                <tr class="">
                    <td class="border-b px-2 py-1 bg-gray-100 text-right">{{ $state->id }}</td>
                    <td class="border-b px-2 py-1 text-center">{{ $state->state_code }}</td>
                    <td class="border-b px-2 py-1">{{ $state->name }}</td>
                    <td class="border-b px-2 py-1 text-left">{{ $state->country->name }}</td>
                    <td class="border-b px-2 py-1 text-right">{{ $state->created_at }}</td>
                    <td class="border-b px-2 py-1 ">
                        <form method="POST" action="{{ route('states.destroy', $state) }}"
                              class="flex flex-row gap-2 justify-end">
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
            <tfoot class="">
            <tr class="">
                <td colspan="6" class="p-2 pt-3 rounded-b">
                    {{ $states->links() }}
                </td>
            </tr>
            </tfoot>
        </table>
    </section>
</x-guest-layout>
