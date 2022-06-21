@extends('layouts.app')

@section('template_title')
    {{ $aqua->name ?? 'Show Aqua' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Aqua</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('aquas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $aqua->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $aqua->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
