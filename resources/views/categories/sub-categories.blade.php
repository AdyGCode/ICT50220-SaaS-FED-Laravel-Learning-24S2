<ul class="ml-4">
    @foreach($subCategories as $subCategory)
        <li>
            {{ $subCategory->name }}
            @if($subCategory->subCategories)
                @include('categories.sub-categories',['subCategories' => $subCategory->subCategories])
            @endif
        </li>
    @endforeach
</ul>
