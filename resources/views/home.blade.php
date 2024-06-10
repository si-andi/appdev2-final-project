<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>

    <style>
        .logout{
            color: white;
            background-color: #0e1111;
            padding: 8px 25px;
            border-radius: 50px;
            font-size: 14px;
        }
        .logo-brand{
            color: black;
            padding: 8px;
            text-decoration: none;
            font-size: 22px;
        }
        .navbar-nav{
            color: black;
            font-size: 16px;
            position: relative;
        }
        .upload-btn{
            position: fixed;
            bottom: 40px;
            right: 40px;
            padding: 15px 30px;
            background-color: palevioletred;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.4);
            font-size: 16px;
            font-weight: bold;
            z-index: 999; 
        }
        .upload-btn:hover{
            color: white;
            border: 5px palevioletred;
        }
        .uploaded-title{
            font-size: 20px;
        }
        .uploaded-photos{
            margin-top: 30px;
            margin-left: 100px;
            margin-right: 100px;
        }
        .card{
            margin-top: 20px;
        }
        .upload-title-btn{
            text-decoration: none;
            color: white;
        }
        .message{
            font-size: 16px;
            color: palevioletred;
            font-weight: 400;
        }
        .art{
            color: palevioletred;
        }
        .btn{
            margin: 5px;
            font-size: 15px;
            padding: 5px 20px;
        }
        .edit-btn{
            background-color: white;
            color: palevioletred;
            border: none;
            font-weight: bold;
        }
        .edit-btn:hover{
            background-color: palevioletred;
            color: white;
            border: none;
            font-weight: bold;
        }
        .delete-btn{
            background-color: white;
            color: palevioletred;
            border: 1px solid palevioletred;
            font-weight: bold;
        }
        .delete-btn:hover{
            background-color: white;
            color: palevioletred;
            border: 1px solid palevioletred;
            font-weight: bold;
        }
        .cancel-btn{
            background-color: white;
            color: palevioletred;
            border: 1px solid palevioletred;
            font-weight: bold;
        }
        .cancel-btn:hover{
            background-color: white;
            color: palevioletred;
            border: 1px solid palevioletred;
            font-weight: bold;
        }
    </style>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="logo-brand" href="#">
                <b><t class="art">Art</t>ography.</b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('profile.show') }}">Profile</a>
                    </li>
                </ul>
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="logout" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>
 
    <div class="container">
        <div>&nbsp;</div>
        <h1> Welcome, {{ Auth::user()->name }}</h1>
        <div class="message"> Let's start your day by looking at the beauty of art and photography.</div>
    </div>

    <div>
        <button class="upload-btn" type="button">
            <a href="{{ route('upload.create') }}" class="upload-title-btn">UPLOAD</a>
        </button>
    </div>

    <div class="uploaded-photos">
        <h1 class="uploaded-title">Photos of Today</h1>
        <div class="row">
            @if($photos->isEmpty())
                <p>No photos available.</p>
            @else
                <div class="row">
                    @foreach($photos as $photo)
                        <div class="col-md-3">
                            <div class="card position-relative">
                                <img src="{{ asset('storage/' . $photo->photo_path) }}" class="card-img-top" alt="{{ $photo->title }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $photo->title }}</h5>
                                    <p class="card-text">{{ $photo->description }}</p>
                                    <!-- Edit button (positioned at the bottom right) -->
                                    <button class="btn btn-primary edit-btn position-absolute bottom-0 end-0">Edit</button>
                                    <!-- Delete and Cancel buttons (initially hidden) -->
                                    <div class="delete-cancel-buttons position-absolute bottom-0 end-0" style="display: none;">
                                        <form action="{{ route('photo.destroy', $photo->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger delete-btn">Delete</button>
                                        </form>
                                        <button class="btn btn-secondary cancel-btn">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

</body>

<script>
    document.querySelectorAll('.edit-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            // Toggle visibility of delete and cancel buttons
            var deleteCancelButtons = this.nextElementSibling;
            deleteCancelButtons.style.display = deleteCancelButtons.style.display === 'none' ? 'block' : 'none';
        });
    });

    document.querySelectorAll('.cancel-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            // Hide delete and cancel buttons
            var deleteCancelButtons = this.parentElement;
            deleteCancelButtons.style.display = 'none';
        });
    });
</script>

</html>