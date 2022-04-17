<?php

  namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\User;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Auth;
   
   class Dashboard extends Controller {
      public function index() {
          return view('dashboard');
      }

      public function barang() {
        $data = DB::table('tbbarang')->get();
          return view('transaksi.inputData.barang' , [
            "data"=>$data, 
            "title"=>"Submit"
          ]);
          
      }

      public function showEditBarang($id) {
          $data = DB::table('tbbarang')->where('kodebarang',$id)->get();
          return view('transaksi.inputData.barang' , [
            "data"=>$data, 
            "title"=>"Update"
          ]);
      }

      public function pelanggan() {
        $data = DB::table('tbpelanggan')->get();
        return view('transaksi.inputData.pelanggan', [
          "data"=>$data,
          "title"=>"Submit"
        ]);
      }

      public function showEditPelanggan($id) {
         $data = DB::table('tbpelanggan')->where('kodepel',$id)->get();
         return view('transaksi.inputData.pelanggan' , [
           "title"=>"Update",
           "data"=>$data 
         ]);
      }

      public function sales() {
         $data = DB::table('tbsales')->get();
        return view('transaksi.inputData.sales', [
          "data"=>$data,
           "title"=>"Submit",
        ]);
      }

      public function showEditSales($id) {
         $data = DB::table('tbsales')->where('kodesales' , $id)->get();
         return view('transaksi.inputData.sales' , [
           "title"=>"Update",
           "data"=>$data 
         ]);
      }

      public function suplier() {
         $data = DB::table('tbsuplier')->get();
        return view('transaksi.inputData.suplier', [
          "data"=>$data,
          "title"=>"Submit"
        ]);
      }

           public function showEditSuplier($id) {
         $data = DB::table('tbsuplier')->where('kodesup' , $id)->get();
         return view('transaksi.inputData.suplier' , [
           "title"=>"Update",
           "data"=>$data 
         ]);
      }
   }

?>