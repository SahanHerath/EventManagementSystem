<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Evora-Complaint</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        html, body {
        height: 100%;
        margin: 0;
        }

        .full-height {
        height: 100%;
        background-image: url('images/hero_1.jpg'); background-attachment: fixed;


        }
        
        /* Left column */
        .leftcolumn {   
        float: left;
        width: 35%;
        padding-right: 20px;
        }

        /* Right column */
        .rightcolumn {
        float: right;
        width: 35%;
        padding-left: 80px;
        }
        .card {
        background-color: rgba(255,255,255,0.85);
        padding: 20px;
        margin-top: 20px;
        }
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                Evora
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="/images/default.jpg" style="width:32px; height:32px; border-radius: 50%;" >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 full-height">
         
                <div class="row">
                    <div class="leftcolumn offset-1">
                        <div class="card">
                            <h2>Your Complaint</h2>
                                
                                    <form class="form-horizontal" method="POST" action="/newComplain">
                                        {{ csrf_field() }}

                                        <div class="form-group{{ $errors->has('user_email') ? ' has-error' : '' }}">
                                            <label for="user_email" class="col-md-4 control-label">User Email</label>

                                            <div class="col-md-6">
                                                <input id="user_email" type="email" class="form-control" name="user_email" value="{{ old('user_email') }}"  autofocus>

                                                @if ($errors->has('user_email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('user_email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        @foreach($data as $data1)
                                        <input type="hidden" id="id" name="id" value="{{$data1->id}}">
                                        @endforeach

                                        <div class="form-group{{ $errors->has('complaint_about') ? ' has-error' : '' }}">
                                            <div class="form-group">
                                                <label for="complaint_about" class="col-md-4 control-label">Complaint About</label>
                                                <div class="col-md-6">
                                                    <select id="complaint_about" class="form-control" name="complaint_about" >
                                                        <option value="" disabled selected>--Select Type--</option>
                                                        <option value="Account">Account</option>
                                                        <option value="Services">Services</option>
                                                        <option value="Charge">Charges</option>
                                                        <option value="Package">Packages</option>
                                                        <option value="Images">Images/Photos</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('complaint') ? ' has-error' : '' }}">
                                            <div class="form-group">
                                                <label for="complaint" class="col-md-4 control-label">Complaint</label>
                                                <div class="col-md-6">
                                                    <textarea name='complaint' cols='50' rows='10' id='complaint'></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Submit Complaint
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                  
                           
                        </div>
                    </div>
                    <div class="rightcolumn  offset-2">
                             <aside class="card">
                                <h4><center>Complaint</center></h4>
                                <p>You can complaint about any service provider considering any of those below reasons.</p>
                                
                                <ol>
                                <li>The details of the service providers account is fake.</li>
                                <li>The service provider does not give good service.</li>
                                <li>The details related to package are not true.</li>
                                <li>Service provider is giving images and photos that are not related to his service and events.</li>
                                <li>The service providers charging for a event is not fair.</li>
                                <li>Other complaints.</li>
                                </ol>

                                <p>We will review your complains and try to solve them.You will be informed about the prgress of your complaint review.</p>
                                <a class="offset-7"><p>Team Evora.</p></a>
                                <div class="br"></div>
                            </aside>
                    </div>
                </div>
           
        </main>

    </div>

    <footer class="footer_area p_30"  style="background-color:black;">
        <div class="container">
            <div class="row footer_inner">
                <div class="col-lg-5 col-sm-6">
                    <aside class="f_widget ab_widget">
                        <div class="f_title"><br>
                        <a href="/aboutus" ><h3>About Us</h3></a>
                        </div>
                        <p> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> Make your special day colourful<i class="icon-heart text-primary" aria-hidden="true"></i> by <a href="http://localhost:8000" target="_blank" >Evora</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </aside>
                </div>
                <div class="col-lg-2 offset-4">
                    <aside class="f_widget social_widget">
                        
                        <div class="f_title"><br>
                        <a href="/#" ><h3>Contact Us</h3></a>
                        </div>
                        
                    </aside>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>