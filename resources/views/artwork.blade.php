@extends('layout.default')
@section('content')
<!-- artwork section -->
<section class="artwork">
    <h2>{{$artwork_name}}</h2>
    <img src="{{$path}}">
    <section class="artwork-description">
        <h3>Author:</h3>
        <div>
            <p>{{$author}}</p>
        </div>
    </section>
</section>
@endsection