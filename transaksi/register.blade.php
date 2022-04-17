@extends('main')

@section('content')
<div class="container-fluid bg-primary" style="height:100vh">
    <div class="row py-5">
     <div class="col-md-5 mx-auto mt-5">
             @if(session()->has('error'))
         <div class="alert alert-danger">
             {{session('error')}}
         </div>
         @endif
         <form method="post" action="/register" class="form bg-white py-4 px-4">
            @csrf
            <h2 class="fs-4 text-center mb-4">Register Form</h2>
            <div class="form-item">
                <input placeholder="kodeuser" type="text" class="form-control" name="kodeuser" required>
            </div>
                <div class="form-item my-2">
                <input placeholder="nama" type="text" class="form-control" name="name" required>
            </div>
                <div class="form-item">
                <input placeholder="email" type="email" class="form-control" name="email" required>
            </div>
                <div class="form-item my-2">
                <input placeholder="status" type="text" class="form-control" name="status" required>
            </div>
                <div class="form-item">
                <input placeholder="password" type="password" class="form-control" name="password" required>
            </div>
                <div class="mini-info mt-3 mb-4">
                <h6>Already have account? <a href="/">Login</a></h6>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%">Register</button>
         </form>
     </div>
    </div>
</div>
@endsection