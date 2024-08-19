@extends('layouts.admin');
@section('content')
<div class="row">
    <div class="col-md-6">
    <form action="{{ route('animals.update', $animal -> id)}}" method="POST">
        @if($errors -> any())
           <div class="alert alert-danger">
            <ul>
                @foreach($errors -> all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
           </div>
        @endif

        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Animal Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name') ?? $animal -> name}}">
            @error('fname')
             <span class='text-danger'>
                <strong>
                    {{$message}}
                </strong>
             </span>
                
            @enderror
        </div>
        <div class="mb-3">
            <label for="height" class="form-label">Height:</label>
            <input type="text" class="form-control" id="height" name="height" value="{{ $animal -> height}}">
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Weight:</label>
            <input type="text" class="form-control" id="weight" name="weight" value="{{ $animal -> weight}}">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
   </form>
    </div>
</div>

@endsection