@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">All Services</div>

				<div class="panel-body">
					<table border='0' ><tr><th>&nbsp;Name&nbsp;</th><th>&nbsp;Service id&nbsp;</th><th>&nbsp;Comment&nbsp;</th><th>&nbsp;</th></tr>
					    @foreach($services as $service)
						   <tr>
								 <td>&nbsp;<b>{{ $service->name }} </b>&nbsp;</td>
								 <td>&nbsp;	{{ $service->serviceId }}  &nbsp;</td>
								 <td>&nbsp;	{{ $service->comment }}  &nbsp;</td> 
								 <td>&nbsp;	<a href='{{ url("/service/") }}/{{ $service->id }}' class="btn btn-info btn-xs" role="button">view</a>  &nbsp;</td> 
						   </tr>
					    @endforeach
                   </table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
