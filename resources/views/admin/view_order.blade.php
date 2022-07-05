!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin-dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <style>
        .font{
            text-align: center;
            padding-bottom: 40px
        }
        .info{
            color: rgb(255 255 255)
        }
        .tables{
            margin: auto;
            width: 80%;
            border: 2px solid rgb(255, 255, 255);
            text-align: center;
        }
        .head{
            background-color: rgb(255, 255, 255);

        }
        .info_head{
            color: rgb(0 0 0)
        }
        .total{
            border: 3px solid skyblue;
            box-shadow:    1px #90f8ff,
             -20px -20px 60px #90f8ff;
             width: fit-content;
             background: #90f8ff;
             margin-left: 450px;
             margin-top: 20px;
             color: black
        }

        .pagn{
            margin-top: 50px
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
            @if(session()->has('update_message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss= 'alert' aria-hidden ="true">x</button>
                {{session()->get('update_message')}}
            </div>
            @endif
            @if(session()->has('delete_message'))
            <div class="alert alert-success">
                <button type="button"  class="close" data-dismiss= 'alert' aria-hidden ="true">x</button>
                {{session()->get('delete_message')}}
            </div>
            @endif
            <h1 class="font">All orders</h1>


            <table class="tables">
                <tr class="head">
                    <th class="info_head">user id</th>
                    <th class="info_head">user name</th>
                    <th class="info_head">product_id</th>
                    <th class="info_head">product name</th>
                    <th class="info_head">product price</th>
                    <th class="info_head">product quantity</th>
                    <th class="info_head">order cost</th>
                    <th class="info_head">pyament status</th>
                    <th class="info_head"> created at</th>
                    <th class="info_head">Action</th>

                </tr>
                <?php $total_cost =0?>
                @foreach($orders as $order)
                <tr >
                    <td class="info">{{$order->user_id}}</td>
                    <td class="info">{{$order->user_name}}</td>
                    <td class="info">{{$order->product_id}}</td>
                    <td class="info">{{$order->product_name}}</td>
                    <td class="info">{{$order->product_price}}</td>
                    <td class="info">{{$order->product_quantity}}</td>
                    <td class="info">{{$order->product_price }}</td>
                    <td class="info">{{$order->delivery_status}}</td>
                    <td class="info">{{$order->created_at}}</td>
                    <td>
                    <ul>
                    <li><a href="{{url('update_01',$order->id)}}">proccessing</a></li>
                    <li><a href="{{url('update_02',$order->id)}}">charged</a></li>
                    <li><a href="{{url('update_03',$order->id)}}">delivered</a></li>
                    <li><a href="{{url('update_04',$order->id)}}">received</a></li>
                    <li><a onclick="return confirm('Are You Sure To Delete this')" href="{{url('update_05',$order->id)}}">delete order</a></li>
                 </ul>
            </td>



                </tr>
                <?php $total_cost+=$order->product_price?>
                @endforeach
            </table>
            <div class="total">
               Total cost: {{$total_cost}}
            </div>
            <div class="pagn">
                {{$orders->links()}}
            </div>

    </div>
  </div>

@include('admin.js')
</body>
