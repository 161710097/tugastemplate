@extends('layouts.mas')
@section('konten')
<section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_table"></i> Data </h3><br>
            <table border="3" class="table table-bordered">
            	<th>ID</th>
            	<th>NIS</th>
            	<th>NAMA</th>
            	<th>TEMPAT LAHIR</th>
            	<th>TANGGAL LAHIR</th>
            	<th>ALAMAT</th>
            	<th>CITA CITA</th>
            	<th>HOBI</th>
            	<th>FOTO</th>
            	@foreach($g as $key)
            	<tr>
            		<td>{{$key->id}}</td>
            		<td>{{$key->nis}}</td>
            		<td>{{$key->nama_siswa}}</td>
            		<td>{{$key->tempat_lahir}}</td>
            		<td>{{$key->tanggal_lahir}}</td>
            		<td>{{$key->alamat}}</td>
            		<td>{{$key->cita_cita}}</td>
            		<td>{{$key->hobi}}</td>
            		<td><img src="{{asset('image/'.$key->gambar)}}" style="max-height:300px; max-width: 100px"></td>
            	</tr>
            	@endforeach
            </table>
          </div>
        </div>
    </section>
@endsection