@extends('layouts.sidebar')

@section('content')
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif
    @foreach($courts as $court)
    <div class="album py-5 bg-light">
     
      <div class="container">

        
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/images/court.jpg" alt="..." />
              <div class="card-body">
                  <p class="display-5">{{$court->name}}</p>                  
                  <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    
                   <!-- Button trigger modal -->
                    <button  type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal{{($court->id) }}">
                     Booking Here
                    </button>
                  </div>
                  <small class="text-muted">{{$court->price}}/JAM</small>
                </div>
              </div>
            </div>
          </div>
         
      </div>
     
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{($court->id) }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Booking Form</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="display-5">{{$court->name}}</p>
            <input type="hidden" id="courtname" name="courtname" value="{{$court->name}}">
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autofocus />
             
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="date" class="form-control" id="floatingDate"  name="datebook">
              
              <label for="floatingDate">Date</label>
            </div><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save </button>
          </div>
        </div>
      </div>
    </div>
    @endforeach
   

    
@endsection
