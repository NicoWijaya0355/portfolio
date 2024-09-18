@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Card</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    
</head>

<body>
  
<div class="row ">
        <div class="col-mb-6">
            <form action="">
                <div class="input-group mb-3">
                    <input type="search" class="form-control" placeholder="Search" name="search" >
                    <button class="btn btn-outline-primary" type="submit" >Search</button>
                </div>
            </form>
        </div>
    </div>
    <div>
        <a class="btn btn-outline-success" href="{{ route('layanans.create') }}"> Tambah pegawai</a>
      
    </div>
    @if(count($layanans))
    @foreach ($layanans as $layanan)
   
        <div class="box">
            <div class="imgBx">
            
                <img src="{{ asset('/upload/'.$layanan->denah) }}">
                
              
            </div>
            <div class="content">
                <h2> {{$layanan->id}}<br><span>{{$layanan->nama_lembaga}}</span>
                    <br>
                        <span>
                            <a class="btn btn-outline-primary" href="{{ route('layanans.edit',$layanan->id) }}">Edit</a>
                            <a class="btn btn-outline-primary" href="{{ route('layanan.fetch',$layanan->id) }}">Play</a>
                        </span>
                </h2>

            </div>
            <a class="btn btn-outline-primary" href="{{ route('layanans.show',$layanan->id) }}">Show</a>
        </div>
        @endforeach 
    @endif
  
   
    
</body>
</html>
@endsection