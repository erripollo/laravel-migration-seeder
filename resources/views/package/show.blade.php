@extends('layout/app')

@section('content')
        <div class="container">

                <div>
                        <h1>{{$package->title}}</h1>
                        <div class="d-flex">
                                <a class="btn btn-primary mr-4" href="{{route('package.edit', $package->id)}}" role="button">Edit</a>
                                
                                <form action="{{route('package.destroy', $package->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>

                        </div>
                        
                        </form>

                        <img class="my-4" width="100%" src="{{$package->cover_image}}" alt="">
                        <div class="d-flex mb-4">
                                <span class="mr-5"><i class="fa fa-calendar mr-3" aria-hidden="true"></i>{{$package->departure_date}} | {{$package->return_date}}</span>
                                <span class="mr-5"><i class="fas fa-plane-departure fa-sm fa-fw mr-3"></i>{{$package->departure_from}}</span>
                                <span class="mr-5"><i class="fas fa-plane-arrival fa-sm fa-fw mr-3"></i>{{$package->destination}}</span>
                                <span class="mr-5"><i class="fas fa-euro-sign fa-sm fa-fw mr-3"></i>{{$package->price}}</span>
                            </div>
                        <p>{{$package->description}}</p>
                </div>
        </div>
@endsection