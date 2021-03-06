@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp ">
    <div class="text-center ">

        <h1 class="text-dark ">Edit Gallery du caroussel </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')

     
<div class="container d-flex justify-content-center">
    <div class="col-5">
        <div class="container">
            <form action="/slideredit/{{$sliders->id}}/update" method="post">
            @csrf

          
            <div class="form-group">
                <label for="" class="mt-5">Description</label>
            <input type="text" name="img_desc" id="" class="form-control" value="{{$sliders->img_desc}}">
            </div>
          
            <div class="form-group">
                <label for="" class="mt-5">Image de la gallerie</label>
            <input type="text" name="img_path" id="" class="form-control" value="{{$sliders->img_path}}">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
            </form>
        </div>

    </div>

</div>
        <!-- /. ROW  -->
    
        <!-- /. ROW  -->
    </div>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/users.css">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">

@stop

@section('js')
   
@stop