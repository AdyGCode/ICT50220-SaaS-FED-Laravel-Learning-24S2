<x-guest-layout>

    <article class="w-full">
        <h1 class="text-2xl">States</h1>

        <section class="grid grid-cols-10 w-full ">
            @foreach($state as $s)
                <p>ID</p>
                <p class="col-span-7">{{ $s->id }}</p>
                <p>Name</p>
                <p class="col-span-7">{{ $s->name }}</p>
                <p>Code</p>
                <p class="col-span-7">{{ $s->code }}</p>
                <p>Country</p>
                <p class="col-span-7">{{ $s->country->name }}</p>
                <p>Created</p>
                <p class="col-span-7">{{ $s->created_at }}</p>
                <p>Updated</p>
                <p class="col-span-7">{{ $s->updated_at }}</p>
            @endforeach
        </section>

    </article>
</x-guest-layout>
