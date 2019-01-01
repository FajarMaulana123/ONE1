@extends('layouts.app')

@section('content')
<h4>Edit Produk</h4>
<form action="{{ route('produk.update', $produk->id) }}" method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('nama_produk') ? 'has-error' : '' }}">
        <label for="nama_produk" class="control-label">Nama Produk</label>
        <input type="text" class="form-control" name="nama_produk" placeholder="Nama Produk" value="{{ $produk->nama_produk }}">
        @if ($errors->has('nama_produk'))
            <span class="help-block">{{ $errors->first('nama_produk') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('deskripsi_produk') ? 'has-error' : '' }}">
        <label for="deskripsi_produk" class="control-label">Deskripsi Produk</label>
        <textarea name="deskripsi_produk" cols="30" rows="5" class="form-control">{{ $produk->deskripsi_produk }}</textarea>
        @if ($errors->has('deskripsi_produk'))
            <span class="help-block">{{ $errors->first('deskripsi_produk') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('produk.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection