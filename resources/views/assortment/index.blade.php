@extends('adminlte::page')

@section('title', 'KBDOM')

@section('content_header')
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Simple Full Width Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table id="table" class="table">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Task</th>
                </tr>
                </thead>
             <tbody></tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@stop
@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#table').DataTable({
                bAutoWidth: false,
                processing: true,
                serverSide: true,
                searching: false,
                paging: false,
                ajax: '{{route('employee.get.all')}}',
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'surname', name: 'surname'},
                ]
            })
        })
    </script>
@stop
