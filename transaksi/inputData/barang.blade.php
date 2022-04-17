@extends('main')

@section('content')
<div class='container'>
    <div class="row py-5">
        <a href="/dashboard">&raquo; Back to home</a>
        <div class="col-md-6 border py-4 px-4 mt-4">
            <h3 class="mb-4">Form-Barang</h3>
            <form action="/dashboard/barang" method="post" class="form">
                @csrf
                @if($title === "Update") 
                  @foreach($data as $p)
                  <input type="hidden" name="titles" value="{{ $title }}">
                                  <div class="mb-2">
                    <label class="mb-2">Kodebarang</label>
                    <input value="{{ $p->kodebarang }}" class="form-control" type="text" name="kodebarang"/>
                </div>
                   <div class="mb-2">
                    <label class="mb-2">Nama</label>
                    <input value="{{ $p->nama }}" class="form-control" type="text" name="nama"/>
                </div>
                   <div class="mb-2">
                    <label class="mb-2">Jenis</label>
                    <input value="{{ $p->jenis }}" class="form-control" type="text" name="jenis"/>
                </div>
                   <div class="mb-2">
                    <label class="mb-2">Merk</label>
                    <input value="{{ $p->merk }}" class="form-control" type="text" name="merk"/>
                </div>
                   <div class="mb-2">
                    <label class="mb-2">satuan</label>
                    <input value="{{ $p->satuan }}" class="form-control" type="text" name="satuan"/>
                </div>
                   <div class="mb-2">
                    <label class="mb-2">jumlah_stock</label>
                    <input value="{{ $p->jumlah_stock }}" class="form-control" type="number" name="jumlah_stock"/>
                </div>
                  <div class="mb-2">
                    <label class="mb-2">Harga_jual</label>
                    <input value="{{ $p->harga_jual }}" class="form-control" type="number" name="harga_jual"/>
                </div>
                  <div class="mb-2">
                    <label class="mb-2">Harga_beli</label>
                    <input value="{{ $p->harga_beli }}" class="form-control" type="number" name="harga_beli"/>
                </div>
                  <div class="mb-2">
                    <label class="mb-2">Keterangan</label>
                    <input value="{{ $p->ket }}" class="form-control" type="text" name="ket"/>
                </div>
                <button type="submit" style="width:100%" class="btn btn-primary mt-3">{{ $title }}</button>

                  @endforeach 
                @else
                  <input type="hidden" name="titles" value="{{ $title }}">
                <div class="mb-2">
                    <label class="mb-2">Kodebarang</label>
                    <input class="form-control" type="text" name="kodebarang"/>
                </div>
                   <div class="mb-2">
                    <label class="mb-2">Nama</label>
                    <input class="form-control" type="text" name="nama"/>
                </div>
                   <div class="mb-2">
                    <label class="mb-2">Jenis</label>
                    <input class="form-control" type="text" name="jenis"/>
                </div>
                   <div class="mb-2">
                    <label class="mb-2">Merk</label>
                    <input class="form-control" type="text" name="merk"/>
                </div>
                   <div class="mb-2">
                    <label class="mb-2">satuan</label>
                    <input class="form-control" type="text" name="satuan"/>
                </div>
                   <div class="mb-2">
                    <label class="mb-2">jumlah_stock</label>
                    <input class="form-control" type="number" name="jumlah_stock"/>
                </div>
                  <div class="mb-2">
                    <label class="mb-2">Harga_jual</label>
                    <input class="form-control" type="number" name="harga_jual"/>
                </div>
                  <div class="mb-2">
                    <label class="mb-2">Harga_beli</label>
                    <input class="form-control" type="number" name="harga_beli"/>
                </div>
                  <div class="mb-2">
                    <label class="mb-2">Keterangan</label>
                    <input class="form-control" type="text" name="ket"/>
                </div>
                <button type="submit" style="width:100%" class="btn btn-primary mt-3">Submit</button>
                @endif
            </form>
        </div>
    </div>
    <div class="row">
   <table class="table">
  <thead>
    <tr class="text-center">
      <th scope="col">Kodebarang</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis</th>
      <th scope="col">Merk</th>
      <th scope="col">satuan</th>
      <th scope="col">jumlah_stock</th>
      <th scope="col">harga_jual</th>
      <th scope="col">harga_beli</th> 
     <th scope="col">Modifier</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $p) 
     <tr class="text-center">
         <td>{{ $p->kodebarang }}</td>
         <td>{{ $p->nama }}</td>
         <td>{{ $p->jenis }}</td>
         <td>{{ $p->merk }}</td>
         <td>{{ $p->satuan }}</td>
         <td>{{ $p->jumlah_stock }}</td>
         <td>{{ $p->harga_jual }}</td>
         <td>{{ $p->harga_beli }}</td>
         <td>
             <a href="/dashboard/showEditBarang/{{ $p->kodebarang }}" class="btn btn-success">Update</a>
             <a href="/dashboard/deletebarang/{{ $p->kodebarang }}" class="btn btn-danger">Delete</a>
         </td>
     </tr>
    @endforeach
  </tbody>
</table>
    </div>
</div>
@endsection