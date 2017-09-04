@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					 <div class="panel panel-primary">
            <header class="panel-heading">
                <b>Tambah/Edit Kejuruan</b>
                  <div class="panel-title pull-right">
                    <a href="{{URL::previous()}}">Kembali</a></div>
                </header>
					   <div class="panel-body">
					<div class="form-horizontal">
					<form action="{{route('kejuruan.store')}}" method="post" >
					{{ csrf_field() }}
						            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Kode Kejuruan</label>
                              <div class="col-sm-4">
                                  <input name="kd_kejuruan" type="text" class="form-control" required  />
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Kejuruan</label>
                              <div class="col-sm-4">
                                  <input name="nama_kejuruan" type="text" class="form-control" required  />
                              </div>
                        </div>
                        <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                              <div class="col-sm-4">
                                  <input name="keterangan" type="text" class="form-control" required  />
                              </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label class="col-sm-2 col-sm-2 control-label"></label>
                               <div class="form-group">
                                  <div class="col-md-4">
                                      <button type="Submit" value="Simpan" class="btn btn-primary">Simpan</button>
                                      <button type="reset" value="Batal" class="btn btn-danger">Batal</button>
                                  </div>
                                </div>
                      </div>
                          </form>
                         
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
                          </div>
              
			

	@endsection