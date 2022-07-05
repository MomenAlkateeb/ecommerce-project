
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin-dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">

    <link rel="stylesheet" href="admin/assets/css/style.css">

    <style>
        .catagory_center{
            text-align: center;
            padding-top: 40px;
        }
        .action{
            border: 3px solid rgb(255 255 255);
            margin: auto;
            text-align: center;
            width: 50%;
            margin-top: 30px
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
                @if(session()->has('add_message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss= 'alert' aria-hidden ="true">x</button>
                    {{session()->get('add_message')}}
                </div>
                @endif
                 @if(session()->has('delete_message'))
                 <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('delete_message')}}
                 </div>
                 @endif

                <div class="catagory_center">
                    <h2>Add Category</h2>

                    <form action="{{url('/add_catagory')}}" method="Post">
                        @csrf
                        <input type="text" name="cata_name" placeholder="write catagory name" id="cat_name">
                        <input type="submit" class="btn btn-outline-success" name="submit" value="Add catagory">
                    </form>
                </div>
                <br><br>
                <table class="table" style="color: aliceblue">
                    <tr>
                        <td>category name</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($data as $show)
                    <tr>
                        <td>{{$show->catagories_name}}</td>
                        <td><a onclick="return confirm('Are You Sure To Delete')" class="btn btn-danger" href="{{url('remove_category', $show->id)}}">Delete</a></td>
                    </tr>
                    @endforeach
                </table>

        </div>

   @include('admin.js')
  </body>
</html>

