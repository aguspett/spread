@extends('app')
@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Provincias
        <small>Ver</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Provincias</a></li>
        <li class="active">ver</li>
    </ol>
</section>

<section class="content">
    @include('provincias.partial.formindex')
    </section><!-- /.content -->
@stop
