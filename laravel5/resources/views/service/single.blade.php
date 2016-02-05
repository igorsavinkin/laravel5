@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Service <b>{{ $service->name }}</b></div>

				<div class="panel-body"><b>
				    Id:&nbsp; {{ $service->serviceId }}<br>
					Comment:&nbsp; {{ $service->comment }}<br> 
				   </b>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
