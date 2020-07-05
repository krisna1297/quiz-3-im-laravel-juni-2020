@extends('sbadmin2.master')

@section('page-heading')
<i class="fas fa-edit"></i> Edit Pertanyaan
@endsection

@section('content')
<form action="{{ route('artikel.update', $article->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="judul">Judul Artikel</label>
        <input type="text" class="form-control" value="{{ $article->judul }}" id="judul" name="judul" required>
    </div>
    <div class="form-group">
        <label for="isi">Isi Artikel</label>
        <textarea class="form-control" id="isi" name="isi" rows="3" required>{{ $article->isi }}</textarea>
    </div>
    <div class="form-group">
        <label for="tag">Tag</label>
        <input type="text" class="form-control" value="{{ $article->tag }}" id="tag" name="tag" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('artikel.index') }}" class="btn btn-secondary">Kembali</a>
</form>

@endsection
