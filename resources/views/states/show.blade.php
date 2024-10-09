<x-guest-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('States') }}
        </h2>
    </x-slot>

    <article class="w-full">

        <section>
        <dl class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-10 gap-2 w-full ">
            @foreach($state as $s)
                <dt class="font-semibold">ID</dt>
                <dd class="col-span-1 sm:col-span-2 md:col-span-9">{{ $s->id }}</dd>
                <dt class="font-semibold">Name</dt>
                <dd class="col-span-1 sm:col-span-2 md:col-span-9">{{ $s->name }}</dd>
                <dt class="font-semibold">Code</dt>
                <dd class="col-span-1 sm:col-span-2 md:col-span-9">{{ $s->state_code }}</dd>
                <dt class="font-semibold">Type</dt>
                <dd class="col-span-1 sm:col-span-2 md:col-span-9">{{ $s->type ?? '-'}}</dd>
                <dt class="font-semibold">Co-Ordinates</dt>
                <dd class="col-span-1 sm:col-span-2 md:col-span-9">{{ $s->latitude ?? '-'}}, {{ $s->longitude ?? '-'}}</dd>
                <dt class="font-semibold">Country</dt>
                <dd class="col-span-1 sm:col-span-2 md:col-span-9">{{ $s->country->name ?? '-?-'}}</dd>
                <dt class="font-semibold">Created</dt>
                <dd class="col-span-1 sm:col-span-2 md:col-span-9">{{ $s->created_at }}</dd>
                <dt class="font-semibold">Updated</dt>
                <dd class="col-span-1 sm:col-span-2 md:col-span-9">{{ $s->updated_at }}</dd>
            @endforeach
        </dl>
            <footer class="col-span-full flex flex-row gap-2 mt-4">
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
                <a href="{{ route('states.index') }}"
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
