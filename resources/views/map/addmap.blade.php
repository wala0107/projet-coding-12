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
    
    <form action="{{route('map.store')}}" method="post" enctype="multipart/form-data">
        @csrf
           
  
     
        <div class="form-group">
            <label class="control-label" for="inputSuccess" class="mt-5">Adresse:</label>
            <input type="text" name="address" id="inputSuccess" class="form-control" value="">
        </div>
       
        <div class="form-group">
            <label class="control-label" for="inputSuccess" class="mt-5">Lien Iframe de Google MAp::</label>
            <input type="text" name="map_link" id="inputSuccess" class="form-control" value="">
        </div>
        <div class="form-group">
            <label class="control-label" for="inputSuccess" class="mt-5">Phone:</label>
            <input type="text" name="phone" id="inputSuccess" class="form-control" value="">
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