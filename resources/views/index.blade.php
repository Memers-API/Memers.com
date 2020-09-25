@extends('layouts.app')
@section('title')

      Username

@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="img-circle img-bordered-sm" src="{{URL::to('Adminlte/dist/img/user1-128x128.jpg')}}" class="w-100" alt="no image">
        </div>
        <div class="col-9 pt-5">
          <div class="d-flex justify-content-between align-items-baseline">
            <div class="d-flex align-items-center pb-3">
              <div class="h4">Username</div>
            </div>
            <button class="btn btn-outline-primary"><a href="">Add New Post</a></button>
          </div>
          <button class="btn btn-outline-primary"><a href="">Edit Profile</a></button>
          <div class="pt-4 font-weight-bold">Profile title</div>
          <div>Description</div>
        </div>
    </div>

    <div class="row pt-5">
      <div class="col-4 pb-4">
        <a href="">
            <img src="{{URL::to('Adminlte/dist/img/meme-3.jpg')}}" class="w-100"/>
        </a>
      </div>
   </div>
   <span class="font-weight-bold">
     <a href=""><span class="text-dark ">Memelord_Username</span></a>
   </span> Caption
   <button class="btn btn-secondary btn-sm"><a href=""><i onclick="myFunction(this)" class="fa fa-thumbs-up"></i></a></button>
</div>
@endsection
@section('links')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{ URL::to('css/main.css') }}" rel="stylesheet">
@endsection
@section('script')
<script>
   function myFunction(x) {
     x.classList.toggle("fa-thumbs-down");
   }
</script>
@endsection
