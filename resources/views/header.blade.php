

    <!-- ***** Header  Start ***** -->
    <header class="header_area clearfix">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Menu Area Start -->
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <div class="collapse navbar-collapse" id="moshnavbar">
                                <!-- Logo -->
                            <a class="navbar-brand" href=""><img src="./img/logo.JPEG" alt="logo" width="150px" height="60px"></a>
                                <ul class="navbar-nav animated" id="nav">
                                    <li class="nav-item active"><a class="nav-link" href=""><i class="fas fa-home"></i> Trang chủ</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('gioi_thieu') }}"><i class="fas fa-globe-asia"></i> Về ITG</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{ route('san_pham') }}" ><i class="far fa-question-circle"></i> Sản Phẩm</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('crm') }}">3S ERP 10i</a></li>
                                                <li><a class="dropdown-item" href="{{ route('crm') }}">3S HRM</a></li>
                                                <li><a class="dropdown-item" href="{{ route('crm') }}">3S CRM</a></li> 
                                            </ul>       
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('dich_vu') }}"><i class="fas fa-cog"></i> Dịch vụ</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{ route('tin_tuc') }}" ><i class="far fa-newspaper"></i> Tin tức</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ route('tin_tuc') }}">Tin tức sự kiện</a></li>
                                            <a class="dropdown-item" href="{{ route('tin_tuc') }}">Báo chí nói về chúng tôi</a> </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('khach_hang') }}"><i class="fas fa-users"></i> Khách hàng</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('tuyen_dung') }}"><i class="far fa-newspaper"></i> Tuyển dụng</a></li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{ route('chuyen_de') }}" ><i class="fas fa-list-ul"></i> Chuyên đề</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="">ERP</a></li>
                                            <li><a class="dropdown-item" href="">Phần mềm kế toán</a></li> 
                                            <li><a class="dropdown-item" href="">CRM</a></li>
                                            <li><a class="dropdown-item" href="">HRM</a></li>
                                            <li><a class="dropdown-item" href="">BI</a></li>
                                            <li><a class="dropdown-item" href="">SCM</a></li>
                                            <li><a class="dropdown-item" href="">Quản trị doanh nghiệp</a></li>
                                            <li><a class="dropdown-item" href="">Kế toán, kiểm toán</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('lien_he') }}"><i class="fas fa-map-marker-alt"></i> Liên hệ</a></li>
                                </ul>
                               
                                <div  style="margin-left:17px;" class="hid">
                                    <a href="#"><i class="fas fa-search"></i></a>
                                </div> 
                                <!-- Language -->
                                <div style="margin-left:43px" class="hid">
                                    <a href="#"><img src="https://www.itgvietnam.com/wp-content/plugins/qtranslate-x/flags/vn.png" alt=""></a>
                                    <a href="#"><img src="https://www.itgvietnam.com/wp-content/plugins/qtranslate-x/flags/gb.png" alt=""></a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header  End ***** -->