@extends('admin.layout.default')
@section('content')
    <div class="row page-titles mx-0 mb-3">
        <div class="d-flex justify-content-between align-items-center">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item fs-5 fw-500">
                    <a href="{{ route('admin.profile_system.index') }}">Profile System</a>
                </li>
                <li class="breadcrumb-item fs-5 fw-500">
                    <span class="text-dark">Update</span>
                </li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card border-0">
                    <div class="card-body box-shadow">
                        <form action="{{ route('admin.profile_system.update', $profilesystem->id) }}" method="post">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label for="title">Title
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="Title" value="{{ $profilesystem->title }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="system_width">Width
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" name="system_width" id="system_width"
                                        placeholder="Width" value="{{ $profilesystem->system_width }}" required>
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="{{ route('admin.profile_system.index') }}" class="btn btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
