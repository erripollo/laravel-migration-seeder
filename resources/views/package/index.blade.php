@extends('layout/app')

@section('content')

    <div class="container">

        <h1>Travels</h1>
        <div class="container">
            <div class="row">

                @foreach ($packages as $package)
                <div class="col-md-3">

                    <div class="card mb-4">
                            <a href="{{route('package.show', $package->id)}}">
                                <img class="card-img-top" src="{{$package->cover_image}}" alt="">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">{{$package->title}}</h4>
                                <div class="card-text d-flex flex-column justify-content-around">
                                    <span><i class="fa fa-calendar mr-3" aria-hidden="true"></i>{{$package->departure_date}}</span>
                                    <span><i class="fas fa-plane-departure fa-sm fa-fw mr-3"></i>{{$package->departure_from}}</span>
                                    <span><i class="fas fa-plane-arrival fa-sm fa-fw mr-3"></i>{{$package->destination}}</span>
                                </div>
                            </div>
                        </div>
                    
                </div>
                @endforeach
                
            </div>
        </div>
    
       

    </div>
    
@endsection