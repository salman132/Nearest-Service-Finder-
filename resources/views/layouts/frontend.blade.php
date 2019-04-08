<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Paying Guest | Online Home Booking System</title>

    <!-- .... CSS FILE ... -->
    <link rel="stylesheet" href="{{asset('app/style.css')}}">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="{{asset('app/css/uikit.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('app/css/uikit-rtl.min.css')}}"/>
    <!-- ... font awesome ... -->
    <link rel="stylesheet" href="{{asset('app/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/fontawesome.min.css')}}">
    <!-- .... bootstrap ... -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('app//css/all.css')}}">

    <!-- ... jQeury .... -->
    <link rel="stylesheet" href="{{asset('app/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/jquery-ui.theme.min.css')}}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body>

<header class="header-area">

    <div class="menu-area col-md-12 py-3">
        <div class="row">


            <div class="logo-area col-md-4 col-12 ">
                <a href="{{route('front')}}"><img src="{{asset('app/images/logo2.png')}}" alt="logo"></a>
            </div>

            <div class="mynav col-md-8 col-12">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('front')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Become a Host</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Contact Us</a>
                    </li>
                    @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Portal</a>
                    </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                        @endif
                </ul>
            </div>


        </div>

    </div>
</header>


    @yield('content')


<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-8">
                    <p> &copy; All rights reserved by Us | 2019</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- ... JS ..... -->
<script src="{{asset('app/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('app/js/jquery-ui.min.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if(Session::has('success'))
    toastr.success('{{Session::get('success')}} ')
    @endif
</script>

<!-- ... boostrap js ... -->
<script src="{{ asset('js/app.js') }}"></script>

<!-- .... font awesome ... -->
<script src="{{asset('app/js/fontawesome.min.js')}}"></script>
<!-- UIkit JS -->
<script src="{{asset('app/js/uikit.min.js')}}"></script>
<script src="{{asset('app/js/uikit-icons.min.js')}}"></script>

<script src="{{asset('app/js/custom.js')}}"></script>
</body>

</html>