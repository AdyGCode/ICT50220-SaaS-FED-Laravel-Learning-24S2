<x-guest-layout>

    <article class="w-full">
        <h1 class="text-2xl">Add State</h1>

        <form action="{{ route('states.store') }}"
              method="POST">

            @csrf

            <section class="flex flex-col gap-2  w-full ">

                <div class="mt-4">
                    <x-input-label for="name" :value="__('Name')"/>
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                  :value="old('name')" required autocomplete="name"/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                </div>

                <div class="mt-4">
                    <x-input-label for="code" :value="__('Code')"/>
                    <x-text-input id="code" class="block mt-1 w-full" type="text" name="code"
                                  :value="old('code')" required autocomplete="code"/>
                    <x-input-error :messages="$errors->get('code')" class="mt-2"/>
                </div>

                <div class="mt-4">
                    <x-input-label for="country" :value="__('Country')"/>

                    <select name="country_id" id="country" required>
                        <option value="" disabled
                            @if(!old('country_id'))
                                    selected
                            @endif
                        >Select a country...</option>
                        @foreach($countries as $country)
                            <option value="{{$country->id}}"
                                @if(old('country_id') == $country->id)
                                        selected
                                @endif
                            >{{$country->name}}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('country_id')" class="mt-2"/>
                </div>

                <footer class="col-span-full flex flex-row gap-2">
                    <x-primary-button type="submit">Save</x-primary-button>

                    <a href="{{ route('states.index') }}"
                       class="bg-zinc-500 hover:bg-zinc-100
                           text-zinc-50 hover:text-zinc-500
                           border border-zinc-500
                           rounded
                           p-1 px-2
                           transition duration-500">
                        {{ __('Back') }}
                    </a>
                </footer>
            </section>
        </form>

    </article>
</x-guest-layout>
