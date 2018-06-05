@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="col-md-12">
			<div class="panel">
			  <div class="panel-heading">Data Kelas
			  	<div class="panel-title pull-right"><a href="{{ route('kelas.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Kelas</th>
					  <th>Tahun Ajaran</th>
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($kls as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->kelas }}</td>
				    	<td>{{ $data->tahun_ajaran }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('kelas.edit',$data->id) }}"><span class="glyphicon glyphicon-pencil">Edit</a>
						</td>
						<td>
							<a href="{{ route('kelas.show',$data->id) }}" class="btn btn-success"><span class="glyphicon glyphicon-hourglass">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('kelas.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash">Delete</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection