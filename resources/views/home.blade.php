@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
       <div class="container-fluid col-md-2">
           <img src="{{asset(Auth::user()->photo)}}" alt="{{ Auth::user()->name }}" class="pull-left img-rounded">
       </div>
                <h3>{{ Auth::user()->name }}</h3>
	</div>
</div>
@endsection
