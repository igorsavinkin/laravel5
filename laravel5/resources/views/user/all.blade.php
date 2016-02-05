@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">All users</div>

				<div class="panel-body"><b>
					<ul>
					    @foreach($users as $user)
						   <li>{{ $user->name }} &nbsp; - email: &nbsp;
								 {{ $user->email }} &nbsp;&nbsp; 
								<a href='{{ url("/profile") }}/{{$user->id}}' class="btn btn-info btn-sm" role="button">Profile</a>
						   </li>
					    @endforeach
                   </ul>
				   </b>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


