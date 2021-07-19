@extends('layout/app')

@section('content')
        <img src="{{$package->cover_image}}" alt="">
        <h2>{{$package->title}}</h2>
        <p>{{$package->description}}</p>  
@endsection