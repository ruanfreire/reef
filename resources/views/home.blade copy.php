@extends('layouts.app')

@section('content')
<div id="app">
  <example-component></example-component>
</div>
<div class="row">
  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">18:00</h3>
              <!--<p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>-->
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success ">
              <span class="mdi mdi-clock"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Relógio</h6>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">29.2º</h3>
              <!--<p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>-->
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success ">
              <span class="mdi mdi-temperature-celsius"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Temperatura ambiente</h6>
      </div>
    </div>
  </div>
  
  <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-9">
            <div class="d-flex align-items-center align-self-start">
              <h3 class="mb-0">70</h3>
              <!--<p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>-->
            </div>
          </div>
          <div class="col-3">
            <div class="icon icon-box-success ">
              <span class="mdi mdi-water"></span>
            </div>
          </div>
        </div>
        <h6 class="text-muted font-weight-normal">Umidade do ar</h6>
      </div>
    </div>
  </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-9">
              <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0">26.3º</h3>
                <!--<p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>-->
              </div>
            </div>
            <div class="col-3">
              <div class="icon icon-box-success ">
                <span class="mdi mdi-temperature-celsius"></span>
              </div>
            </div>
          </div>
          <h6 class="text-muted font-weight-normal">Temperatura</h6>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-9">
              <div class="d-flex .align-items-center align-self-start">
                <h3 class="mb-0">8.1</h3>
                <!--<p class="text-success ms-2 mb-0 font-weight-medium">+11%</p>-->
              </div>
            </div>
            <div class="col-3">
              <div class="icon icon-box-success">
                <span class="mdi mdi-test-tube"></span>
              </div>
            </div>
          </div>
          <h6 class="text-muted font-weight-normal">PH</h6>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-9">
              <div class="d-flex align-items-center align-self-start">
                <h3 class="mb-0">1025</h3>
                <!--<p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p>-->
              </div>
            </div>
            <div class="col-3">
              <div class="icon icon-box-danger">
                <span class="mdi mdi-resize-bottom-right"></span>
              </div>
            </div>
          </div>
          <h6 class="text-muted font-weight-normal">Salinidade</h6>
        </div>
      </div>
    </div>
    
  </div>
@endsection
