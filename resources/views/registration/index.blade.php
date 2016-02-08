@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Add New Registration
            <a href="{{ url('registration') }}" class="btn btn-success btn-sm pull-right">List Registration</a>
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
        {!! Form::open(['route' => 'registration.store', 'class' => 'form-horizontal']) !!}
        <div class="panel panel-primary">
            <div class="panel-heading">
                Form Personal Detail
            </div>
            <div class="panel-body">
                <div class="form-group">
                    {!! Form::label('firstname', 'Firstname', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('lastname', 'Lastname', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('gender', 'Gender', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        {!! Form::radio('gender', 'Male') !!} Male
                        {!! Form::radio('gender', 'Female') !!} Female
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('date_of_birth', 'Date of Birth', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('date_of_birth', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('address', 'Address', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        {!! Form::textarea('address', null, ['class' => 'form-control', 'rows' => '3']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('employee', 'Employee', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('employee', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('h_phone', 'Phone Number', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('h_phone', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('m_phone', 'Mobile Number', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('m_phone', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('off_phone', 'Office Number', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('off_phone', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('fax', 'Fax', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('fax', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('source', 'Source', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        <select name="source" class="form-control">
                            <option disabled selected>Choose Source</option>
                            <option value="Leaflat">Leaflat</option>
                            <option value="Print/Media">Print/Media</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                Form Membership Detail
            </div>
            <div class="panel-body">
                <div class="form-group">
                    {!! Form::label('card_name', 'Card Name', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        <select name="card_name" class="form-control" id="card_name">
                            <option disabled selected>Choose Card</option>
                        @foreach ($card as $row)
                            <option value="{{ $row->id }}">{{ $row->card_name }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('payment_name', 'Payment Name', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        <select name="payment_name" class="form-control">
                            <option disabled selected>Choose Payment</option>
                        @foreach ($payment as $row)
                            <option value="{{ $row->id }}">{{ $row->payment_name }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('admin_cost', 'Admin Cost', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('admin_cost', null, ['class' => 'form-control', 'readonly']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('discount', 'Discount', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('discount', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('total', 'Total', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-md-6">
                        {!! Form::text('total', null, ['class' => 'form-control', 'id' => 'total', 'readonly']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-md-6">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary btn-sm']) !!}
                        {!! Form::reset('Reset', ['class' => 'btn btn-default btn-sm']) !!}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>

@stop

@section('add_js')
    <script type="text/javascript">

    $(function(){
        
        $("#card_name").change(function(){

            var card_name = $("#card_name").val();

            $.ajax({
                type    : 'POST',
                url     : "registration/ajax_card",
                data    : 'card_name =' + card_name,
                cache   : false,
                success : function(data) {
                    $("#total").val(data);
                }
            })
            
            // return false;

        })

    })

    </script>
@stop