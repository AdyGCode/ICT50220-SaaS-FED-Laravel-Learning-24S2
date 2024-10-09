<x-guest-layout>

    <article class="w-full">
        <h1 class="text-2xl">States</h1>

        <section class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-10  w-full ">
            @foreach($state as $s)
                <p>ID</p>
                <p class="col-span-1 sm:col-span-2 md:col-span-9">{{ $s->id }}</p>
                <p>Name</p>
                <p class="col-span-1 sm:col-span-2 md:col-span-9">{{ $s->name }}</p>
                <p>Code</p>
                <p class="col-span-1 sm:col-span-2 md:col-span-9">{{ $s->code }}</p>
                <p>Country</p>
                <p class="col-span-1 sm:col-span-2 md:col-span-9">{{ $s->country->name }}</p>
                <p>Created</p>
                <p class="col-span-1 sm:col-span-2 md:col-span-9">{{ $s->created_at }}</p>
                <p>Updated</p>
                <p class="col-span-1 sm:col-span-2 md:col-span-9">{{ $s->updated_at }}</p>
            @endforeach
            <footer class="col-span-full flex flex-row gap-2">
                <a href="{{ route('states.edit', $s) }}"
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
            </footer>
        </section>


    </article>
</x-guest-layout>
