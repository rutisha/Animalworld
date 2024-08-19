@extends('layouts.user')
@section('content')

<div class="row">
  <div class="col">
    <h1 class="display-2">All Animals</h1>
  </div>

</div>

<div class="row">
  @foreach ($animal as $animal )
    <div class="col-md-4 mb-3">
       <div class="card">
          <div class="card-body">
            <h5 class="card-title">
               {{ $animal -> name}} 
</h5>
<p>Height: {{ $animal -> height }}</p>
<p>Weight: {{ $animal -> weight }}</p>

          </div>
       </div>
    </div>
  @endforeach
</div>
@endsection
