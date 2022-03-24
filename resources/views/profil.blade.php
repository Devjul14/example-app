@extends('layouts.index')

@section('container')
    <h1>Pasien</h1><br>
    No Reg : {{ $no_reg }} <br>
    No RM : {{ $no_rm }} <br>
    Nama : {{ $nama }} <br>
    <img src="img/queue.png" alt="pasien" width="100">
@endsection
