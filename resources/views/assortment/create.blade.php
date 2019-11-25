@extends('adminlte::page')

@section('title_postfix', ' | '.trans('t_regions.regions.create.title_postfix'))

@section('content_header')
    <h1>
        {{ __('t_regions.regions.create.content_header') }}
        <small>{{ __('t_regions.regions.create.content_header_small') }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> {{ __('t_common.breadcrumb') }}</a></li>
        <li><a href="/"><i class="fa fa-object-group"></i> {{ __('t_regions.regions.index.breadcrumb') }}</a></li>
        <li class="active">{{ __('t_regions.regions.create.breadcrumb') }}</li>
    </ol>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                </div>
                <div class="box-body">
                    @include('regions/forms/create')
                </div>
                <!-- ./box-body -->
            </div>
            <!-- ./box -->
        </div>
        <!-- ./col-xs-12 -->
    </div>
    <!-- ./row -->
@stop
