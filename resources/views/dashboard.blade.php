@extends('layouts.sidebar')

@section('content')
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <div class="album py-5 bg-light">
        <div class="container">
    
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/images/court.jpg" alt="..." />
                <div class="card-body">
                    <p class="display-5">COURT A</p>                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">TEMPAH</button>
                     
                    </div>
                    <small class="text-muted">RM6/JAM</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/images/court.jpg" alt="..." />    
                <div class="card-body">
                    <p class="display-5">COURT B</p>                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">TEMPAH</button>
                    
                    </div>
                    <small class="text-muted">RM6/JAM</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/images/court.jpg" alt="..." />    
                <div class="card-body">
                    <p class="display-5">COURT C</p>                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">TEMPAH</button>
                      
                    </div>
                    <small class="text-muted">RM6/JAM</small>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/images/court.jpg" alt="..." />    
                <div class="card-body">
                    <p class="display-5">COURT D</p>                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">TEMPAH</button>
                     
                    </div>
                    <small class="text-muted">RM6/JAM</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/images/court.jpg" alt="..." />    
                <div class="card-body">
                  <p class="display-5">COURT E</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">TEMPAH</button>
                     
                    </div>
                    <small class="text-muted">RM6/JAM</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/images/court.jpg" alt="..." />    
                <div class="card-body">
                    <p class="display-5">COURT F</p>                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">TEMPAH</button>
                      
                    </div>
                    <small class="text-muted">RM6/JAM</small>
                  </div>
                </div>
              </div>
            </div>
    
            
            
            
        </div>
      </div>

@endsection
