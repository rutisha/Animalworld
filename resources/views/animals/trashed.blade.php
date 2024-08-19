@extends('layouts.admin')
@section('content')

<div class="row">
  <div class="col">
    <h1 class="display-2">Deleted Animals</h1>
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
<a href="{{ route('animals.restore', $animal -> id) }}" class="card-link"> Restore</a>


<form action="{{ route('animals.destroy', [$animal -> id]) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit">Delete</button>
</form>

          </div>
       </div>
    </div>
  @endforeach
</div>
@endsection
