@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">All users with services</div>

				<div class="panel-body">
				   <b>
					<table border='0' ><tr><th>&nbsp;User name&nbsp;</th><th>&nbsp;Service name&nbsp;</th></tr>
					    @foreach($users as $user)
						   <tr>
								 <td>&nbsp;	{{ $user->name }}  &nbsp;</td>
								 <td>&nbsp;<a href='{{ url("/service/") }}/{{ $user->service_id }}' class="btn btn-default btn-xs" role="button">{{ $user->service_name }} </a>&nbsp;</td> 
						   </tr>
					    @endforeach
                   </table>
					</b>				
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
