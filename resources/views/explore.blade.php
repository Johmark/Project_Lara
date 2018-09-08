@extends('layouts.appgeneric')
@section('content')

<div class="album py-5 bg-light">
  <div class="container">
    <h5>{{$title}}</h5>
    <div class="row">
      @for ($i = 0; $i < 9; $i++)
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="https://picsum.photos/{{rand(400, 410)}}/{{rand(500, 510)}}/?random" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">In normal situetions the comments will display in this spot. I'm thinking on change the view and like for images</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Like</button>
              </div>
              <small class="text-muted">Date goes here</small>
            </div>
          </div>
        </div>
      </div>
      @endfor
    </div>
  </div>
</div>
@endsection
