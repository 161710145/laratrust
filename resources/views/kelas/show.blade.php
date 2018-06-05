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
			  			<label class="control-label">Kelas</label>	
			  			<input type="text" name="title" class="form-control" value="{{ $kls->kelas }}"  readonly>
			  		</div>

        			<div class="form-group">
			  			<label class="control-label">Tahun Ajaran</label>	
			  			<input type="text" name="title" class="form-control" value="{{ $kls->tahun_ajaran }}"  readonly>
			  		</div>

			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection