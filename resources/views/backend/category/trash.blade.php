@extends('layouts.admin')
@section('title','danh mục')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Thùng Rác Danh Mục</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
          <li class="breadcrumb-item active">Quản Lý Danh Mục</li>
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
            <a href="{{ route('admin.category.index') }}" class="btn btn-sm btn-info" type="submit" name="THEM">
                <i class="fa fa-arrow-left"></i>
                Về danh sách
            </a>
        </div>
      </div>
    </div>
    <div class="card-body">
  
        <div class="col-md-9">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th class="text-center" style="width: 30px;">#</th>
                <th class="text-center" style="width: 90px;">Hình</th>
                <th>Tên danh mục</th>
                <th>Slug</th>
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
                <td class="text-center">
                  <img src="{{asset('images/categorys/'.$row->image)}}" class="img-fluid" alt="{{$row->image}}">
                </td>
                <td>{{$row->name}}</td>
                <td>{{$row->slug}}</td>
                <td class="text-center">
           
                  <a href="{{route('admin.category.show',['id'=>$row->id])}}" class="btn btn-sm btn-info">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="{{route('admin.category.edit',['id'=>$row->id])}}" class="btn btn-sm btn-primary">
                    <i class="fas fa-undo"></i>
                  </a>
                  <form class="d-inline" action="{{route('admin.category.destroy',['id'=>$row->id])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" type="submit">
                        <i class="fas fa-trash"></i>
                    </button>
                  </form>
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
