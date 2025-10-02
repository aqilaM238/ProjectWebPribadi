@extends('layouts/main')

@section('content')
  <h1>Profil</h1>
  <h3>{{ $nama }}</h3>
  <p>{{ $nohp }}</p>
  <img src= "{{$foto}}" width= "200px" />

@endsection