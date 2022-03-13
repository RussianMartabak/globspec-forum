<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ZTS Forum - Sign Up</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('dashmin/lib/owlcarousel/assets/owl.carousel.min.css', true)}}" rel="stylesheet">
    <link href="{{asset('dashmin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css', true)}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('dashmin/css/bootstrap.min.css', true)}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('dashmin/css/style.css', true)}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary">ZTS Forum</h3>
                            </a>
                            <h3>Sign Up</h3>
                        </div>
                        <form action="/register" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText" name="name" placeholder="jhondoe">
                                <label for="floatingText">Username</label>
                                @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                                @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                @error('password')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" name="password_confirmation" placeholder="Password">
                                <label for="floatingPassword">Confirm Password</label>
                            </div>
                            <div class="mb-4">
                                <label for="umur">Umur</label>
                                <input type="number" name="umur" class="form-control" id="umur">
                                @error('umur')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" rows="5" class="form-control"></textarea>
                                @error('alamat')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="bio">Bio</label>
                                <textarea name="bio" id="bio" rows="5" class="form-control"></textarea>
                            </div>
                                
                            
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        </form>
                        
                        <p class="text-center mb-0">Already have an Account? <a href="">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('dashmin/lib/chart/chart.min.js', true)}}"></script>
    <script src="{{asset('dashmin/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('dashmin/lib/waypoints/waypoints.min.js', true)}}"></script>
    <script src="{{asset('dashmin/lib/owlcarousel/owl.carousel.min.js', true)}}"></script>
    <script src="{{asset('dashmin/lib/tempusdominus/js/moment.min.js', true)}}"></script>
    <script src="{{asset('dashmin/lib/tempusdominus/js/moment-timezone.min.js', true)}}"></script>
    <script src="{{asset('dashmin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js', true)}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('dashmin/js/main.js', true)}}"></script>
</body>

</html>