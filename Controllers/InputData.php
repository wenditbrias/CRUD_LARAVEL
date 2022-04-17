<?php

  namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\User;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Auth;
   
   class InputData extends Controller {
       public function barangHandler(Request $request) {
           if($request->titles === "Update") {
               DB::table('tbbarang')->where('kodebarang' , $request->kodebarang)->update([
                    "kodebarang"=>$request->kodebarang,
                   "nama"=>$request->nama,
                   "jenis"=>$request->jenis,
                   "merk"=>$request->merk,
                   "satuan"=>$request->satuan,
                   "jumlah_stock"=>$request->jumlah_stock,
                   "harga_jual"=>$request->harga_jual,
                   "harga_beli"=>$request->harga_beli,
                   "ket"=>$request->ket
               ]);

           } else {
               DB::table('tbbarang')->insert([
                   "kodebarang"=>$request->kodebarang,
                   "nama"=>$request->nama,
                   "jenis"=>$request->jenis,
                   "merk"=>$request->merk,
                   "satuan"=>$request->satuan,
                   "jumlah_stock"=>$request->jumlah_stock,
                   "harga_jual"=>$request->harga_jual,
                   "harga_beli"=>$request->harga_beli,
                   "ket"=>$request->ket
               ]);
           }

           return redirect('/dashboard/barang');
        // dd($request);
       }

       public function deleteBarang($id) {
           DB::table('tbbarang')->where('kodebarang' ,$id)->delete();
           return redirect('/dashboard/barang');
       }


       public function pelangganHandler(Request $request) {
           if($request->titles === 'Update') {
            DB::table('tbpelanggan')->where('kodepel',$request->kodepel)->update([
                   "kodepel"=>$request->kodepel,
                   "nama"=>$request->nama,
                   "telp"=>$request->telp,
                   "alamat"=>$request->alamat
               ]);
           } else {
               DB::table('tbpelanggan')->insert([
                   "kodepel"=>$request->kodepel,
                   "nama"=>$request->nama,
                   "telp"=>$request->telp,
                   "alamat"=>$request->alamat
               ]);
           }
           return redirect('/dashboard/pelanggan');
       }

       public function deletePelanggan($id) {
           DB::table('tbpelanggan')->where('kodepel' ,$id)->delete();
           return redirect('/dashboard/pelanggan');
       }

       public function salesHandler(Request $request) {
           if($request->titles === "Update") {
         DB::table('tbsales')->where('kodesales',$request->kodesales)->update([
        "kodesales"=>$request->kodesales,
        "nama"=>$request->nama,
        "telp"=>$request->telp,
        "alamat"=>$request->alamat
    ]);
           } else {
        DB::table('tbsales')->insert([
        "kodesales"=>$request->kodesales,
        "nama"=>$request->nama,
        "telp"=>$request->telp,
        "alamat"=>$request->alamat
    ]);
           }

           return redirect('/dashboard/sales');
       }

          public function deleteSales($id) {
           DB::table('tbpelanggan')->where('kodepel' ,$id)->delete();
           return redirect('/dashboard/pelanggan');
       }


       public function suplierHandler(Request $request) {
           if($request->titles === "Update") {
                   DB::table('tbsuplier')->where('kodesup',$request->kodesup)->update([
               "kodesup"=>$request->kodesup,
               "nama"=>$request->nama,
               "telp"=>$request->telp,
               "alamat"=>$request->alamat
           ]);

           } else {
               DB::table('tbsuplier')->insert([
                   "kodesup"=>$request->kodesup,
                   "nama"=>$request->nama,
                   "telp"=>$request->telp,
                   "alamat"=>$request->alamat
               ]);
           }

           return redirect('/dashboard/suplier');
       }
       
       public function deleteSuplier($id) {
           DB::table('tbsuplier')->where('kodesup',$id)->delete();
           return redirect('/dashboard/suplier');

       }
   }

?>