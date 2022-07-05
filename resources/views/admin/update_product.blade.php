
<!DOCTYPE html>
<html lang="en">
  <head>
    {{-- <base href="/public"> --}}
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
        .center{
            text-align: center;
            padding-top: 20px;
          }
          .font_size{
            font-size: 50px;
            padding-bottom: 40px;
          }
          label{
            display: inline-block;
            width: 200px;
          }
          .design{
            padding-bottom: 15px
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
                    @if(session()->has('confirm message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss= 'alert' aria-hidden ="true">x</button>
                        {{session()->get('confirm message')}}
                    </div>
                    @endif
                    <div class="center">
                        <h1 class="font_size">update product</h1>
                        <form action="{{url('confirm_update' , $update->id)}}" method="post">
                            @csrf
                            <div class="design">
                                <label for="title">product name:</label>
                                <input type="text" value="{{$update->name}}" name="product_name" id="title" autocomplete="off" required placeholder="write product name">
                            </div>
                            <div class="design">
                                <label for="description">product description:</label>
                                <input type="text" value="{{$update->description}}" name="product_description" id="description" autocomplete="off" required placeholder="write product description">
                            </div>

                            <div class="design">
                                <label for="price">product price:</label>
                                <input type="text" value="{{$update->price}}" name="product_price" id="title" autocomplete="off" required placeholder="write product price">
                            </div>

                            <div class="design">
                                <label for="size">product size:</label>
                                <input type="text" value="{{$update->size}}" name="product_size" id="size" autocomplete="off"  placeholder="write product size">
                            </div>
                            <div class="design">
                                <label class="category" for="category">product category:</label>
                                <select  required name="product_category">
                                    <option>Add a category here</option>
                                    <option>men</option>
                                    <option>women</option>
                                    <option>children</option>
                                </select>
                            </div>
                            <div class="design" >
                                <label class="image" for="image">product image:</label>
                                <img src="/images/{{$update->image}}" alt="" width="100x" height="100px">
                            </div>
                            <div class="design" >
                                <label class="image" for="image">change product image:</label>
                                <input value=""  type="file" name="product_image" id="image" >
                            </div>
                            <div class="design" >
                                <input class="btn btn-success" type="submit"  value="update product">
                            </div>
                    </form>
                        </div>
                </div>
            </div>
            @include('admin.js')


  </body>

