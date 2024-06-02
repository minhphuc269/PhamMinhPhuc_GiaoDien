@extends('layouts.admin')
@section('title','Menu')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Menu</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                    <li class="breadcrumb-item active">Menu</li>
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
                    <a class="btn btn-sm btn-danger" href="#">
                        <i class="fas fa-trash"></i> Thùng rác
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                  <div class="card">
                    <div class="card-header">
                      <h4><label>Thêm Mục</label></h4>
                    </div>
                    <div class="card-body">
                      <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="name">Tên mục</label>
                          <input type="text" name="name" id="name" class="form-control small-placeholder" placeholder="Nhập tên mục..." required>
                        </div>
                        <div class="form-group">
                          <label for="link">Đường dẫn</label>
                          <input type="text" name="slug" id="slug" class="form-control small-placeholder" placeholder="Nhập đường dẫn..." required>
                        </div>
                        <div class="form-group">
                          <label for="type">Kiểu</label>
                          <input type="text" name="slug" id="slug" class="form-control small-placeholder" placeholder="Nhập kiểu..." required>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-md-9">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 30px;">#</th>
                                <th>Tên </th>
                                <th>Đường dẫn</th>
                                <th>Kiểu</th>
                                <th class="text-center" style="width: 190px;">Chức năng</th>
                                <th class="text-center" style="width: 30px;">ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $row)
                            <tr>
                                <td class="text-center">
                                    <input type="checkbox" name="checkId[]" id="checkId" value="1">
                                </td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->link}}</td>
                                <td>{{$row->type}}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.menu.status', ['id' => $row->id]) }}" class="btn btn-sm btn-success">
                                        <i class="fas fa-toggle-on"></i>
                                    </a>
                                    <a href="{{ route('admin.menu.show', ['id' => $row->id]) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.menu.edit', ['id' => $row->id]) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ route('admin.menu.delete', ['id' => $row->id]) }}" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                                <td class="text-center">{{$row->id}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
