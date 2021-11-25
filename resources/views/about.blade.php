@extends('layouts.main')

@section('container')

<h1>About Me</h1>
<h3>{{ $name }}</h3>
<h3>{{ $nim }}</h3>
<h3>{{ $jurusan }}</h3>
<img src="img/{{ $img }}" alt="{{ $name }}" width="400">
    
@endsection