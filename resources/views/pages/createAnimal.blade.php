@extends('template.main')
@section('content')
<section class="container mt-5 p-5">
    <form class="bg-warning text-white rounded p-5" action="/animals" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>Animal's name</label>
          <input type="text" class="form-control" name="name">
        </div>
       
        <div class="form-group">
          
          @foreach ($images as $image)
          <div class="form-check form-check-inline">
            <input for="img{{$image->id}}" class="form-check-input" type="radio" name="src" id="exampleRadios1" value="{{$image->id}}">
            <label><img src="/storage/img/{{$image->src}}" width="100px" id="img{{$image->id}}" alt=""></label>
          </div>
          @endforeach
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-light text-warning">Add</button>
          </div>
        </form>
        <a href="/" class="my-3 btn btn-secondary">Go Back</a>
</section>
@endsection