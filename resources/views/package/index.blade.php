@extends('layout/app')

@section('content')

    <h1>Travel</h1>

    @foreach ($packages as $package)
    <div>
        <a href="{{route('package.show', $package->id)}}">{{$package->title}}</a>
    </div>
        
    @endforeach
    
@endsection