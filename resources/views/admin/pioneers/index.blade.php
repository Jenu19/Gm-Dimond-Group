@extends('admin.layout.default')
@section('content')
    <div class="row page-titles mx-0 mb-3">
        <div class="d-flex justify-content-between align-items-center">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item fs-5 fw-500">
                    <a href="{{ route('admin.pioneers.index') }}">Pioneers</a>
                </li>
            </ol>
            <a href="{{ request()->url() . '/add' }}" class="btn btn-primary">Add New</a>
        </div>
    </div>
    <div class="container-fluid">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="row row-cols-xl-5 row-cols-lg-3 row-cols-md-3 row-cols-2 g-3">
            @foreach ($pioneersdata as $gallery)
                <div class="col"">
                    <div class="card border-0 text-center handle">
                        <div class="card-body border-0">
                            <img src="{{ helper::image_path($gallery->image) }}"
                                class="img-fluid gallery-img object rounded" alt="">
                            <div class="mt-2 d-flex flex-wrap justify-content-center gap-2">
                                @if ($gallery->is_available == 1)
                                    <button class="btn btn-sm btn-success rounded-4" tooltip="Active"
                                        onclick="StatusUpdate('{{ $gallery->id }}','2','{{ route('admin.pioneers.status') }}')">
                                        <i class="fa-sharp fa-solid fa-check"></i>
                                    </button>
                                @else
                                    <button class="btn btn-sm btn-danger rounded-4" tooltip="Inactive"
                                        onclick="StatusUpdate('{{ $gallery->id }}','1','{{ route('admin.pioneers.status') }}')">
                                        <i class="fa-sharp fa-solid fa-xmark"></i>
                                    </button>
                                @endif
                                <a href="{{ route('admin.pioneers.edit', $gallery->id) }}" tooltip="Edit"
                                    class="btn btn-sm btn-info rounded-4">
                                    <i class="fa-solid fa-pen-to-square text-white"></i>
                                </a>
                                <button class="btn btn-sm btn-danger rounded-4" tooltip="Delete"
                                    onclick="Delete('{{ $gallery->id }}','{{ route('admin.pioneers.delete') }}')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
