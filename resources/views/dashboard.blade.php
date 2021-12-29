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
            <form action="{{route('store')}}" method="post">
              @csrf
            <p class="display-5">{{$court->name}}</p>
            <input type="hidden" id="courtname" name="courtname" value="{{$court->name}}" required autofocus>

            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autofocus />
              <label for="floatingInput">Email address</label>
            </div>

            <div class="form-floating">
              <input type="date" class="form-control" id="floatingDate"  name="datebook" required autofocus>             
              <label for="floatingDate">Date</label>
            </div><br>

            <div class="form-floating">
              <select id="floatingTime" name="time_start" class="form-control" required autofocus>
               
                <option value="10:00:00">10:00 am</option>
                <option value="11:00:00">11:00 am</option>
                <option value="12:00:00">12:00 pm</option>
                <option value="13:00:00">1:00 pm</option>
                <option value="14:00:00">2:00 pm</option>
                <option value="15:00:00">3:00 pm</option>
                <option value="16:00:00">4:00 pm</option>
                <option value="17:00:00">5:00 pm</option>
                <option value="18:00:00">6:00 pm</option>
                <option value="19:00:00">7:00 pm</option>
                <option value="20:00:00">8:00 pm</option>
                <option value="21:00:00">9:00 pm</option>
                <option value="22:00:00">10:00 pm</option>
                <option value="23:00:00">11:00 pm</option>
              </select>            
              <label for="floatingTime">Time start</label>
            </div><br>

            <div class="form-floating">
              <select id="floatingTime" name="time_stop" class="form-control" required autofocus>
               
                <option value="10:00:00">10:00 am</option>
                <option value="11:00:00">11:00 am</option>
                <option value="12:00:00">12:00 pm</option>
                <option value="13:00:00">1:00 pm</option>
                <option value="14:00:00">2:00 pm</option>
                <option value="15:00:00">3:00 pm</option>
                <option value="16:00:00">4:00 pm</option>
                <option value="17:00:00">5:00 pm</option>
                <option value="18:00:00">6:00 pm</option>
                <option value="19:00:00">7:00 pm</option>
                <option value="20:00:00">8:00 pm</option>
                <option value="21:00:00">9:00 pm</option>
                <option value="22:00:00">10:00 pm</option>
                <option value="23:00:00">11:00 pm</option>
              </select>            
              <label for="floatingTime">Time stop</label>
            </div><br>
            
            <script>
               $(document).ready(function() {    
                  function calculateTime() { 
                      var hourDiff = 
                      parseInt($("select[name='time_start']").val().split(':')[0],10) -         
                      parseInt($("select[name='time_stop']").val().split(':')[0],10);

                      $("p").html("<b>Hour Difference:</b> " + hourDiff )         
                  }
                  $("select").change(calculateTime);
                  calculateTime();
                 
              });      
              
            </script>
            <div class="form-floating">
              <input type="input" class="form-control" id="floatingDuration"  name="duration" value="" required autofocus>             
              <label for="floatingDuration">Duration</label>
            </div><br>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save </button>
          </div>
        </form>
        </div>
      </div>
    </div>
    @endforeach
   

    
@endsection
