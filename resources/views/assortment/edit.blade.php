@extends('adminlte::page')

@section('title_postfix', '')

@section('content_header')

@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Edytuj asortyment') }}</h3>
                </div>
            @include('assortment/forms/edit')
            <!-- ./box-body -->
            </div>
            <!-- ./box -->
        </div>
    </div>
    <!-- ./row -->
@stop
