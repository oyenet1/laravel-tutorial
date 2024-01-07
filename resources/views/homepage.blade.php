@extends('layouts.guest')
@section('title', 'Homepage')
@section('main')
    <div class="w-full max-w-6xl p-4 mx-auto">
        <div class="bg-gray-100 space-y-4 p-6 rounded shadow">
            <h1 class="text-4xl font-medium text-blue-600">I am teaching asset bundling</h1>
            <p class="text-xl">Button in tailwindcss</p>
            <ul class="flex space-x-2 list-none">
                <li class="px-4 py-2 text-sm bg-blue-600 rounded text-white uppercase">One</li>
                <li class="px-4 py-2 text-sm bg-green-500 rounded text-white uppercase">two</li>
                <li class="px-4 py-2 text-sm bg-teal-500 rounded text-white uppercase">three</li>
                <li class="px-4 py-2 text-sm bg-red-600 rounded text-white uppercase">four</li>
                <li class="px-4 py-2 text-sm bg-pink-600 rounded text-white uppercase">five</li>
            </ul>
            <div class="space-y-2" x-data={open:true}>
                <h2 class="text-xl">Alpinejs example of dropdown</h2>
                <button @click="open= !open" class="px-4 rounded shadow text-white py-2 bg-blue-600">Toggle Profile</button>
                <ul x-show="open" class="my-3 p-4 bg-white shadow rounded-lg w-[250px]">
                    <li>Bowofade Oyerinde</li>
                    <li>info@bowofade.com</li>
                    <li>Logout</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
