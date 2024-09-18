@extends('layouts.main')

@section('container')

<div class="d-flex justify-content-between mt-5 mb-5">
    <div>
        <h2>Tampil Data</h2>
    </div>
   
    

    
</div>

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

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th witdh="20px" class="text-center">No</th>
        <th>Nama Lembaga</th>
        <th>Nama Layanan</th>
        <th>Senin - Kamis</th>
        <th>Jumat</th>
        <th>Jenis Lembaga</th>
      
        
       
        
        <th width="280px" class="text-center">Action</th>
    </tr>
    @if(count($layanans))
    @foreach ($layanans as $layanan)
    <tr>
        <td class="center-text">{{$layanan->id}}</td>
        <td>{{$layanan->nama_lembaga}} </td>
        <td>{{$layanan->nama_layanan}}</td>
        <td>{{$layanan->senin_kamis}}</td>
        <td>{{$layanan->jumat}}</td>
        <td>{{$layanan->jenis_lemabaga}}</td>
      
        
        <td class="center-text">
          

            <a class="btn btn-outline-success" href="{{ route('layanans.show',$layanan->id) }}">Show</a>

            <a class="btn btn-outline-primary" href="{{ route('layanans.edit',$layanan->id) }}">Edit</a>

            <a class="btn btn-outline-primary" href="{{ route('layanan.fetch',$layanan->id) }}">PLay</a>

        
        </td>
        </td>
    </tr>
    @endforeach
    @else
    <tr>
        <td align="center" colspan="9">Empty Data!! Have a nice day :)</td> 
    </tr>   
    @endif
</table>
@endsection