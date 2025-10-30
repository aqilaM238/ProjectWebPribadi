@extends('layouts.main');

@section('content')
    <h1>Tambah Data Mahasiswa</h1>
    <div class="col-8">
        <div class="card ">
            <div class="card-body bg-light">

            <form action="/insertdata" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama :</label>
                    <input type="text" name="name" id="nama" placeholder="Nama Lengkap" class="form-control"  >
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">NIM :</label>
                    <input type="number" name="nim" id="nim" placeholder="Nomor Mahasiswa" class="form-control" >
                </div>
                            <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Program Studi :</label>
                    <input type="text" name="prodi" id="prodi" class="form-control" >
                </div>
                            <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email :</label>
                    <input type="email" name="email" id="email" class="form-control" >
                </div>
                            <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nomor Handphone :</label>
                    <input type="number" name="nohp" class="form-control" >
                </div>




                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection