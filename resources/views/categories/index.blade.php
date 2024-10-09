<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>


                <div class=" text-gray-900">
                    <ul id="tree1">
                        @foreach($categories as $category)

                            <li>
                                <p class="text-lg w-full bg-zinc-200 my-1 p-2">{{ $category->name }}</p>
                                @if($category->subCategories)
                                    @include('categories.sub-categories',['subCategories' => $category->subCategories])
                                @endif
                            </li>
                        @endforeach
                    </ul>

                </div>
    </x-guest-layout>
