@extends('layout0089')
@section('judul','home')
@section('isi')
<h5>select Nama Guru and NIP</h5>
<table class="table">
    <thead class="table-dark">
        <tr>
            <td>#</td>
            <td>Kamar</td>
            <td>Nama Pasien</td>
            <td>Alamat</td>
            <td>Dokter</td>
            <td>Bidang Dokter</td>
        </tr>
    </thead>
    <tbody>
        @foreach($datas as $data)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{$data->kamar_id}}</td>
            <td>{{$data->pasien_nama}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->dokter_nama}}</td>
            <td>{{$data->jabatan}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<form action="" method="post">
    <div class="mb-3">
        <label for="formFileSm" class="form-label">File Input</label>
        <input class="form-control " id="formFileSm" type="file">
    </div>
</form>
@endsection