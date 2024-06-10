<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url("https://cdn.discordapp.com/attachments/963557193943240754/1249672170892955699/josh-calabrese-XXpbdU_31Sg-unsplash-removebg-preview.png?ex=66682767&is=6666d5e7&hm=e59c5363da7fcaa7d1180142294291915ebed560d0432b7cca35c327c9a48aeb&");
            background-position: right;
            background-repeat: no-repeat;
            background-size: contain;
            background-color: #f8f9fa;
            overflow: hidden;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .logo-brand {
            color: black;
            padding: 8px;
            text-decoration: none;
            font-size: 22px;
        }
        .art {
            color: palevioletred;
        }
        .nav-link {
            color: black;
            font-size: 16px;
            font-weight: 400;
        }
        .nav-item {
            font-weight: 400;
            padding: 10px 15px 10px;
        }
        .message {
            color: palevioletred;
            font-size: 22px;
        }
        .welcome-message {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            height: 100%;
            text-align: left;
            padding-left: 110px;
        }
        .welcome {
            font-size: 55px;
            font-weight: bold;
        }
        .containers {
            flex: 1;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="logo-brand" href="#">
                <b><span class="art">Art</span>ography.</b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="containers">
        <div class="welcome-message">
            <h1 class="welcome">Welcome to Artography!</h1>
            <div class="message">This is where arts meets the eye of photography for you to see its beauty.</div>
        </div>
    </div>
</body>
</html>
