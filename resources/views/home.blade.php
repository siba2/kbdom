@extends('adminlte::page')

@section('title', 'KBDOM')

@section('content_header')
    <h1 class="m-0 text-dark">{{__("Strona główna")}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>

                    <p>{{__("Pracownicy")}}</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">{{__("Zmień liczbę pracowników")}} <i class="fas fa-arrow-circle-right"></i></a>
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
