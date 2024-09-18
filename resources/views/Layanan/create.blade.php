@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between mt-5 mb-5">
    <h3>Tambah Lembaga </h3>
    <div>
        <a href="{{ route('layanans.index') }}" class="btn btn-outline-secondary">Back</a>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>There were some problems with your input.<br><br>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('layanans.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="row g-3" style="margin-bottom :10px;">
                <div class="col">
                    <label for="namalembaga">Nama Lembaga:</label>
                    <input type="text" name="nama_lembaga" class="form-control" placeholder="Nama Lembaga">
                </div>

                

                
            </div>
            <div class="col">
                    <label for="namalayanan">Nama Layanan:</label>
                    <input type="text" name="nama_layanan" class="form-control" placeholder="Nama Layanan">
            </div>

            <div class="row g-3" style="margin-bottom :10px;">
                <div class="col">
                    <label for="seninkamis">Jam mulai Kerja (Senin - Kamis) :</label>
                    <input type="time" name="senin_kamis" class="form-control" placeholder="jam Kerja" style="margin-bottom :10px;">
                
                </div>
                <div class="col">
                    <label for="seninkamis">Jam selesai Kerja (Senin - Kamis) :</label>
                    <input type="time" name="kamis" class="form-control" placeholder="jam Kerja" style="margin-bottom :10px;">
                
                </div>

                <div class="col">
                    <label for="jumat">Jam mulai Kerja (Jumat) :</label>
                    <input type="time" name="jumat" class="form-control" placeholder="jam Kerja" style="margin-bottom :10px;">
                
                </div>
                <div class="col">
                    <label for="jumat">Jam selesai Kerja (Jumat) :</label>
                    <input type="time" name="jumat2" class="form-control" placeholder="jam Kerja" style="margin-bottom :10px;">
                
                </div>

                <div class="col">
                    <label for="jenisLembaga">Jenis Lembaga :</label>
                        <select name="jenis_lembaga" id="jenis_lembaga" class="form-control" style="margin-bottom :10px;">
                            <option value="Pemerintah">Pemerintah</option>
                            <option value="Swasta">Swasta</option>
                        </select>
                </div>

            
                
                
            </div>
                   
                   

                    
               
            

            <div class="col">
                    <label for="gambar1">Gambar Loket :</label>
                    <input type="file" name="gambar1" class="form-control" placeholder="telepon" style="margin-bottom :10px;">

            </div>
            
            <div class="col">
                    <label for="denah">denah :</label>
                    <input type="file" name="denah" class="form-control" placeholder="telepon" style="margin-bottom :10px;">

            </div>
            
            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </div>
    </div>
</form>
@endsection