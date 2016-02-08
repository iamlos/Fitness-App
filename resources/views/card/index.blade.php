@extends('layout')

@section('add_css')
<link href="{{ asset('/assets/plugins/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('/assets/plugins/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet"> -->
@stop

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Card Page
            <a href="{{ url('card/create') }}" class="btn btn-success btn-sm pull-right">Add New</a>
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
                Card List
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Card Name</th>
                                <th>Price</th>
                                <th>Admin Cost</th>
                                <th>Active Periode</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1 ?>
                        @foreach($cards as $row)
                            <tr>
                                <td class="text-center">{{ $no }}</td>
                                <td>{{ $row->card_name }}</td>
                                <td>{{ number_format($row->price, 0, ',', '.') }}</td>
                                <td>{{ number_format($row->admin_cost, 0, ',', '.') }}</td>
                                <td>{{ $row->active_periode }} Month</td>
                                <td class="text-center">
                                    <a href="{{ route('card.edit', $row->id) }}" class="btn btn-info btn-sm">Edit</a>
                                    <a href="{{ route('card.delete', $row->id) }}" class="btn btn-danger btn-sm">Delete</a>
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