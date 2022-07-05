<!DOCTYPE html>
<html>
    <head>
<style>
    .logout{
        color: black
    }
</style>
    </head>
    <body>


        <header class="header_section">
        <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html"><img  width="250" src="/images/logo.png" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="{{url('/redirect')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{(url('all_products'))}}">Products</a>
                </li>
                <li class="nav-item">
                     <a href="{{url('cart_show')}}"><img width="40px" height="40px" src="/images/cart.png" alt=""></a>


                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{url('costumer_order')}}"> your order</a>
                </li>
                @if (Route::has('login'))
                @auth
                <a style="margin-top: 20px ; margin-left:40px "  class='"preview-subject mb-1"' href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                <i  class="mdi mdi-logout text-danger"></i> {{ __('Logout') }}
            </a>
            <div style="margin-left:60px ; margin-top: 20px" >
                {{ Auth::user()->name }}

            </div>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
                @else
                <li class="nav-item" >
                    <a class="btn btn-outline-primary" href="{{route('login')}}" id="logincss" >login</a>
                </li>
                <li class="btn btn-outline-primary btn-sm"  id="register_css" style="height: 40px">
                    <a class="nav-link" href="{{route('register')}}" id="registercss">register</a>
                </li>
                @endauth
                @endif
            </ul>
        </div>
    </nav>
</div>
</header>
</body>

</html>
