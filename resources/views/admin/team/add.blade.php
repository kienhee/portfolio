@php
    $moduleName = 'thành viên';
@endphp
@extends('layouts.admin.index')
@section('title', 'Thêm ' . $moduleName)
@section('content')
    <x-breadcrumb parentName="Danh sách {{ $moduleName }}" parentLink="dashboard.team.index"
        childrenName="Thêm {{ $moduleName }}" />
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('dashboard.team.add') }}" enctype="multipart/form-data">
                <div class="card mb-4">
                    <x-alert />
                    <x-header-table tableName="Thêm mới {{ $moduleName }}" link="dashboard.team.index"
                        linkName="Danh sách {{ $moduleName }}" />
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="{{ asset('images/avatar-default.png') }}" alt="user-avatar" class="d-block rounded "
                                style="object-fit:cover" height="100" width="100" id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload ảnh</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" id="upload" class="account-file-input" hidden name="avatar"
                                        accept="image/png, image/jpeg" />
                                </label>
                                <p class="text-muted mb-0">Được phép JPG,PNG.</p>
                                @error('avatar')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Họ và tên: <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" type="text" placeholder="Nguyen van A" id="name"
                                    name="name" value="{{ old('name') }}" />
                                @error('name')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="description" class="form-label">Mô tả ngắn:<span
                                        class="text-danger">*</span></label>
                                <input class="form-control" name="description" type="text" placeholder="Mô tả ngắn"
                                    value="{{ old('description') }}" />
                                @error('description')
                                    <p class="text-danger
                                    my-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary me-2">Thêm mới {{ $moduleName }}</button>
                                <button type="reset" class="btn btn-outline-secondary">Đặt lại</button>
                            </div>
                        </div>
            </form>
            <!-- /Account -->
        </div>
    </div>
    </div>
    <script>
        let imgInp = document.getElementById('upload');
        let preview = document.getElementById('uploadedAvatar');
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection
