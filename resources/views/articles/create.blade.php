@extends('sbadmin2.master')

@section('page-heading')
<i class="fas fa-edit"></i> Entri Pertanyaan
@endsection

@section('content')
<form action="{{ route('artikel.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="judul">Judul Artikel</label>
        <input type="text" class="form-control" placeholder="Judul artikel ..." id="judul" name="judul" required>
    </div>
    <div class="form-group">
        <label for="isi">Isi Artikel</label>
        <textarea class="form-control" placeholder="Isi artikel ..." id="isi" name="isi" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="tag">Tag</label>
        <input type="text" class="form-control" placeholder="Tag artikel, pisahkan dengan tanda koma untuk banyak tag" id="tag" name="tag" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('artikel.index') }}" class="btn btn-secondary">Kembali</a>
</form>

@endsection
