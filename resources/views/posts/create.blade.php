<x-guest-layout>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>


    <article class="w-full">
        <h1 class="text-2xl">Add Post</h1>

        <form action="{{ route('posts.store') }}"
              method="POST">
            @csrf

            <section class="flex flex-col gap-2  w-full ">

                <div class="mt-4">
                    <x-input-label for="title" :value="__('Title')"/>
                    <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                  :value="old('title')" required autocomplete="title"/>
                    <x-input-error :messages="$errors->get('title')" class="mt-2"/>
                </div>

                <div class="mt-4">
                    <x-input-label for="body" :value="__('Content')"/>
                    <textarea class="block mt-1 w-full"
                              id="content" placeholder="Enter the Description" rows="5"
                              name="body">{{old('body')??''}}</textarea>

                    <x-input-error :messages="$errors->get('body')" class="mt-2"/>
                </div>


                <footer class="col-span-full flex flex-row gap-2 mt-4">

                    <x-primary-button type="submit">Save</x-primary-button>

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

        </form>

    </article>


    <script>
        ClassicEditor.create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-guest-layout>
