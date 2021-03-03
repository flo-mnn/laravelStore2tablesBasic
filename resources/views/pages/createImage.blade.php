@extends('template.main')
@section('content')
<section class="container mt-5 p-5">
    <form class="bg-warning text-white rounded p-5" action="/images" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>Picture</label>
          <input type="file" class="form-control" name="src">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-light text-warning">Add</button>
          </div>
        </form>
        <a href="/" class="my-3 btn btn-secondary">Go Back</a>
</section>
@endsection