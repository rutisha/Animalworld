@extends('layouts.admin')
@section('content')

<div class="row">
  <div class="col">
    <h1 class="display-2">Deleted Lifespan</h1>
  </div>

</div>

<div class="row">
@foreach ($lifespans as $lifespan)
    <div class="col-md-4 mb-3">
       <div class="card">
          <div class="card-body">
            <h5 class="card-title">
               {{ $lifespan -> name}} 
            </h5>
<a href="{{ route('lifespan.restore', $ -> id) }}" class="card-link"> Restore</a>


<form action="{{ route('lifespan.destroy', [$lifespan -> id]) }}" method="POST">
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
