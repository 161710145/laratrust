@extends('layouts.app')
@section('content')
<div id="navbar" class="navbar-collapse collapse">
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel">
			  <div class="panel-heading">Data Absen
			  	<div class="panel-title pull-right"><a href="{{ route('absen.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama</th>
					  <th>Kelas</th>
					  <th>nis</th>
					  <th>Tanggal Absen</th>
					  <th>Keterangan</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($abs as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td><p>{{ $data->Siswa->nama }}</p></td>
				    	<td>@foreach($data->Kelas as $a)<li>{{ $a->kelas }}@endforeach</li></td>
				    	<td>{{ $data->nis }}</td>
				    	<td><p>{{ $data->tanggal }}</p></td>
				    	<td><p>{{ $data->keterangan }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('absen.edit',$data->id) }}"><span class="glyphicon glyphicon-pencil">Edit</a></span>
						</td>
						<td>
							<a href="{{ route('absen.show',$data->id) }}" class="btn btn-success"><span class="glyphicon glyphicon-hourglass">Show</a></span>
						</td>
						<td>
							<form method="post" action="{{ route('absen.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash">Delete</button></span>
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