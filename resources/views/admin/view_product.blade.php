
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin-dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <style>
        .products{
            color: aliceblue
        }
        .center{
            text-align: center;
            font-size: 50px
        }
        .product{
            padding-top: 40px;
        }
        .tables{
            margin: auto;
            width: 70%;
            border: 2px solid rgb(255, 255, 255);
            text-align: center;

        }
        .head-color{
            background-color:rgb(255, 255, 255);
            color: rgb(0, 0, 0)
        }
        .th-design{
            padding: 30px
        }
        .pag{
            margin-top: 40px;
            color: black;

        }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
    @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('remove_message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss= 'alert' aria-hidden ="true">x</button>
                    {{session()->get('remove_message')}}
                </div>
                @endif
                <div class="center">
                    <h2>All products</h2>
                </div>
                <div class="product">

                    <table class="tables" >
                        <tr class="head-color">
                        <th class='th-design' >name</th>
                       <th class='th-design'>Description</th>
                        <th class='th-design'>category</th>
                        <th class='th-design'>Price</th>
                        <th class='th-design'> Size</th>
                        <th class='th-design'>image</th>
                        <th class='th-design'>Delete</th>
                        <th class='th-design'>update</th>
                    </tr>
                    @foreach($product as $products)
                    <tr class="products">
                        <td>{{$products->name}}</td>
                        <td>{{$products->description}}</td>
                        <td>{{$products->category}}</td>
                        <td>{{$products->price}}</td>
                        <td>{{$products->size}}</td>
                        <td><img src="/images/{{$products->image}}" alt="" width="90px" height="90px"></td>
                        <td><a class='btn btn-danger' onclick="return confirm('Are You Sure To Delete this')" href="{{url('delete_product' , $products->id)}}">delete</a></td>
                        <td><a class="btn btn-success" href="{{url('update_product' , $products->id)}}">update</a></td>
                    </tr>
                    @endforeach
                </table>
                <div class="pag">
                    {{$product->links()}}
                </div>
            </div>
         </div>
    </div>
</div>
@include('admin.js')
  </body>

