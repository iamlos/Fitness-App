@extends('layout')

@section('add_css')
<link href="{{ asset('/assets/plugins/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('/assets/plugins/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet"> -->
@stop

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Locker Page
            <a href="{{ url('locker/create') }}" class="btn btn-success btn-sm pull-right">Add New</a>
        </h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        @if (Session::has('message'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ Session::get('message') }}
            </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Locker List
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Locker No</th>
                                <th>Gender</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1 ?>
                        @foreach($locker as $row)
                            <tr>
                                <td class="text-center">{{ $no }}</td>
                                <td>{{ $row->locker_no }}</td>
                                <td>{{ $row->gender == '1' ? 'Male' : 'Female' }}</td>
                                <td class="text-center">
                                    <a href="{{ route('locker.edit', $row->id) }}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{ route('locker.delete', $row->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php $no++; ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('add_js')

<script src="{{ asset('/assets/plugins/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
</script>
@stop