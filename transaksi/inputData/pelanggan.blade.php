@extends('main')

@section('content')
<div class='container'>
    <div class="row py-5">
        <a href="/dashboard">&raquo; Back to home</a>
        <div class="col-md-6 mt-4 border py-4 px-4">
            <h3 class="mb-4">Form-Pelanggan</h3>
            <form action="/dashboard/pelanggan" method="post" class="form">
                @csrf
            @if($title === "Update")
            @foreach($data as $p)
            <input type="hidden" name="titles" value="{{ $title }}"/>
            <div class="md-3">
                <label class="mb-2" for="">kodepel</label>
                <input value="{{ $p->kodepel }}" type="text" name="kodepel" class="form-control">
            </div>
               <div class="md-3">
                <label class="mb-2" for="">Nama</label>
                <input value="{{ $p->nama }}" type="text" name="nama" class="form-control">
            </div>
               <div class="md-3">
                <label class="mb-2" for="">Telp</label>
                <input value="{{ $p->telp }}" type="text" name="telp" class="form-control">
            </div>
               <div class="md-3">
                <label class="mb-2" for="">Alamat</label>
                <input value="{{ $p->alamat }}" type="text" name="alamat" class="form-control">
            </div>
            <button class="btn btn-primary mt-3" type="submit" style="width:100%">{{ $title }}</button>
            @endforeach
            @else 
            <input type="hidden" name="titles" value="{{ $title }}"/>
            <div class="md-3">
                <label class="mb-2" for="">kodepel</label>
                <input  type="text" name="kodepel" class="form-control">
            </div>
               <div class="md-3">
                <label class="mb-2" for="">Nama</label>
                <input  type="text" name="nama" class="form-control">
            </div>
               <div class="md-3">
                <label class="mb-2" for="">Telp</label>
                <input  type="text" name="telp" class="form-control">
            </div>
               <div class="md-3">
                <label class="mb-2" for="">Alamat</label>
                <input  type="text" name="alamat" class="form-control">
            </div>
            <button class="btn btn-primary mt-3" type="submit" style="width:100%">{{ $title }}</button>
            @endif
        </form>
        </div>
    </div>
    <div class="row">
        <table class="table">
  <thead>
    <tr class="text-center">
      <th scope="col">Kodepel</th>
      <th scope="col">Nama</th>
      <th scope="col">Telp</th>
      <th scope="col">Alamat</th>
      <th scope="col">Modifier</th>
    </tr>
  </thead>
  <tbody>
   @foreach($data as $p) 
    <tr class="text-center">
        <td>{{ $p->kodepel }}</td>
        <td>{{ $p->nama }}</td>
        <td>{{ $p->telp }}</td>
        <td>{{ $p->alamat }}</td>
        <td>
            <a href="/dashboard/showEditPelanggan/{{ $p->kodepel }}" class="btn btn-success">Update</a>
            <a href="/dashboard/deletePelanggan/{{ $p->kodepel }}" class="btn btn-danger">Delete</a>

        </td>

    </tr>
   @endforeach
  </tbody>
</table>
    </div>
</div>
@endsection