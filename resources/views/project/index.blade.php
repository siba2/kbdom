@extends('adminlte::page')

@section('title', 'KBDOM')

@section('content_header')
    <h1 class="m-0 text-dark">{{__("Projekty")}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                   aria-describedby="example2_info">
                <thead>
                <tr role="row">
                    <th>a</th>
                    <th>a</th>
                </tr>
                </thead>
               <tbody></tbody>
                <tfoot>
                </tfoot>
            </table>
        </div>
    </div>
@stop
@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/project/get/all',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                ]
            })
        })
    </script>
@stop
