@extends('site.master.layout')

@section('content')

	<div class="container">
		<h2>Usuários!</h2>
		<hr>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nome</th>
					<th scope="col">Email</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							<a href="{{ route('user.show', ['user' => $user->id])}}">Ver Usuário</a>
							<form action="{{ route('user.destroy', ['user' => $user->id])}}" method="post">
								@csrf
								@method('DELETE')
								<input type="submit" value="Remover">
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection