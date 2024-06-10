<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 Custom Login and Registration - Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>

<style>
    .form-title{
        font-size: 14px;
        padding-left: 10px;
    }
    .form-control{
        font-size: 16px;
        opacity: 0.7;
    }
    .btn {
        background-color: grey;
        color: white;
        font-weight: 400;
        border: none;
    }
    .btn:hover{ 
        color: white;
        background-color: palevioletred;
        opacity: 0.5;
    }
    .login-btn{
        color: palevioletred;
    }
    .card-title{
        font-size: 25px;
        font-weight: Bold;
        text-align: center;
    }
    .brand-title{
        flex: auto;
        color: black;
        text-align: center;
        font-size: 50px;
        font-weight: bold;
        margin-top: 40px;
        margin-right: 30px;
    }
    .logo{
        height: 100px;
        width: 140px;
    }
    .not-regg{
        color: palevioletred;
    }
    .art{
        color: palevioletred;
    }
</style>

<body>

<div class="brand-title">
    <h class="title">
        <img class="logo" src="https://cdn.discordapp.com/attachments/963557193943240754/1249369315980087306/image-removebg-preview.png?ex=66670d59&is=6665bbd9&hm=55b5c46c8d927884f1777e85d0f1ffb97d4e3ff55d9748f37c247d79129aa8f8&">
        </img>
        <t class="art">Art</t>ography
    </h> 
</div>

<div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Sign in</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                <div class="form-title">EMAIL ADDRESS</div>
                            </label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">
                                <div class="form-title">PASSWORD</div>
                            </label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Psssword" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                        <div class="not-reg">
                            Still have no account? <a href="{{ route('register') }}" class="not-regg">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>