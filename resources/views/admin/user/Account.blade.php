@php
    $moduleName = 'người dùng';
@endphp
@extends('layouts.admin.index')
@section('title', 'Thông tin ' . $moduleName)
@section('content')
    <x-breadcrumb parentName="Thông tin người dùng" parentLink="dashboard.user.account-setting"
        childrenName="{{ Auth::user()->full_name }}" />
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('dashboard.user.update', Auth::user()->id) }}" enctype="multipart/form-data">
                <div class="card mb-4">
                    <x-alert />
                    <h5 class="card-header">Thông tin cá nhân</h5>
                    <!-- Account -->
                    <div class="card-body">

                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="{{ Auth::user()->avatar ?? asset('images/avatar-default.png') }}" alt="user-avatar"
                                class="d-block rounded " style="object-fit:cover" height="100" width="100"
                                id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload ảnh</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" id="upload" class="account-file-input" hidden name="avatar"
                                        accept="image/png, image/jpeg" />
                                </label>
                                <p class="text-muted mb-0">Được phép JPG,PNG.</p>
                            </div>
                        </div>

                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="full_name" class="form-label">Họ và tên: <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="full_name" name="full_name"
                                    value="{{ old('full_name') ?? Auth::user()->full_name }}" />
                                @error('full_name')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail:<span class="text-danger">*</span></label>
                                <input class="form-control" name="email" type="text" placeholder="john.doe@example.com"
                                    value="{{ old('email') ?? Auth::user()->email }}" />
                                @error('email')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phone_number">Số điện thoại: <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="phone_number" name="phone_number"
                                    value="{{ old('phone_number') ?? Auth::user()->phone_number }}" />
                                @error('phone_number')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="fb">Facebook: <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="fb" name="fb"
                                    value="{{ old('fb') ?? Auth::user()->fb }}" />
                                @error('fb')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="ins">Instagram: <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="ins" name="ins"
                                    value="{{ old('ins') ?? Auth::user()->ins }}" />
                                @error('ins')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="linkedin">Linkedin: <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="linkedin" name="linkedin"
                                    value="{{ old('linkedin') ?? Auth::user()->linkedin }}" />
                                @error('linkedin')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="web">Website: <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="web" name="web"
                                    value="{{ old('web') ?? Auth::user()->web }}" />
                                @error('web')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="address">Địa chỉ: <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="address" name="address"
                                    value="{{ old('address') ?? Auth::user()->address }}" />
                                @error('address')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label" for="description">Mô tả công việc: <span
                                        class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="description" name="description"
                                    value="{{ old('description') ?? Auth::user()->description }}" />
                                @error('description')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="content-product" class="form-label">Thông tin tác giả (About me) : <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control @error('content') is-invalid @enderror " id="content-product" rows="3"
                                    name="content" placeholder="">{{ old('content') ?? Auth::user()->content }}</textarea>
                                @error('content')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Lưu thay đổi</button>
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
