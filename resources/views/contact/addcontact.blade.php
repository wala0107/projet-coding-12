@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp">
    <div class="text-center ">

        <h1 class="text-dark  p-3 ">Add Description Contact</h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')
    

<div class="container mb-5">
    
    <form action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
        @csrf
           
  
     
        <div class="form-group">
            <label class="control-label" for="inputSuccess" class="mt-5">Adresse:</label>
            <input type="text" name="address" id="inputSuccess" class="form-control" value="">
        </div>
        <div class="form-group">
            <label class="control-label" for="inputSuccess" class="mt-5">Description:</label>
            <input type="text" name="description" id="inputSuccess" class="form-control" value="">
        </div>
        <div class="form-group">
            <label class="control-label" for="inputSuccess" class="mt-5">Email:</label>
            <input type="text" name="email" id="inputSuccess" class="form-control" value="">
        </div>
        <div class="form-group">
            <label class="control-label" for="inputSuccess" class="mt-5">Tel:</label>
            <input type="text" name="tel" id="inputSuccess" class="form-control" value="">
        </div>

     
        

        <div class="text-center">

            <button type="submit" class="btn btn-outline-dark">Submit</button>
        </div>

    </form>
</div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/users.css">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">

@stop

@section('js')
   
@stop