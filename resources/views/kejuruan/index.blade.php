@extends('layouts.app')
@section('content')


<div class="container">
<div class="row">
    <center><h1>Kejuruan</h1></center>

     <div class="panel panel-primary">
            <header class="panel-heading">
                <b>Data Kejuruan</b>
                </header>
                    <div class="panel-body">
                    <div class="form-horizontal">
                    <form action="" method="post" >
                    {{ csrf_field() }}
                      <div class="form-group">
                          <label class="col-sm-2 control-label">Kode</label>
                              <div class="col-sm-4">
                                 <div class="input-group">
                  <input type="text" class="form-control" placeholder="Ketik Tag" ng-change="searchDB()" ng-model="searchText" name="table_search" title="" tooltip="" data-original-title="Min character length is 3" class="form-control">
                  <span class="input-group-addon">Cari Otomatis</span>
              </div>
                 </div>
                    </div>
                      
                      <div class="form-group">
                          <label class="col-sm-2 control-label">Nama</label>
                              <div class="col-sm-4">
                                  <select name="nama_kejuruan" class="form-control">
                              @foreach($kejuruan as $data)
                                <option value="{{$data->id}}">{{$data->nama_kejuruan}}</option>
                              @endforeach
                              </select>
                              </div>
                      </div>

                      <td>
                      <a class="btn btn-primary" href="">Cari</a>
                      <br>
                      <br>

                      <td>
                      <a class="btn btn-primary" href="kejuruan/create">Create</a>
                      <td>
                      <a class="btn btn-warning" href="">Edit</a>
                      <td>
                      <a class="btn btn-danger" href="">Delete</a>

          <br>
          <table class="table">
        <thead>
            <tr>
                <th>Select </th>
                <th>Kode Kejuruan</th>
                <th>Nama Kejuruan</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
        @foreach($kejuruan as $data)
            <tr>
                <td><input type="checkbox" name="id" value="{{$data->id}}"><br/></td>
            <td>{{$data->kd_kejuruan}}</td>
            <td>{{$data->nama_kejuruan}}</td>
            <td>{{$data->keterangan}}</td>
            </tr>
        </tbody>
       @endforeach
    </table>    
          </div>
          </div>
        </div>
</div>
</div>
@endsection