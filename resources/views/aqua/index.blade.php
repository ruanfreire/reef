@extends('layouts.app')

@section('template_title')
{{ __('Aqua') }}
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Aqua') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('aquas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                 <span class="mdi mdi-plus"></span>
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    
            </div>
            <br>
           
            <div class="col-sm-12">
                <div class="row">
                    @foreach ($aquas as $aqua) 
                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-9">
                              <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">{{ $aqua->name }}</h3>
                                <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                              </div>
                            </div>
                            <div class="col-3">
                              <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                              </div>
                            </div>
                          </div>
                          <form action="{{ route('aquas.destroy',$aqua->id) }}" method="POST">
                            <a class="btn btn-sm btn-primary " href="{{ route('aquas.show',$aqua->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                            <a class="btn btn-sm btn-success" href="{{ route('aquas.edit',$aqua->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                        </form>
                        </div>
                      </div>
                    </div>
                     @endforeach
                </div>
            </div>
        </div>
       
            
       
   
        </div>
        {!! $aquas->links() !!}
        
    </div>
    
        

    

@endsection
