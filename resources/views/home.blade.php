@extends('adminlte::page')

@section('title', 'KBDOM')

@section('content_header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <h1 class="m-0 text-dark">{{__("Strona główna")}}</h1>
@stop

@section('content')
    <div class="modal fade" id="modal-employee-update" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{__("Liczba pracowników")}}</h4>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" id="quantity" name="quantity" value="{{$employee->quantity}}">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{__("Anuluj")}}</button>
                    <button type="button" class="btn btn-primary" id="modal-employee-update-submit">{{__("Zapisz")}}</button>
                </div>
            </div>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal fade -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$employee->quantity}}</h3>

                    <p>{{__("Pracowników")}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer" data-toggle="modal"
                   data-target="#modal-employee-update">{{__("Zmień liczbę pracowników")}} <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">

        </div>
        <div class="col-lg-3 col-6">

        </div>
        <div class="col-lg-3 col-6">

        </div>
    </div>


@stop
@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#modal-employee-update-submit').on('click', '', function (e) {
                let data = {
                    quantity: $('#quantity').val()
                }
                $.ajax({
                    type: 'post',
                    url: '/home/employee/update',
                    data: data,
                    success: function () {
                        window.location.reload()
                    }
                }).fail(function (e) {

                });

            })
        })
    </script>
@stop
