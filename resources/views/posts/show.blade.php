<x-guest-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <article class="w-full">

        <section>
        <dl class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-10 gap-2 w-full ">
                <dt class="font-semibold">ID</dt>
                <dd class="col-span-1 sm:col-span-2 md:col-span-9">{{ $post->id }}</dd>
                <dt class="font-semibold">Title</dt>
                <dd class="col-span-1 sm:col-span-2 md:col-span-9">{{ $post->title }}</dd>
                <dt class="font-semibold">Body</dt>
                <dd class="col-span-1 sm:col-span-2 md:col-span-9">{{ $post->body }}</dd>
                <dt class="font-semibold">Created</dt>
                <dd class="col-span-1 sm:col-span-2 md:col-span-9">{{ $post->created_at }}</dd>
                <dt class="font-semibold">Updated</dt>
                <dd class="col-span-1 sm:col-span-2 md:col-span-9">{{ $post->updated_at }}</dd>
        </dl>
            <footer class="col-span-full flex flex-row gap-2 mt-4">
                <a href="{{ route('posts.edit', $post) }}"
                   class="inline-flex items-center
                   px-4 py-2
                   bg-gray-700 hover:bg-gray-50
                   border border-gray-300
                   focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                   rounded-md
                   font-semibold text-xs text-gray-100 hover:text-gray-700
                   uppercase tracking-widest shadow-sm disabled:opacity-25 transition ease-in-out duration-500">
                    Edit
                </a>
                <a href="{{ route('posts.index') }}"
                   class="inline-flex items-center
                   px-4 py-2
                   bg-gray-700 hover:bg-gray-50
                   border border-gray-300
                   focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
                   rounded-md
                   font-semibold text-xs text-gray-100 hover:text-gray-700
                   uppercase tracking-widest shadow-sm disabled:opacity-25 transition ease-in-out duration-500">
                    {{ __('Back to List') }}
                </a>
            </footer>
        </section>

    </article>
</x-guest-layout>
