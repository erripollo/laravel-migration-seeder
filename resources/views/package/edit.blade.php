@extends('layout/app')

@section('content')

    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('package.update', $package->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control" placeholder="Add a title" aria-describedby="titleHelper" value="{{$package->title}}" required minlength="5" maxlength="100">
              <small id="titleHelper" class="text-muted">Type a title for the new holiday package</small>
            </div>

            <div class="form-group">
                <label for="cover_image">Cover image url</label>
                <input type="url" name="cover_image" id="cover_image" class="form-control" placeholder="Add a cover image" aria-describedby="cover_imageHelper" value="{{$package->cover_image}}" minlength="5" maxlength="100">
                <small id="cover_imageHelper" class="text-muted">Type a cover image url for the new holiday package</small>
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="description" id="description" rows="5">{{$package->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" name="destination" id="destination" class="form-control" placeholder="Add a destination" aria-describedby="destinationHelper" value="{{$package->destination}}" required minlength="5" maxlength="100">
                <small id="destinationHelper" class="text-muted">Type a destination for the new holiday package</small>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="Add a price" aria-describedby="priceHelper" value="{{$package->price}}">
                <small id="priceHelper" class="text-muted">Type a price for the new holiday package</small>
            </div>

            <div class="form-group">
                <label for="departure_from">Departure from</label>
                <input type="text" name="departure_from" id="departure_from" class="form-control" placeholder="Add a departure_from" aria-describedby="departure_fromHelper" value="{{$package->departure_from}}" minlength="5" maxlength="100">
                <small id="departure_fromHelper" class="text-muted">Type a departure from for the new holiday package</small>
            </div>

            <div class="form-group">
                <label for="departure_date">Departure date</label>
                <input type="date" name="departure_date" id="departure_date" class="form-control" placeholder="Add a departure_date" aria-describedby="departure_dateHelper" value="{{$package->departure_date}}">
                <small id="departure_dateHelper" class="text-muted">Type a departure date for the new holiday package</small>
            </div>

            <div class="form-group">
                <label for="return_date">Return date</label>
                <input type="date" name="return_date" id="return_date" class="form-control" placeholder="Add a return_date" aria-describedby="return_dateHelper" value="{{$package->return_date}}">
                <small id="return_dateHelper" class="text-muted">Type a return date for the new holiday package</small>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
       

    </div>
    
@endsection