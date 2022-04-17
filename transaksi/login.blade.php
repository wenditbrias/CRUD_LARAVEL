@extends('main')

@section('content')
<div class="container-fluid bg-primary" style="height:100vh">
    <div class="row py-5">
     <div class="col-md-5 mx-auto mt-5">
         @if(session()->has('success'))
         <div class="alert alert-success">
             {{session('success')}}
         </div>
         @endif
         <form method="post" action="/" class="form bg-white py-4 px-4">
            @csrf
            <h2 class="fs-4 text-center mb-4">Login Form</h2>
                <div class="form-item">
                <input placeholder="email" type="email" class="form-control" name="email" required>
            </div>
                <div class="form-item mt-2">
                <input placeholder="password" type="password" class="form-control" name="password" required>
            </div>
            <div class="mini-info mt-3 mb-4">
                <h6>Don't have account? <a href="/register">Register</a></h6>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%">Login</button>
         </form>
     </div>
    </div>
</div>
@endsection