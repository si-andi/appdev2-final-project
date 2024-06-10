<!-- resources/views/profile/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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
        .art{
            color: palevioletred;
        }
        .profile-pic {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #ddd;
        }
        .profile-container {
            max-width: 600px;
            margin: auto;
            padding-top: 50px;
        }
        .btn-primary {
            background-color: palevioletred;
            border: none;
        }
        .btn-primary:hover {
            background-color: white;
            border: 1px solid palevioletred;
            color: palevioletred;
        }
        .c-info{
            font-size: 16px;
            font-weight: bold;
        }
        .c-info1{
            font-size: 24px;
            padding-left: 10px;
            color: palevioletred;
        }
        .current-info{
            margin-bottom: 30px;
            margin-top: 30px;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
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
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Profile</a>
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

    <div class="container profile-container">
        <h2>Your Profile</h2>
        <hr>
        <div class="current-info">
            <div class="mb-3">
                <h4 class="c-info">Name:</h4>
                <p id="currentName" class="c-info1">{{ Auth::user()->name }}</p>
            </div>
            <div class="mb-3">
                <h4 class="c-info">Email:</h4>
                <p class="c-info1">{{ Auth::user()->email }}</p>
            </div>
        </div> 
        <hr>    
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif 
        @csrf
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="name" value="{{ Auth::user()->name }}" required>
            </div>
            <div class="mb-3">
                <label for="currentPassword" class="form-label">Current Password</label>
                <input type="password" class="form-control" id="currentPassword" name="current_password" required>
            </div>
            <div class="mb-3">
                <label for="newPassword" class="form-label">New Password</label>
                <input type="password" class="form-control" id="newPassword" name="new_password">
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm New Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="new_password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>

    <script>
        function fetchUserData() {
            fetch("{{ route('profile.show') }}")
                .then(response => response.json())
                .then(data => {
                    document.getElementById("currentName").textContent = data.name;
                })
                .catch(error => console.error('Error fetching user data:', error));
        }

        document.getElementById("fullName").addEventListener("input", function() {
            var newName = this.value;
            document.getElementById("currentName").textContent = newName;
        });

        window.onload = fetchUserData;
    </script>
</body>
</html>