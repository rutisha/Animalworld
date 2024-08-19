@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('lifespan.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="animal_id" class="form-label">Animal:</label>
                <select class="form-control" id="animal_id" name="animal_id">
                    @foreach ($animals as $animal)
                        <option value="{{ $animal->id }}">{{ $animal->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="years" class="form-label">Years:</label>
                <input type="text" class="form-control" id="years" name="years">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <input type="text" class="form-control" id="status" name="status">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
