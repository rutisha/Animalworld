
@extends('layouts.user')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Lifespans</h1>
    </div>
</div>

<div class="row mt-4">
    @foreach ($lifespan as $lifespan)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $lifespan->animal->name }}</h5>
                    <p>Years: {{ $lifespan->years }}</p>
                    <p>Status: {{ $lifespan->status }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
