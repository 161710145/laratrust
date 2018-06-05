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
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $n->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tempat Tanggal Lahir</label>	
			  			<input type="text" name="ttl" class="form-control" value="{{ $n->ttl }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Jenis Kelamin</label>	
			  			<input type="text" name="jk" class="form-control" value="{{ $n->jk }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Alamat</label>	
			  			<input type="text" name="alamat" class="form-control" value="{{ $n->alamat }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Agama</label>	
			  			<input type="text" name="agama" class="form-control" value="{{ $n->agama }}"  readonly>
			  		</div>
                     
                     
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection