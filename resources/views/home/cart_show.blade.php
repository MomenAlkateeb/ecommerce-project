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
        .order{
            margin-left: 600px;
            margin-top: 30px;
            }
            .tables{
            margin: auto;
            width: 70%;
            border: 2px solid rgb(255, 102, 102);
            text-align: center;

        }
        .head-color{
            background-color:rgb(255, 102, 102);
            color: rgb(0, 0, 0)
        }
        .th-design{
            padding: 30px
        }
      </style>
   </head>
   <body>

    <div class="hero_area" >
        <!-- header section strats -->
        @include('home.header')

        <div>
            <table class="tables">
                <tr class="head-color">
                    <th class="th-design">product_name</th>
                    <th class="th-design">product_price</th>
                    <th class="th-design">product_size</th>
                    <th class="th-design">$product_quantity</th>
                    <th class="th-design">$product_image</th>
                    <th class="th-design">Action</th>
                </tr>
                <?php $total_price = 0?>
                @foreach($cart as $carts)
                <tr>
                    <td>{{$carts->product_name}}</td>
                    <td>{{$carts->product_price}}</td>
                    <td>{{$carts->product_size}}</td>
                    <td>{{$carts->product_quantity}}</td>
                    <td><img src="/images/{{$carts->product_image}}" alt="" width="80px" height="80px"></td>
                    <td><a href="{{url('delete_cart' , $carts->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure remove the product')">Delete</a>
                    </td>


                </tr>
                <?php $total_price+=$carts->product_price;?>

                @endforeach
            </table>
            <div >
                <h2 class="total" > Total price: ${{$total_price}}</h2>
            </div>
        </div>
        <div class="order">
            <a class="btn btn-success" href="{{url('Confirm')}}">Confirmation</a>

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
