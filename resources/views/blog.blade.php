@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-bold underline">
    Blog
</h1>


@foreach ($posts as $post)
    <h3>{{ $post->title }}</h3>
@endforeach
@endsection
