<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <link rel="shortcut icon" href="{{asset('images/lg_titile.jpg')}}" type="image/x-icon">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <!-- Font Family -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <!-- Style Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
    <!-- Responsive Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/responsive.css') }}">
</head>
<body>
    <!-- Page -->
    <div id="login_page" style="background-image: linear-gradient( 180deg, #565656 10%, #393939 100%)">
        <div class="container">
            <div class="login_inner" style="margin-top: 300px">               
                <!-- Form login -->
                <div class="col-xs-12 col-sm-6">
                    <div class="login_form">
                        <h2 class=" text-capitalize text-center font-weight-normal "  style="margin: 50px 0">Fandy Store</h2>
                            <form method="POST" action="{{ route('admin.login') }}">
                                @csrf                                
                                <div class="form-group">
                                    <input id="email" placeholder="Enter email" type="email" class="form_custom form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" placeholder="Password" type="password" class="form_custom form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary submit_button " style="margin: 20px 0 50px">
                                    {{ __('Login') }}
                                </button>
                            </form>
                        <div class="err-login text-center">
                            @if(Session::has('err'))
                                {{ Session::get('err') }}
                            @endif
                        </div>
                        
                    </div>
                </div>
                    <!-- Image -->
                    <div class="col-xs-12 col-sm-6">
                        <div class="gallery">
                            <img src="{{ asset('images/logo_admin.jpg') }}" alt="#">
                        </div>
                    </div>
            </div>
        </div>
    </div>
        <!-- jQuery -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Boostrap Js -->
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
    </html>