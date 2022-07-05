    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">

        </div>
        <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
            <div class="profile-pic">
                <div class="count-indicator">

                </div>
                <div class="profile-name">
                <h5 class="mb-0 font-weight-normal"></h5>
                </div>
            </div>



        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">choose</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/redirect')}}">
            <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
            </span>
            <span class="menu-title">products</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('view_product')}}">Add products</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('show_product')}}">show product</a></li>

            </ul>
            </div>
        </li>
        <div>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('view_catagory')}}">
                    <span class="menu-icon">
                        <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Catagory</span>
                </a>
            </li>
        </div>
        <div>

            <a class="nav-link" href="{{url('view_order')}}">
                <li class="nav-item menu-items">
                    <span class="menu-icon">
                        <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">  orders</span>
                </a>
            </li>
        </div>




        </ul>
    </nav>
