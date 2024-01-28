@extends('layouts.guest')
@section('title', 'All posts')
@section('main')
    <div class="w-full max-w-md mx-auto p-6 rounded-lg shadow-sm m-4">
        <img src="{{ $post->image }}" alt="{{ $post->title }}">
        <h1 class="text-2xl">{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
    </div>
@endsection
