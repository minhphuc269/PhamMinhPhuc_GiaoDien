<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <title>Đăng nhập</title> 
    <style>
        .khung
        {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-image: linear-gradient(to top, #c3cfe2 0%, #f5f7fa 100%);
        }
        .boxlogin
        {
        max-width: 600px;
        min-width: 400px;
        background: white;
        display: block;
        padding: 20px;
        border-radius: 17px;
        }
    </style>
</head>
<body>
    <div class="khung">
        <div class="boxlogin">
            <h1 class="text-center text-success">ĐĂNG NHẬP</h1>
            <form action="{{ route("website.dologin") }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="username">
                        <strong>Tên đăng nhập</strong>
                    </label>
                    <input type="text" id="username" class="form-control" placeholder="Tên đăng nhập hoặc email" name="username">
                </div>
                <div class="mb-3">
                    <label for="password">
                        <strong>Mật khẩu</strong>
                    </label>
                    <input type="password" id="password" class="form-control" placeholder="Mật khẩu" name="password">
                </div>
                <button type="submit" class="btn btn-success">Đăng nhập</button>
            </form>
        </div>
    </div>

    @if (Session::has('message'))
        <script>
            toastr.options={
                "processBar":true,
                "closeButton":true
            }
            toastr.error("{{ Session::get('message') }}");
        </script>
    @endif
</body>
</html>