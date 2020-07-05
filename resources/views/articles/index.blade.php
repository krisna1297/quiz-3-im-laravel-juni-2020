@extends('sbadmin2.master')

@section('page-heading')
<i class="fas fa-clipboard"></i> Artikel
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <span class="m-0 font-weight-bold text-primary">Daftar Artikel</span>
        <a href="{{ route('artikel.create') }}" class="float-right btn btn-sm btn-primary">
            <i class="fas fa-plus-circle"></i> Tambah
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="table-warning">
                        <th class="text-center">No.</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Isi</th>
                        <th class="text-center">Slug</th>
                        <th class="text-center">Tag</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $i => $article)
                    <tr>
                        <td class="text-center">{{ $i+1 }}.</td>
                        <td>{{ $article->judul }}</td>
                        <td>{{ $article->isi }}</td>
                        <td>{{ $article->slug }}</td>
                        <td>{{ $article->tag }}</td>
                        <td class="text-center text-nowrap">
                            <a href="{{ route('artikel.show', $article->id) }}" class="btn btn-sm btn-info" title="Show {{ $article->judul }}">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="{{ route('artikel.edit', $article->id) }}" class="btn btn-sm btn-primary" title="Edit {{ $article->judul }}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="/artikel/{{ $article->id }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" style="border: none">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('css')
<link href="{{ asset('/sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('js')
<!-- Datatable plugins -->
<script src="{{ asset('/sbadmin2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
$(function () {
    $('#dataTable').DataTable();
});
</script>

@endpush
