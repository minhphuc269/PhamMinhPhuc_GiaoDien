@extends('layouts.admin')
@section('title', 'Chi tiết chủ đề')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Chi tiết chủ đề</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Chi tiết chủ đề</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="card">
        <div class="card-header py-2">
            <div class="row">
                @php
                    $args = ['id' => $topic->id];
                @endphp
                <div class="col-12 text-right">
                    <a class="btn btn-info btn-sm" href="{{ route('admin.topic.index') }}">
                        <i class="fa fa-arrow-left"></i> Về danh sách
                    </a>
                    <a href="{{ route('admin.topic.edit', $args) }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-edit"></i> Sửa
                    </a>
                    <a href="{{ route('admin.topic.delete', $args) }}" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i> Xóa
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr class="table-header text-center">
                        <th class="text-bold text-large">Tên trường</th>
                        <td class="text-bold text-large">Giá trị</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Tên chủ đề</th>
                        <td>{{ $topic->name }}</td>
                    </tr>
                    <tr>
                        <th>Mô tả</th>
                        <td>{{ $topic->description }}</td>
                    </tr>
                    <tr>
                        <th>Sắp xếp</th>
                        <td>{{ $topic->sort_order }}</td>
                    </tr>
                    <tr>
                        <th>Trạng thái</th>
                        <td>{{ $topic->status }}</td>
                    </tr>
                    <tr>
                        <th>Ngày tạo</th>
                        <td>{{ $topic->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Ngày cập nhật</th>
                        <td>{{ $topic->updated_at }}</td>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <td>{{ $topic->id }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
