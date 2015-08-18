@extends('app')

@section('content')
    <section class="content-header">
        <h1>
            Geo
            <small>Ver</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/paises"><i class="fa fa-dashboard"></i>Geo</a></li>
            <li class="active">ver</li>
        </ol>
    </section>
    <section class="content">
            @include('paises.partial.formIndex')
    </section>
@stop