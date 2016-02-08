@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Add New Card
            <a href="{{ url('card') }}" class="btn btn-success btn-sm pull-right">Back</a>
        </h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="panel panel-primary">
            <div class="panel-heading">
                Form Card
            </div>
            <div class="panel-body">
                {!! Form::open(['route' => 'card.store', 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('card_name', 'Card Name', ['class' => 'control-label col-sm-3']) !!}
                        <div class="col-md-6">
                            {!! Form::text('card_name', null, ['class' => 'form-control', 'autofocus']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('price', 'Price', ['class' => 'control-label col-sm-3']) !!}
                        <div class="col-md-6">
                            {!! Form::text('price', null, ['class' => 'form-control', 'autofocus']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('admin_cost', 'Admin Cost', ['class' => 'control-label col-sm-3']) !!}
                        <div class="col-md-6">
                            {!! Form::text('admin_cost', null, ['class' => 'form-control', 'autofocus']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('active_periode', 'Active Periode', ['class' => 'control-label col-sm-3']) !!}
                        <div class="col-md-6">
                            {!! Form::text('active_periode', null, ['class' => 'form-control', 'autofocus']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-md-6">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary btn-sm']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop