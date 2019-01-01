@extends('layouts.app')

@section('content')
<h4>{{ $produk->nama_produk }}</h4>
<p>{{ $produk->deskripsi_produk }}</p>
<a href="{{ route('produk.index') }}" class="btn btn-default">Kembali</a>
@endsection