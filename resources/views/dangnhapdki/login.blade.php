<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/frontend/css/login.css">
    <title>LOGIN</title>
</head>
<body>
    {{-- <div class="model_login_main">

        <div style="color: #fff; text-align: right;" class="form-login js-form-login">
            <div class="iconclose"><i class="fa-solid fa-xmark"></i></div>
            <form class="login_container"   method="POST" action="login_submit.php">
                <header class="login-header">
                    Đăng nhập
                </header>

                <div class="login-body">
                    <div class="form_group_login">
                        <label for="name"class="login-label">
                            Username
                        </label>
                        <input type="text" id="name" class="login-input" required  name="username" placeholder="Username">
                    </div>

                    <div class="form_group_login" >
                        <label for="matkhau" class="login-label">
                            Mật khẩu
                        </label>
                        <input type="password" id="matkhau" class="login-input" required name="password" placeholder="Uassword">
                    </div>
                    <div class="form_group_text">
                        <div style="float: left; color: aliceblue;"> <input type="checkbox" name="rememberme" id="rememberme" value="Remember me"> Remember me</div>
                        <div class="text-wning"> <p ><a href="">Quên mật khẩu?</a></p></div>

                    </div>

                    <button class="login-btn" id="login-btn" name="submit_login">
                        Đăng nhập
                    </button>

                    <div class="login-footer" style="color: aliceblue;">
                            <p>To Negister New Account <i class="fa-solid fa-arrow-right-long"></i> </p>
                            <button class="btn_chuyen_register">  CLIKE HERE</button>
                    </div>
                </div>

            </form>

        </div>
    </div> --}}
    <div class="login-box">
        <h2>Login</h2>
        <form action="{{URL::to('/login/store')}}" method="POST">
          <div class="user-box">
            <input type="text" name="email" required="">
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
          </div>
            <button>Submit</button>
        @csrf
        </form>
      </div>

</body>
</html>
