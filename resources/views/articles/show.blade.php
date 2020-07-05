@extends('sbadmin2.master')

@section('page-heading')
<i class="fas fa-clipboard"></i> Detail Artikel
@endsection

@section('content')
<table class="table" style="border: 0">
    <tr>
        <td><b>Judul</b></td>
        <td>{{ $article->judul }}</td>
    </tr>
    <tr>
        <td><b>Slug</b></td>
        <td>{{ $article->slug }}</td>
    </tr>
    <tr>
        <td><b>Isi</b></td>
        <td>{{ $article->isi }}</td>
    </tr>
    <tr>
        <td><b>Tag</b></td>
        <td>
            @php
                foreach(explode(',', $article->tag) as $tag) {
                    echo '<button type="button" class="btn btn-sm btn-success">' . $tag . '</button> ';
                }
            @endphp
        </td>
    </tr>
    <tr>
        <td><b>Created</b></td>
        <td>{{ $article->created_at }}</td>
    </tr>
    <tr>
        <td><b>Updated</b></td>
        <td>{{ $article->updated_at }}</td>
    </tr>
</table>
<hr>
<a href="{{ route('artikel.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
