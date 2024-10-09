@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => "w-full bg-gray-200 px-6 py-4 my-4 rounded-md
                            text-lg flex items-center mx-auto max-w-lg border border-gray-500"]) }}>
        <i {{ $attributes->merge(['class' => "fa-solid fa-circle-check text-xl mr-4 text-gray-800"]) }}></i>
        <ul>
            @foreach ((array) $messages as $message)
                <li {{ $attributes->merge(['class' => "bg-gray-200 text-gray-800"]) }}>{{ $message }}</li>
            @endforeach
        </ul>
    </div>

@endif
