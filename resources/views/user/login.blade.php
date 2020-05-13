@extends('base')
@section('head')
    <title>Đăng nhập</title>
    <script>
      $(document).ready(function(){
          $("#error-login").hide();
          $("#btn-login").click(function(){
              let password = $("#password").val();
              let email = $("#email").val();
              $("#error-login").show();
              if(email == "" || password == "")
              {
                $("#error-login").text("Vui lòng nhập đầy đủ thông tin !");
                return false;
              }
              else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)))
              {
                $("#error-login").text("Nhập email sai định dạng !");
                return false;
              }
              else if(password.length < 8)
              {
                $("#error-login").text("Mật khẩu phải trên 8 ký tự !");
                return false;
              }
              else
              {
                $("#error-login").text("");
                $("#error-login").hide();
                return true;
              }
          });
      });
  </script>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-md-12">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Chào mừng bạn trở lại!</h1>
                  @if (session('error-login'))
                      <div class="alert alert-danger text-center">
                          {{ session('error-login') }}
                      </div>
                  @endif
                  <div class="alert alert-danger" id="error-login"></div>
                </div>
                <form class="user" method="POST" action="{{ url('user/login') }}">
                  @csrf
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="email" id="email" placeholder="Địa chỉ email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Mật khẩu">
                  </div>
                
                  <button class="btn btn-primary btn-user btn-block" id="btn-login">
                    Đăng nhập
                  </button>
                  <hr>
                  <a href="index.html" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Đăng nhập với tài khoản Google
                  </a>
                  <a href="index.html" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Đăng nhập với tài khoản Facebook
                  </a>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="forgot-password.html">Quên mật khẩu?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="{{ url('user/reg') }}">Tạo tài khoản!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
@endsection