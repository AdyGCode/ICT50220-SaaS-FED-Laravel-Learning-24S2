<x-guest-layout>

    <article class="w-full">
        <h1 class="text-2xl">Add State</h1>

        <form action="{{ route('states.store') }}"
              method="POST">

            <section class="flex flex-col gap-2  w-full ">

                <div class="mt-4">
                    <x-input-label for="name" :value="__('Name')"/>
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                  :value="old('name')" required autocomplete="name"/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                </div>

                <div class="mt-4">
                    <x-input-label for="state_code" :value="__('State Code')"/>
                    <x-text-input id="state_code" class="block mt-1 w-full" type="text" name="state_code"
                                  :value="old('state_code')" required autocomplete="state_code"/>
                    <x-input-error :messages="$errors->get('state_code')" class="mt-2"/>
                </div>

                <div class="mt-4">
                    <x-input-label for="type" :value="__('Type')"/>

                    <select name="type" id="type"
                            class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500
                            rounded-md shadow-sm block mt-1 w-full p-2'>
                        <option value="" disabled
                            @if(!old('type'))
                                    selected
                            @endif
                        >Select a State Type...
                        </option>
                        @foreach($stateTypes as $stateType)
                            <option value="{{$stateType->type}}"
                                @if((old('type') ) == $stateType->type)
                                        selected
                                @endif
                            >{{$stateType->type}}</option>
                        @endforeach
                    </select>

                    <x-input-error :messages="$errors->get('type')" class="mt-2"/>
                </div>

                <div class="mt-4">
                    <x-input-label for="latitude" :value="__('Latitude')"/>
                    <x-text-input id="latitude" class="block mt-1 w-full" type="text" name="latitude"
                                  :value="old('latitude')" required autocomplete="latitude"/>
                    <x-input-error :messages="$errors->get('latitude')" class="mt-2"/>
                </div>

                <div class="mt-4">
                    <x-input-label for="longitude" :value="__('Longitude')"/>
                    <x-text-input id="longitude" class="block mt-1 w-full" type="text" name="longitude"
                                  :value="old('longitude')" required autocomplete="longitude"/>
                    <x-input-error :messages="$errors->get('longitude')" class="mt-2"/>
                </div>

                <div class="mt-4">
                    <x-input-label for="country_id" :value="__('Country')"/>

                    <select name="country_id" id="country_id" required
                            class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500
                            rounded-md shadow-sm block mt-1 w-full p-2'>

                        <option value="" disabled
                                @if(!old('country_id'))
                                    selected
                            @endif
                        >Select a country...
                        </option>

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

                <footer class="col-span-full flex flex-row gap-2 mt-4">
                    @csrf

                    <x-primary-button type="submit">Save</x-primary-button>

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

        </form>

    </article>
</x-guest-layout>
