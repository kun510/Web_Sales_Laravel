<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/frontend/css/main.css">
    <title>Register</title>
</head>
<body>
    <div class="form-register js-form-register">
        <form class="register__container" id="form_register" action="{{URL::to('/register/store')}}" method="post">
            <div class="register-close">
                <i class="fas fa-times"></i>
            </div>
            <header class="register-header">
                Đăng ký
            </header>

            <div class="register-body">
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="name"class="register-label">
                        Username
                    </label>
                    <input type="text" id="username" name="username"  class="register-input" required placeholder="Username">
                    <span class="form-message"></span>
                </div>

                <div class="form-group " style="margin-bottom: 20px;">
                    <label for="email" class="register-label">
                        Email
                    </label>
                    <input type="text" id="email" name="email"  class="register-input" required placeholder="Email">
                    <span class="form-message"></span>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="password" class="register-label">
                        Mật khẩu
                    </label>
                    <input type="password" name="password"  id="password"  class="register-input" required placeholder="Password">
                    <span class="form-message"></span>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="repassword" class="register-label">
                        Nhập lại mật khẩu
                    </label>
                    <input type="password"  name="repassword"  id="repassword"  class="register-input" required  placeholder="Retype Password">
                    <span class="form-message"></span>
                </div>


                <button id="register-btn" name="submit">
                    Đăng ký
                </button>
            </div>
            <div style="text-align: center;" class="register_text"> <p>Hoặc đăng ký bằng </p> </div>
                                <div class="register_icon">
                                    <a href=""><i class="fa-brands fa-facebook-square icon"  ><span> Facebook</span> </i></a>
                                    <a href=""><i class="fa-brands fa-google  icon"><span> Google</span> </i></a>
                                    <a href=""> <i class="fa-brands fa-github icon"><span> Github</span></i> </a>
                                </div>
            @csrf
        </form>
    </div>
</body>
</html>
