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
            .pag{
                margin-top: 50px
            }

        </style>

    </head>
    <body>
        <div class="hero_area">
            <!-- header section strats -->
            @include('home.header')
            <section class="product_section layout_padding">
                <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Our <span>products</span>
                    </h2>
                    <div>
                        <form action="{{url('product_search')}}" method="get">
                            @csrf
                            <input style="width:500px" type="text" name='search' placeholder="search for something">
                            <input type="submit" value="search" class="btn btn-primary" autocomplete="off">
                        </form>
                    </div>
                </div>

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss= 'alert' aria-hidden ="true">x</button>
                    {{session()->get('message')}}
                </div>
                @endif

                <div class="row">
                    @foreach ($product as $products)


                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                            <div class="options">
                                <a class='btn btn-outline-danger' id="details" href="{{url('product_details' , $products->id)}}" class="option3">details</a>
                                <form action="{{url('products_cart' , $products->id)}}" method="post">
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
                               

                            </div>
                            </div>
                            <div class="img-box">
                            <img src="images/{{$products->image}}" alt="">
                            </div>
                            <div class="detail-box">
                            <h5>
                                {{$products->name}}
                            </h5>
                            <h6>
                                ${{$products->price}}
                            </h6>

                            </div>
                        </div>
                    </div>

                    @endforeach
                    </div>

                        <div class="pag">
                            {{$product->links()}}

                        </div>
            </section>
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

