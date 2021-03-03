@extends('template.main')
@section('content')
    <section class="container">
        <div class="row">
            @foreach ($animals as $animal)
                <div class="col-4">
                    <div class="card border-warning mx-auto" style="width: 18rem;">
                        <img src="/storage/img/{{$animal->src}}" class="card-img-top" alt="animal">
                        <div class="card-body">
                            <h5 class="card-title">{{$animal->name}}</h5>
                        </div>
                    </div>
                </div>
                @if ($loop->iteration % 3 === 0)
            </div>
            <div class="row mt-4">            
                @endif
            @endforeach
        </div>
    </section>
@endsection