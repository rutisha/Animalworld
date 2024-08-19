@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="display-4">Admin Dashboard</h1>
    <p>Welcome to the admin dashboard. Here you can manage animals, lifespan, and view important information.</p>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Animals</h5>
                    <p class="card-text">Manage all animals.</p>
                    <a href="{{ route('animals.index') }}" class="btn btn-primary">Manage Animals</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lifespan</h5>
                    <p class="card-text">Manage lifespan records.</p>
                    <a href="{{ route('lifespan.index') }}" class="btn btn-primary">Manage Lifespan</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">New Animal</h5>
                    <p class="card-text">Add a new animal.</p>
                    <a href="/animals/create" class="btn btn-primary">Add Animal</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">New Lifespan</h5>
                    <p class="card-text">Add a new lifespan record.</p>
                    <a href="/lifespan/create" class="btn btn-primary">Add Lifespan</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Deleted Animal</h5>
                    <p class="card-text">Recently deleted animal.</p>
                    <a href="/animals/trashed" class="btn btn-primary">Restore Animal</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Deleted Lifespan</h5>
                    <p class="card-text">Recently deleted lifespan record.</p>
                    <a href="/lifespan/trashed" class="btn btn-primary">Restore Lifespan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
