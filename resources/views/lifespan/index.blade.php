
@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">Lifespans</h1>
        <a href="{{ route('lifespan.create') }}" class="btn btn-primary">Add Lifespan</a>
    </div>
</div>

<div class="row mt-4">
    @foreach ($lifespans as $lifespan)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $lifespan->animal->name }}</h5>
                    <p>Years: {{ $lifespan->years }}</p>
                    <p>Status: {{ $lifespan->status }}</p>
                    <a href="{{ route('lifespan.edit', $lifespan->id) }}" >Edit</a>

                    <a href="#">Delete</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
