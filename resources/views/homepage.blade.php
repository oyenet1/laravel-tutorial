@extends('layouts.guest')
@section('title', 'Homepage')
@section('main')
    <div class="w-full max-w-6xl p-4 mx-auto">
        <div class="p-6 space-y-4 bg-gray-100 rounded shadow">
            <h1 class="text-4xl font-medium text-blue-600">I am teaching asset bundling</h1>
            <p class="text-xl">Button in tailwindcss</p>
            <ul class="flex space-x-2 list-none">
                <li class="px-4 py-2 text-sm text-white uppercase bg-blue-600 rounded">One</li>
                <li class="px-4 py-2 text-sm text-white uppercase bg-green-500 rounded">two</li>
                <li class="px-4 py-2 text-sm text-white uppercase bg-teal-500 rounded">three</li>
                <li class="px-4 py-2 text-sm text-white uppercase bg-red-600 rounded">four</li>
                <li class="px-4 py-2 text-sm text-white uppercase bg-pink-600 rounded">five</li>
            </ul>
            <div class="space-y-2" x-data={open:true}>
                <h2 class="text-xl">Alpinejs example of dropdown</h2>
                <button @click="open= !open" class="px-4 py-2 text-white bg-blue-600 rounded shadow">Toggle Profile</button>
                <ul x-show="open" class="my-3 p-4 bg-white shadow rounded-lg w-[250px]">
                    <li>Bowofade Oyerinde</li>
                    <li>info@bowofade.com</li>
                    <li>Logout</li>
                </ul>
            </div>
            <div class="p-4 bg-white rounded-lg shadow">
                <h1 class="text-4xl font-bold">Blade Template</h1>
                <div>
                    <ul>
                        <li>Display Data {{ $name }} </li>
                        <li>Age: {{ $age }}</li>
                    </ul>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow">
                <h1 class="text-4xl font-bold">For loop</h1>
                <div class="my-4">
                    <ul class="ml-4 list-inside list-disk">
                        @for ($i = 0; $i < count($myFood); $i++)
                            <li>{{ $myFood[$i] }}</li>
                        @endfor
                    </ul>
                    <ul class="ml-4 list-decimal list-inside">
                        @for ($i = 0; $i < 5; $i++)
                            <li>{{ $i }}</li>
                        @endfor
                    </ul>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow">
                <h1 class="text-4xl font-bold">Foreach loop</h1>
                <div class="my-4">
                    <ul class="ml-4 list-inside list-disk">

                        @foreach ($myFood as $food)
                            <li @class([
                                'text-xl capitalize',
                                'bg-green-500 text-white' => $food == 'Eba',
                                'bg-red-600 text-white' => $loop->last,
                            ])>
                                {{ $food }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
