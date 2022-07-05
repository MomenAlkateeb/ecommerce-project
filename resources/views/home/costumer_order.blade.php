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
          .total{
            border: 3px solid rgb(255, 89, 89);
            box-shadow:  20px 20px 60px #ce4444,
             -20px -20px 60px #ff5c5c;
             width: fit-content;
             background: #f25050;
             margin-left: 580px;
             margin-top: 20px
        }
        .pag{
            margin-top: 50px
        }
      </style>

   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')

         <div>
            <table class="table">
                <tr>
                    <th>product id</th>
                    <th>time created</th>
                    <th>product_quantity</th>
                    <th>product size</th>
                    <th>product_price</th>
                    <th>Order status</th>
                    <th>product image</th>

                </tr>
                <?php $total_price = 0?>
                @foreach ($orders as $order)
                <tr>
                    <td>{{$order->product_id}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->product_quantity}}</td>
                    <td>{{$order->product_size}}</td>
                    <td>{{$order->product_price}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td><img width="100px" height="100px" src="images/{{$order->product_image}}" alt=""></td>
                </tr>
                <?php $total_price+=$order->product_price;?>
                @endforeach
            </table>
                <div  >
                    <h2 class="total"  > order cost: ${{$total_price}}</h2>
                </div>
                <div class="pag">
                    {{$orders->links()}}

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
