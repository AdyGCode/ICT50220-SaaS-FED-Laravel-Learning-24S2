<x-guest-layout>

    <section class="w-full">
        <h1 class="text-2xl">Posts</h1>

        <a href="{{ route('posts.create') }}"
           class="inline-flex items-center
                  px-4 py-2
                  bg-gray-700 hover:bg-gray-50
                  border border-gray-300
                  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                  rounded-md
                  font-semibold text-xs text-gray-100 hover:text-gray-700
                  uppercase tracking-widest shadow-sm disabled:opacity-25 transition ease-in-out duration-500">
            {{ __('Add Post') }}
        </a>

        <table class="table w-full mt-4">
            <thead class="bg-gray-500 text-white">
            <tr>
                <th class="px-2 py-1 rounded-tl text-right">{{__('ID')}}</th>
                <th class="px-2 py-1">{{__('Title')}}</th>
                <th class="px-2 py-1">{{__('Body')}}</th>
                <th class="px-2 py-1 text-right">{{__('Added')}}</th>
                <th class="px-2 py-1 rounded-tr text-right">{{__('Actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr class="">
                    <td class="border-b px-2 py-1 bg-gray-100 text-right">{{ $post->id }}</td>
                    <td class="border-b px-2 py-1 text-center">{{ $post->title }}</td>
                    <td class="border-b px-2 py-1">{{ $post->body }}</td>
                    <td class="border-b px-2 py-1 text-right">{{ $post->created_at }}</td>
                    <td class="border-b px-2 py-1 ">
                        <form method="POST" action="{{ route('posts.destroy', $post) }}"
                              class="flex flex-row gap-2 justify-end">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('posts.show', $post) }}"
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
                            <a href="{{ route('posts.edit', $post) }}"
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
                    {{ $posts->links() }}
                </td>
            </tr>
            </tfoot>
        </table>
    </section>
</x-guest-layout>
