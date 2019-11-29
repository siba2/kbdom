@extends('adminlte::page')

@section('title', 'KBDOM')

@section('content_header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <h1>
        {{ __('Kontraktorzy') }}
    </h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('contractor.create')}}" class="btn btn-primary" role="button">{{ __('Dodaj kontrahtora') }}</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <table id="table" class="table">
                <thead>
                <tr>
                    <th><b>{{__("Nazwa")}}</b></th>
                    <th></th>
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
                language: {
                    "url": "json/datatables/Polish.json"
                },
                bAutoWidth: false,
                processing: true,
                serverSide: true,
                searching: false,
                paging: false,
                ajax: '{{route('contractor.get.all')}}',
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'options', name: 'options', orderable: false, searchable: false},
                ]
            })
        })
    </script>
@stop
