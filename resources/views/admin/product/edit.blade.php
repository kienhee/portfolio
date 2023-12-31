@php
    $moduleName = 'dự án';
@endphp
@extends('layouts.admin.index')
@section('title', 'Cập nhật ' . $moduleName)

@section('content')
    <x-breadcrumb parentName="Quản lý {{ $moduleName }}" parentLink="dashboard.product.index"
        childrenName="Cập nhật {{ $moduleName }}" />
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <x-alert />
                <x-header-table tableName="Cập nhật {{ $moduleName }}" link="dashboard.product.index"
                    linkName="Danh sách {{ $moduleName }}" />
                <!-- Account -->
                <div class="card-body">
                    <form action="{{ route('dashboard.product.update', $product->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <div class="upload__box d-flex justify-content-center flex-column align-items-center gap-3">
                                    <img id="img_preview" class="img-fluid object-fit-contain"
                                        src="{{ $product->cover ?? asset('images/pngtree-image-upload-icon-photo.png') }}"
                                        alt="your image" />
                                    <label for="imgInp" data-preview="holder" class="form-label upload-label mb-3">
                                        <p class="mb-0">Thêm ảnh bìa <span class="text-danger">*</span></p>
                                        <small>(Nên chọn hình tỉ lệ 1:1)</small>
                                    </label>

                                    <input id="imgInp" accept="image/*" type="file" name="cover" hidden>
                                    <input type="text" name="cover" value="{{ $product->cover }}" hidden>
                                </div>

                                @error('cover')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Tên dự án: <span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('name') is-invalid @enderror " type="text"
                                    oninput="createSlug('name','slug')" id="name" name="name"
                                    value="{{ old('name') ?? $product->name }}" placeholder="Tên dự án" autofocus />
                                @error('name')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="slug" class="form-label">Đường dẫn URL: <span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('slug') is-invalid @enderror" type="text"
                                    id="slug" name="slug" value="{{ old('slug') ?? $product->slug }}"
                                    placeholder="Ten-du-an" />
                                @error('slug')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="description" class="form-label">Mô tả ngắn: <span
                                        class="text-danger">*</span></label>

                                <textarea class="form-control @error('description') is-invalid @enderror " id="description" rows="3"
                                    name="description" placeholder="Mô tả ngắn về dự án">{{ old('description') ?? $product->description }}</textarea>
                                @error('description')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6  ">
                                <label for="category_id" class="form-label">Danh mục: <span
                                        class="text-danger">*</span></label>
                                <select class="form-select @error('category_id') is-invalid @enderror" name="category_id"
                                    id="category_id">
                                    <option value="">Danh mục</option>
                                    @if (getAllCategories()->count() > 0)
                                        @foreach (getAllCategories() as $item)
                                            <option @if (old('category_id') == $item->id || $product->category_id == $item->id) @selected(true) @endif
                                                value="{{ $item->id }}">
                                                {{ $item->name }}</option>
                                        @endforeach
                                    @endif

                                </select>

                                @error('category_id')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="select-multiple" class="form-label">Công nghệ sử dụng: <span
                                        class="text-danger">*</span></label>
                                <select id="select-multiple" class="@error('technologies') is-invalid @enderror" multiple
                                    name="technologies" placeholder="Chọn công nghệ sử dụng" data-search="true"
                                    data-silent-initial-value-set="true">
                                    @foreach (getAllTech() as $item)
                                        <option @if (strpos(old('technologies') ?? $product->technologies, $item->name) !== false) @selected(true) @endif
                                            value="{{ $item->name }}">{{ $item->name }}
                                        </option>
                                    @endforeach

                                </select>
                                @error('technologies')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="link" class="form-label">Link web: <span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('link') is-invalid @enderror " type="text"
                                    id="link" name="link" value="{{ old('link') ?? $product->link }}"
                                    placeholder="Link web" autofocus />
                                @error('link')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="i_do" class="form-label">What I did: <span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('i_do') is-invalid @enderror " type="text"
                                    id="i_do" name="i_do" value="{{ old('i_do') ?? $product->i_do }}"
                                    placeholder="Design, maintain, v.v" autofocus />
                                @error('i_do')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12 mb-3">
                                <label for="content-product" class="form-label">Thông tin dự án : <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control @error('content') is-invalid @enderror " id="content-product" rows="3"
                                    name="content">{{ old('content') ?? $product->content }}</textarea>
                                @error('content')
                                    <p class="text-danger my-1">{{ $message }}</p>
                                @enderror
                            </div>


                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Cập nhật {{ $moduleName }}</button>
                        </div>
                    </form>
                </div>
                <!-- /Account -->
            </div>
        </div>
    </div>

@endsection
