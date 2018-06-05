@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel">
			  <div class="panel-heading">Show
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	
			  		<div class="form-group">
			  			<label class="control-label">Siswa</label>
						<input type="text" name="title" class="form-control" value="{{ $abs->Siswa->nama }}"  readonly>
			  		</div>
			  		<div class="form-group">
                <strong>Kelas</strong><br>@foreach($abs->Kelas as $n)
                <input type="text" name="title" class="form-control" value="{{ $n->kelas }}" readonly> @endforeach
                </div>


                  <div class="form-group">
			  			<label class="control-label">Nis</label>
						<input type="text" name="title" class="form-control" value="{{ $abs->nis }}"  readonly>
			  		</div>


        			<div class="form-group">
			  			<label class="control-label">Tanggal Absen</label>	
			  			<input type="date" name="title" class="form-control" value="{{ $abs->tanggal }}"  readonly>
			  		</div>

        			<div class="form-group">
			  			<label class="control-label">Keterangan</label>	
			  			<input type="text" name="title" class="form-control" value="{{ $abs->keterangan }}"  readonly>
			  		</div>	
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection