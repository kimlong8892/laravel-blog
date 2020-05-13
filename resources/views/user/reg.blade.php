@extends('base')
@section('head')
    <title>Đăng ký</title>
    <script>
        $(document).ready(function(){
            $("#error-reg").hide();
            $("#btn-reg").click(function(){
                let firstName = $("#firstName").val();
                let lastName = $("#lastName").val();
                let password = $("#password").val();
                let rePassword = $("#rePassword").val();
                let email = $("#email").val();
                $("#error-reg").show();
                if(firstName == "" || lastName == "" || email == "" || password == "" || rePassword == "")
                {
                  $("#error-reg").text("Vui lòng nhập đầy đủ thông tin !");
                  return false;
                }
                else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)))
                {
                  $("#error-reg").text("Nhập email sai định dạng !");
                  return false;
                }
                else if(password.length < 8)
                {
                  $("#error-reg").text("Mật khẩu phải trên 8 ký tự !");
                  return false;
                }
                else if(password != rePassword)
                {
                  $("#error-reg").text("Mật khẩu không trùng nhau !");
                  return false;
                }
                else
                {
                  $("#error-reg").text("");
                  $("#error-reg").hide();
                  return true;
                }
            });
        });
    </script>
@endsection

@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-md-12">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Đăng ký tài khoản</h1>
              @if (session('error-reg'))
                <div class="alert alert-danger">
                    {{ session('error-reg') }}
                </div>
              @endif
              <div class="alert alert-danger" id="error-reg"></div>
            </div>
            <form class="user" method="POST" action="{{ url('user/reg') }}">
              @csrf
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input class="form-control form-control-user" name="firstName" id="firstName" type="text" placeholder="Họ">
                </div>
                <div class="col-sm-6">
                  <input class="form-control form-control-user" name="lastName" id="lastName" type="text" placeholder="Tên">
                </div>
              </div>
              <div class="form-group">
                <input class="form-control form-control-user" name="email" id="email" type="text" placeholder="Địa chỉ email">
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input class="form-control form-control-user" name="password" id="password" type="password" placeholder="Mật khẩu">
                </div>
                <div class="col-sm-6">
                  <input class="form-control form-control-user" id="rePassword" type="password" placeholder="Nhập lại mật khẩu">
                </div>
              </div>
              <button class="btn btn-primary btn-user btn-block" id="btn-reg">
                Đăng ký
              </button>
              <hr>
              <a class="btn btn-google btn-user btn-block" href="index.html">
                <i class="fab fa-google fa-fw"></i> Đăng ký với tài khoản Google
              </a>
              <a class="btn btn-facebook btn-user btn-block" href="index.html">
                <i class="fab fa-facebook-f fa-fw"></i> Đăng ký với tài khoản Facebook
              </a>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="forgot-password.html">Quên mật khẩu?</a>
            </div>
            <div class="text-center">
              <a class="small" href="{{ url('user/login') }}">Bạn đã có tài khoản? hãy đăng nhập</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection