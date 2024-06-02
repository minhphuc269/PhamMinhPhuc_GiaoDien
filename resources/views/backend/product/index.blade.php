@extends('layouts.admin')
@section('title', 'QL Sản Phẩm')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Quản Lý Sản Phẩm</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Blank Page</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-12 text-right">
                    <a class="btn btn-sm btn-success" href="{{ route('admin.product.create') }}">
                        <i class="fas fa-plus"></i> ThêmSP
                    </a>
                    <a class="btn btn-sm btn-danger" href="#">
                        <i class="fas fa-trash"></i> Thùng rác
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 30px;">#</th>
                        <th class="text-center" style="width: 90px;">Hình</th>
                        <th>Tên sản phẩm</th>
                        <th style="width: 90px;">Slug</th>
                        <th>Danh mục</th>
                        <th>Thương hiệu</th>
                        <th class="text-center" style="width: 170px;">Chức năng</th>
                        <th class="text-center" style="width: 30px;">ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $row)
                    <tr>
                        <td class="text-center">
                            <input type="checkbox" name="checkId[]" id="checkId" value="1">
                        </td>
                        <td class="text-center">
                            <img src="{{ asset('images/categorys/'.$row->image) }}" class="img-fluid" alt="{{ $row->image }}">
                        </td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->slug }}</td>
                        <td>{{ $row->categoryname }}</td>
                        <td>{{ $row->brandname }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.product.status',['id'=>$row->id]) }}" class="btn btn-sm btn-success">
                                <i class="fas fa-toggle-on"></i>
                            </a>
                            <a href="{{ route('admin.product.show',['id'=>$row->id]) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.product.edit',['id'=>$row->id]) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{ route('admin.product.delete',['id'=>$row->id]) }}" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                        <td class="text-center">{{ $row->id }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
<div class="card-footer clearfix" style="overflow-x: auto;">
    <div class="float-left" style="white-space: nowrap;">
        @if ($list->previousPageUrl())
            <a href="{{ $list->previousPageUrl() }}" class="btn btn-primary">Trang trước</a>
        @endif
        
        @foreach (range(1, $list->lastPage()) as $page)
            <a href="{{ $list->url($page) }}" class="btn btn-secondary">{{ $page }}</a>
        @endforeach
        
        @if ($list->nextPageUrl())
            <a href="{{ $list->nextPageUrl() }}" class="btn btn-primary">Trang tiếp theo</a>
        @endif
    </div>
</div>
</section>

@endsection
