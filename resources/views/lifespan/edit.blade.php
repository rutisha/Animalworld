@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('lifespan.update', $lifespan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="animal_id" class="form-label">Animal:</label>
                <select class="form-control" id="animal_id" name="animal_id">
                    @foreach ($animals as $animal)
                        <option value="{{ $animal->id }}" {{ $animal->id == $lifespan->animal_id ? 'selected' : '' }}>{{ $animal->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="years" class="form-label">Year:</label>
                <input type="text" class="form-control" id="years" name="years" value="{{ $lifespan->years }}">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <input type="text" class="form-control" id="status" name="status" value="{{ $lifespan->status }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
