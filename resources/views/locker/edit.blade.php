@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Edit Locker
            <a href="{{ url('locker') }}" class="btn btn-success btn-sm pull-right">Back</a>
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
                Form Locker
            </div>
            <div class="panel-body">
                {!! Form::open([
                    'method' => 'PATCH',
                    'route'  => ['locker.update', $locker->id],
                    'class'  => 'form-horizontal'
                    ]) 
                !!}
                    <div class="form-group">
                        {!! Form::label('locker_no', 'Locker No', ['class' => 'control-label col-sm-3']) !!}
                        <div class="col-md-6">
                            {!! Form::text('locker_no', $locker->locker_no, ['class' => 'form-control', 'autofocus']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('locker_no', 'Locker No', ['class' => 'control-label col-sm-3']) !!}
                        <div class="col-md-6">
                            {!! Form::radio('gender', 'Male', $locker->gender == '1' ? 'true' : '') !!} Male
                            {!! Form::radio('gender', 'Female', $locker->gender == '2' ? 'true' : '') !!} Female
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-md-6">
                            {!! Form::submit('Update', ['class' => 'btn btn-primary btn-sm']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop