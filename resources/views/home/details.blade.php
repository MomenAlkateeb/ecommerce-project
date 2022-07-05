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
   </head>
<body>


<div class='hero_area'>
    @include('home.header')


<div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto ; padding:30% width=50%"  >
    <div class="box">





       <div class="img-box" style="padding: 20px">
          <img width="250px" height="250px" src="/images/{{$details->image}}" alt="">
       </div>
       <div class="detail-box">
          <h5>product name:
             {{$details->name}}
          </h5>
          <h5> product dscription:
             {{$details->description}}
          </h5>
          <h5> product category:
            {{$details->category}}</h5>
          <h5> product price:
             ${{$details->price}}
          </h5>
          <h5> product size:
             {{$details->size}}
             <br>
             <form action="{{url('products_cart' , $details->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <input type="number" min="1"  value="1" name="number" style="width:60px; height:30px">

                    </div>

                    <div class="col-md-4" >
                        <input type="submit" value="Add to cart" style="border-radius: 25px" >

                    </div>
                </div>


             </form>
          </h5>


       </div>
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
