@extends('layouts.admin')
@section('content')

<div class="row">
  <div class="col">
    <h1 class="display-2">All Animals</h1>
  </div>

</div>

<div class="row">
  @foreach ($animals as $animal )
    <div class="col-md-4 mb-3">
       <div class="card">
          <div class="card-body">
            <h5 class="card-title">
               {{ $animal -> name}} 
</h5>
<p>Height: {{ $animal -> height }}</p>
<p>Weight: {{ $animal -> weight }}</p>
<a href="{{ route('animals.edit', $animal -> id)}}" class="card-link"> Edit</a>
<a href="{{ route('animals.trash', $animal -> id)}}">Delete</a>
          </div>
       </div>
    </div>
  @endforeach
</div>
@endsection
