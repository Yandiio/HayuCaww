<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{Config('app.name')}}</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <style>
        select:required: invalid {
            color: gray;
        }

        option[default][value=""] {
            display: none;
        }

        option {
            color: black;
        }

    </style>
    <div class="container">
        @if(Session::has('alert'))
        <div class="alert alert-success">
            {{ Session::get('alert') }}
            @php
            Session::forget('alert');
            @endphp
        </div>
        @endif
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="{{route('register')}}">
                                {{csrf_field()}}
                                <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0{{$errors->has('name') ? 'has-error' : ''}}">
                                        <input type="text" name="name" class="form-control form-control-user"
                                            value="{{old('name')}}" placeholder="Name">

                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>


                                    <div class="col-sm-6 mb-3 mb-sm-0{{$errors->has('first_name') ? 'has-error' : ''}}">
                                        <input type="text" name="first_name" class="form-control form-control-user"
                                            value="{{old('first_name')}}" placeholder="First Name">

                                        @if ($errors->has('first_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="col-sm-6{{$errors->has('last_name')}}">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            name="last_name" placeholder="Last Name" value="{{old('last_name')}}">

                                        @if ($errors->has('last_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class=" form-group {{$errors->has('email') ? 'has-error' : ''}}">
                                    <input type="email" name="email" class="form-control form-control-user"
                                        id="exampleInputEmail" value="{{old('email')}}" placeholder="Email Address">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group row ">
                                    <div class="col-sm-6 mb-3 mb-sm-0{{$errors->has('password') ? 'has-error' : ''}}">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="password" placeholder="Password" value="{{old('password')}}">
                                        @if($errors->has('password'))
                                        <span clas="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password-confirm" name="password_confirmation" placeholder="Repeat Password"
                                            required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0{{$errors->has('first_name') ? 'has-error' : ''}}">
                                        <select name="title" class="form-control" value="{{old('title')}}" required>
                                            <option value="" default selected>Title</option>
                                            <option value="Tuan">Tuan</option>
                                            <option value="Nyonya">Nyonya</option>
                                            <option value="Nona">Nona</option>
                                        </select>

                                        @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="col-sm-6{{$errors->has('phone') ? 'has-error' : ''}}">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            name="phone" placeholder="Phone" value="{{old('phone')}}">

                                        @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user" type="submit">
                                    Register!
                                </button>
                                <hr>
                                <a href="#" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="#" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{route('login')}}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
