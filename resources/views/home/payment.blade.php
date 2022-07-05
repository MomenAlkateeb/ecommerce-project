<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->

      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="/images/favicon.png" type="">
      <title>product details</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />
      <style>
        body{
            background:
        }
        .pay{
            border-radius: 19px;
background: #ff7070;
box-shadow:  20px 20px 60px #d95f5f,
             -20px -20px 60px #ff8181;
            width: 480px;
            height: 450px;
            padding-top: 200px;
            padding-left: 80px;
            margin-left: 500px;



        }
        .text{
            position: absolute;
            margin-top: 160px;
            margin-left: 530px;


        }
      </style>

   </head>
   <body>
    <div class="hero_area">
       <!-- header section strats -->
       @include('home.header')
       @if(session()->has('message'))
       <div class="alert alert-success">
           <button type="button" class="close" data-dismiss= 'alert' aria-hidden ="true">x</button>
           {{session()->get('message')}}
       </div>
       @endif
       @if(session()->has('card_message'))
       <div class="alert alert-danger">
           <button type="button" class="close" data-dismiss= 'alert' aria-hidden ="true">x</button>
           {{session()->get('card_message')}}
       </div>
       @endif

       <h2 class="text"> Please choose a payment method  </h2>
       <div class="pay">




           <a href="{{url('cash_order')}}" class="btn btn-danger" class="deleviry" >Cash on Delivery</a>
           <a href="{{url('card_order')}}" class="btn btn-primary" >Pay using Card</a>
        </div>
     </div>
     <div class="cpy_">
         <p class="mx-auto">© 2022 All Rights Reserved By <a href=https://www.linkedin.com/feed target="blank">Momen Alkateeb</a><br>
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
 </html>
