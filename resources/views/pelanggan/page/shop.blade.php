@extends('pelanggan.layout.index')

@section('content')
    <div class="row mt-4">
        <div class="col-md-3">
            @include('pelanggan.componen.arcodion')
        </div>
        <div class="col-md-9 d-flex flex-wrap gap-4 mb-4">
            @include('pelanggan.barang.belanja')

        {{--  pagination  --}}
        @include('pelanggan.componen.pagination')
        </div>
    </div>
@endsection
