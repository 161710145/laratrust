@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel">
			  <div class="panel-heading">Data Siswa
			  	<div class="panel-title pull-right"><a href="{{ route('siswa.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama</th>
					  <th>Tempat Tanggal Lahir</th>
					  <th>Jenis Kelamin</th>
					  <th>Alamat</th>
					  <th>Agama</th>
					  
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($n as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td>{{ $data->ttl }}</td>
				    	<td>{{ $data->jk }}</td>
				    	<td>{{ $data->alamat }}</td>
				    	<td><p>{{ $data->agama }}</p></td>
				    	
<td>
	<a class="btn btn-warning" href="{{ route('siswa.edit',$data->id) }}">
	<span class="glyphicon glyphicon-pencil">Edit</a>
</td>
<td>
	<a href="{{ route('siswa.show',$data->id) }}" class="btn btn-success"><span class="glyphicon glyphicon-hourglass">Show</a>
</td>
<td>
	<form method="post" action="{{ route('siswa.destroy',$data->id) }}">
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