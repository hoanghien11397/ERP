@extends('master-layout')


@section('content')


<!-- ****lien he **** -->
<main id="lienhe">
    <section class="bg-img">
        <img src="https://www.itgvietnam.com/wp-content/uploads/2018/06/lien-he.jpg" alt="">  
    </section>

    <div class="contact_box1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <ul class="ft_ct_list_lh">
                        <li class="text-uppercase">CÔNG TY CỔ PHẦN GIẢI PHÁP ERP-ITG</li>
                        <li>Văn phòng Hà Nội:</li>
                        <li class="p_ct">Tầng 7, Tòa nhà Báo Nông thôn Ngày nay, Lô E2  Cầu Giấy, Đường Dương Đình Nghệ, Cầu Giấy, Hà Nội</li>
                    </ul>
                    <div class="g_maps">
                        <iframe width="100%" height="450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.2956510297654!2d105.78384781485552!3d21.02085309342418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab539595c3bd%3A0x39731e41b0eeb5d1!2zQ8O0bmcgdHkgQ1AgR2nhuqNpIFBow6FwIEVSUCAtIElURw!5e0!3m2!1svi!2s!4v1532686949267"></iframe>
                       
                    </div>
                </div>    
                <div class="col-md-6">
                    <h3 class="col_title">Đăng ký tư vấn Giải pháp và nhận tài liệu miễn phí</h3>
                    <form action="/action_page.php">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Họ tên">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Tên doanh nghiệp tổ chức">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Số điện thoại">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="comment" placeholder="Nội dung"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi đi</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <div class="contact_box2">
        <div class="container" style="padding: 30px 0;">
                <div class="sup_box">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="thumb_sup">
                                <img src="https://www.itgvietnam.com/wp-content/uploads/2018/06/tel.png" alt="">
                            </div>
                            <div class="ct_sup">
                                <p style=" color: #fff;font-size: 14px">Hotline tư vấn giải pháp</p>
                                <a href="tel:0986.196.838"style=" color: #fff;font-size: 14px"><p>0986.196.838</p></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb_sup">
                                <img src="https://www.itgvietnam.com/wp-content/uploads/2018/06/sp.png" alt="">
                            </div>
                            <div class="ct_sup">
                                <p style=" color: #fff;font-size: 14px">Hỗ trợ kĩ thuật</p>
                                <a href="tel:0966.966.051" style=" color: #fff;font-size: 14px"><p>0966.966.051</p></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumb_sup">
                                <img src="https://www.itgvietnam.com/wp-content/uploads/2018/06/email.png" alt="">
                            </div>
                            <div class="ct_sup">
                                <p style=" color: #fff;font-size: 14px">Gửi yêu cầu cho chúng tôi</p>
                                <a href="tel:itg@3serp.vn" style=" color: #fff;font-size: 14px"><p>itg@3serp.vn</p></a>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>    

</main>
@endsection

