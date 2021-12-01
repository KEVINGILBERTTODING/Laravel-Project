
@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
<article class="mb-5">
    <h3>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }} </a>
        </h3>
    <h5>{{ $post->excerpt }}</h5>
</article>
    
@endforeach

@endsection

