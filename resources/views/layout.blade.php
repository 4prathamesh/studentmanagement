<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Required scripts for Bootstrap Dropdowns and Collapse to work -->
    <script src="https://jquery.com"></script>
    <script src="https://jsdelivr.net"></script>
    <script src="https://jsdelivr.net"></script>
    
    <title>Student Management</title>
    <style>
        .sidebar {
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        /* Sidebar links */
        .sidebar a {
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        /* Active/current link */
        .sidebar a.active {
            background-color: #04AA6D;
            color: white;
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        /* Page content */
        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        /* On screens that are less than 700px wide, make the sidebar into a topbar */
        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a {float: left;}
            div.content {margin-left: 0;}
        }

        /* On screens that are less than 400px, display the bar vertically */
        @media screen and (max-width: 400px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }   
    </style>
</head>
<body>
    <div class="container-fluid px-4"> <!-- Changed to container-fluid for better layout width -->
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
                    <a class="navbar-brand" href="{{ url('/') }}"><h1>Student Management</h1></a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAuth" aria-controls="navbarNavAuth" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAuth">
                        <ul class="navbar-nav">
                            @if (Route::has('login'))
                                @auth
                                    <!-- User is logged in: Show Name and Log Out Button -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ Auth::user()->name }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-menu-item px-3 py-1 text-secondary" href="{{ route('profile.edit') }}">Profile</a>
                                            <div class="dropdown-divider"></div>
                                            <!-- Log Out Form required by Breeze -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="dropdown-item text-danger">Log Out</button>
                                            </form>
                                        </div>
                                    </li>
                                @else
                                    <!-- User is a guest: Show Login and Register buttons -->
                                    <li class="nav-item">
                                        <a class="btn btn-outline-primary mr-2" href="{{ route('login') }}">Log in</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="sidebar">
                    <a class="active" href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/student') }}">Students</a>
                    <a href="{{ url('/teachers') }}">Teacher</a>
                    <a href="{{ url('/courses') }}">Courses</a>
                    <a href="{{ url('/batches') }}">Batches</a>
                    <a href="{{ url('/enrollments') }}">Enrollments</a>
                    <a href="{{ url('/payments') }}">Payment</a>
                    <a href="{{ url('/products') }}">Product</a>
                </div>
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
