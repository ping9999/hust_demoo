<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flickity.css" media="screen">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>

    <title>Viện công nghệ thông tin và truyền thông quốc gia - Đại học Bách Khoa Hà Nội</title>
</head>

<body>

    <!--Header Start-->
    <header>
        <div class="header-wrapper">
            <nav class="header-main navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="Images\logo.png" alt="Đại học Bách Khoa Hà Nội"></a>
                    <div class="title">
                        <p>ĐẠI HỌC BÁCH KHOA HÀ NỘI</p>
                        <p>VIỆN CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG</p>
                    </div>
                </div>
                <!-- ADD thêm button responsive vào đây -->
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Tìm kiếm..." aria-label="Search">
                    <button class="btn" type="submit"><img src="https://img.icons8.com/ios-glyphs/30/000000/search--v1.png" /></button>
                </form>
            </nav>
            <div class="topnav" id="myTopnav">
                <div class="header-bottom">
                    <div class="dropdown">
                        <button class="dropbtn">Giới thiệu</button>
                        <div class="dropdown-content">
                            <a href="#">Thông tin chung</a>
                            <a href="#">Cơ cấu tổ chức</a>
                            <a href="#">Đảng uỷ-Hội đồng Viện</a>
                            <a href="#">Ban Lãnh đạo Viện</a>
                            <a href="#">Các tổ chức đoàn thể</a>
                            <a href="#">Văn phòng Viện</a>
                            <a href="#">Danh sách cán bộ</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Bộ môn-Trung tâm </button>
                        <div class="dropdown-content">
                            <div class="row g-0">
                                <div class="col-5 m-1">
                                    <a href="#" class="bg-danger">Link 1</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
                                </div>
                                <div class="col text-light">
                                    <hr width="1" size="100">
                                </div>
                                <div class="col-6  m-1">
                                    <a href="#" class="bg-danger">Link 1</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Đào tạo</button>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Nghiên cứu</button>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Tuyển sinh</button>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Sinh viên</button>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Hợp tác Đối ngoại</button>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Cựu Sinh viên</button>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Tin tức-Sự kiện</button>
                        <div class="dropdown-content">
                            <div class="row g-0">
                                <div class="col-5 m-1">
                                    <a href="#" class="bg-danger">Link 1</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
                                </div>
                                <div class="col text-light">
                                    <hr width="1" size="100">
                                </div>
                                <div class="col-6  m-1">
                                    <a href="#" class="bg-danger">Link 1</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn">Tuyển dụng</button>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end sticky-top -->
        </div>
    </header>
    <!-- end header -->
    <!--Slideshow Start-->
    <div class="slider"   data-flickity='{ "wrapAround": true, "autoPlay": 6000}'>
        <div class="slider-cell">
            <img src="Images/images1.jpg" style="width:1400px; border-bottom: 10px #BE0F0F solid; height: 400px;" />
        </div>
        <div class="slider-cell">
            <img src="Images/images2.jpg"  style="width:1400px; border-bottom: 10px #BE0F0F solid; height: 400px;" />
        </div>
        <div class="slider-cell">
            <img src="Images/images3.jpg"  style="width:1400px; border-bottom: 10px #BE0F0F solid; height: 400px;" />
        </div>
        <div class="slider-cell">
            <img src="Images/images4.jpg"  style="width:1400px; border-bottom: 10px #BE0F0F solid; height: 400px;" />
        </div>
    </div>

    <!--Slideshow End-->
    <!--News start-->
    <div class="news">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center mt-3">TIN MỚI NHẤT</h1>
            </div>
            
            <?php 
            
                        //Ket noi CSDL
                        $link = mysqli_connect("localhost", "root", "") or die("Could not connect: " . mysqli_error());
                        //Chon CSDL de lam viec
                        $db_selected = mysqli_select_db($link, "bku");
                        $sql = "select * from post";
                        $rs = mysqli_query($link, $sql);
                        //===================================================
                      
 
                        while ($row = mysqli_fetch_array($rs)) {
                           
                         
                            
                            echo '<div class="col m-3" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                            <img class="ms-2" src="<?php echo $row[img] ?>"  alt="...">
			                    <h5 class="ms-2">' . $row['tieude'] . '</h5>
			                    <p class="mt-4 ms-2">' . $row['noidung'] . '</p>
                            </div>';
                             }
                        

                        mysqli_free_result($rs);
                        mysqli_close($link);
                        ?>
        </div>
        <div class="foot-part">
            <a href="#">
                <span>Xem thêm tin tức</span>
                <img src="https://img.icons8.com/material-outlined/16/ffffff/double-right.png" />
            </a>
        </div>
    </div>
    <!--News end-->
    <!-- Event start -->
    <div class="events">
        <div class="imagebg bg-fill bg-light" >
            <div class="bg-overlay fill">
                <div class="row">
                    <div class="col-12">
                        <h1 style="opacity: 0,1;" class="text-center mt-3">Sự kiện mới nhất</h1>
                    </div>             
            <?php 
            
            //Ket noi CSDL
            $link = mysqli_connect("localhost", "root", "") or die("Could not connect: " . mysqli_error());
            //Chon CSDL de lam viec
            $db_selected = mysqli_select_db($link, "bku");
            $sql = "select * from event";
            $rs = mysqli_query($link, $sql);
            //===================================================
            while ($row = mysqli_fetch_array($rs)) {
                echo '<div class="col m-3" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                <img class="ms-2" src="<?php echo $row[img] ?>"  alt="...">
                    <h5 class="ms-2">' . $row['tieude'] . '</h5>
                    <p class="mt-4 ms-2"> thoi gian: '  . $row['date'] . '</p>
                    <p class="mt-4 ms-2"> dia diem: ' . $row['diadiem'] . '</p>
                </div>';
                 }
            mysqli_free_result($rs);
            mysqli_close($link);
            ?>
        </div>
                </div>
            </div>
        </div>
        <div class="foot-part">
            <a href="#">
                <span>Xem thêm sự kiện</span>
                <img src="https://img.icons8.com/material-outlined/16/ffffff/double-right.png" />
            </a>
        </div>
    </div>
    <!-- Event end -->


    <!--Testimonial start-->
    <div class="testimonial">
        <div class="row">
            <div class="col-sm-12">
                <h2 style="text-align:center">NÓI VỀ SoICT</h2>
            </div>
            <div class="carousel" data-flickity='{ "fade": true, "imagesLoaded": true }'>
                <div class="col-9">
                    <div class="testimonial-body">
                        <div class="boxholder">
                            <div class="circle">
                                <img src="Images/Avlin-150x300.png" />
                            </div>
                            <div class="description text">
                                <blockquote>
                                    <p>Nếu bạn muốn được thử thách, Viện CNTT&TT – ĐHBK Hà Nội là nơi dành cho bạn. Bạn sẽ không chỉ bị thách thức bởi chương trình giảng dạy mà còn bởi tài năng của các sinh viên, môi trường học tập cởi mở và những cơ hội khám phá, trải nghiệm rộng lớn bên ngoài lớp học. Tôi sẽ luôn giới thiệu Viện CNTT&TT cho các sinh viên quốc tế, đặc biệt những người muốn trải nghiệm một môi trường học tập mới mẻ, cũng như trân trọng sự đa dạng trong văn hóa.</p>
                                </blockquote>
                                <strong>
                                    Alexandra Devlin
                                </strong>
                                <p>
                                    Sinh viên trao đổi từ Đại học Công nghệ Sydney (UTS, Úc)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-9">
                    <div class="testimonial-body">
                        <div class="boxholder">
                            <div class="circle">
                                <img src="Images/Lu-Thanh-Long-001-150x250.jpg" />
                            </div>
                            <div class="description text">
                                <blockquote>
                                    <p>Thật sự biết ơn các thế hệ thầy cô đang ngày đêm dạy dỗ để cung cấp cho xã hội các kỹ sư: Năng lực tốt – Cần mẫn làm việc – Đam mê sáng tạo, đây là những tố chất quan trọng nhất của những người muốn sáng tạo và thay đổi thế giới. Với tư cách là một cựu sinh viên, một nhà tuyển dụng, tôi luôn muốn quy tụ vào Công ty MISA các kỹ sư CNTT Bách Khoa để cùng nhau sáng tạo ra nhiều sản phẩm hữu ích góp phần vào sự phát triển của đất nước và thay đổi thế giới.</p>
                                </blockquote>
                                <strong>
                                    Ông Lữ Thành Long – Chủ tịch MISA
                                </strong>
                                <p>
                                    Cựu Sinh viên K31
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-9">
                    <div class="testimonial-body">
                        <div class="boxholder">
                            <div class="circle">
                                <img src="Images/President_Mr.jpg" />
                            </div>
                            <div class="description text">
                                <blockquote>
                                    <p>Sinh viên Viện CNTT&TT không chỉ được biết đến với nền tảng kiến thức kỹ thuật sắc bén và sự thích ứng tuyệt vời với bất kỳ nhiệm vụ nào được giao, mà còn được đánh giá cao bởi tư duy phản biện và sáng tạo. Trong SVMC, sinh viên ĐHBK Hà Nội nói chung và sinh viên Viện CNTT&TT nói riêng luôn giữ các vị trí quan trọng, và trở thành thành viên chủ chốt trong nhiều dự án cốt lõi của Trung tâm. Viện và SVMC đã củng cố mối quan hệ bền chặt, được thể hiện thông qua văn bản hợp tác chính thức, mở đường cho các hoạt động tài trợ tăng cường năng lực, cũng như học bổng cho sinh viên. Hiện tại, hơn 25% nhân viên của SVMC đã tốt nghiệp từ ĐHBK Hà Nội, trong đó có Viện CNTT&TT, và chúng tôi luôn mong muốn gia tăng số lượng này. SVMC luôn đánh giá cao hiệu quả hợp tác với Viện CNTT&TT – một đối tác chiến lược toàn diện của SVMC tại Việt Nam.</p>
                                </blockquote>
                                <strong>
                                    Ông Kim In Soo
                                </strong>
                                <p>
                                    Tổng Giám đốc Trung tâm Nghiên cứu và Phát triển Điện thoại Di động Samsung Việt Nam (SVMC)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-9">
                    <div class="testimonial-body">
                        <div class="boxholder">
                            <div class="circle">
                                <img src="Images/hung-tran-1-1-150x250.jpg" />
                            </div>
                            <div class="description text">
                                <blockquote>
                                    <p>Nếu bạn muốn có một thời sinh viên nhàn nhã thì đừng bao giờ nghĩ tới SoICT! Bạn sẽ phải học hành cực kỳ chăm chỉ, phải hy sinh nhiều sở thích cá nhân, phải thức đêm để hoàn thành các khoá học và các project từ chương trình đào tạo rất nặng. Tuy nhiên khi bạn vượt qua được chặng đường đầy gian nan này, bạn có cơ hội tham gia vào mạng lưới cựu sinh viên đã tạo ra danh tiếng cho SoICT không chỉ ở Việt nam như các giáo sư ở đại học danh tiếng Mỹ, các nhà khoa học ở NASA, các kỹ sư phần mềm ở những tập đoàn công nghệ khổng lồ, các doanh nhân ... . Đối với tôi, quyết định vào SoICT là một trong những quyết định quan trọng nhất trong sự nghiệp của mình.</p>
                                </blockquote>
                                <strong>
                                    TS. Trần Việt Hùng – Nhà sáng lập GotIT (Silicon Valley)
                                </strong>
                                <p>
                                    Cựu Sinh viên K42
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!--Testimonial end-->
    <!-- About-us start-->
    <div class="about-us">
        <div class="col-sm-12 title">
            <h2 style="text-align:center">VỀ CHÚNG TÔI</h2>
        </div>
        <div class="about-body">
            <div class="about ranking">
                <p class="name">QS ranking 2020</p>
                <p class="number">451 - 500</p>
                <p class="note">trên Thế giới trong nhóm ngành Khoa học Máy tính và Hệ thống Thông tin</p>
            </div>
            <div class="about top">
                <p class="name">Sinh viên thuộc TOP</p>
                <p class="number">1%</p>
                <p class="note">điểm cao nhất Khối A Toàn quốc mùa Tuyển sinh 2019</p>
            </div>
            <div class="about student">
                <p class="name">Sinh viên</p>
                <p class="number">4000+</p>
                <p class="note"></p>
            </div>
            <div class="about training">
                <p class="name">Chương trình đạo tạo</p>
                <p class="number">17+</p>
                <p class="note">thuộc các hệ đào tạo cử nhân, kỹ sư, thạc sỹ khoa học, tiến sỹ</p>
            </div>
            <div class="about partner">
                <p class="name">Đối tác</p>
                <p class="number">200+</p>
                <p class="note">các trường đại học, viện nghiên cứu, tập đoàn, công ty trong nước và quốc tế</p>
            </div>
        </div>
    </div>
    <!-- About-us end -->
    <!-- Video start-->
    <div class="video">
        <div class="col-sm-12 title">
            <h2 style="text-align:center">VIDEO</h2>
        </div>
        <div class="row">
            <div class="col-4">
                <iframe width="383" height="219" src="https://www.youtube.com/embed/33QNEoJ37kE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-4">
                <iframe width="383" height="219" src="https://www.youtube.com/embed/csbfk6MjBmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-4">
                <iframe width="383" height="219" src="https://www.youtube.com/embed/nNm5mOeH4pE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="foot-part">
            <a href="#">
                <span>Xem thêm video</span>
                <img src="https://img.icons8.com/material-outlined/16/ffffff/double-right.png" />
            </a>
        </div>
    </div>
    <!-- Video end-->
    
    <!-- footer  -->
    <div class="footer   bg-secondary ">
        <div class="bg-loader ">
            <div class="overlay" >
                <div class="row bg-secondary " >
                    <div class="container-fluid bottom_border">
                        <div class="row ">
                            <div class=" col-sm-4 col-md col-sm-4 col-12 col">
                                <span class="text-light border-bottom ">BỘ MÔN - TRUNG TÂM</span>
                               
                                <ul style="list-style-type: none;" >
                                    <li><a href="#" class="nav-link text-light">Bộ môn Công nghệ phần mềm</a></li>
                                    <li><a href="#" class="nav-link text-light">Bộ môn Hệ thống thông tin</a></li>
                                    <li><a href="#" class="nav-link text-light">Bộ môn Khoa học máy tính</a></li>
                                    <li><a href="#" class="nav-link text-light">Bộ môn Kỹ thuật máy tính</a></li>
                                    <li><a href="#" class="nav-link text-light">Bộ môn Truyền thông và Mạng máy tính</a></li>
                                    <li><a href="#" class="nav-link text-light">Trung tâm Máy tính</a></li>
                                    <li><a href="#" class="nav-link text-light">Trung tâm Đổi mới Sáng tạo</a></li>
                                    <li><a href="#" class="nav-link text-light">Trung tâm NAVIS</a></li>
                                    <li><a href="#" class="nav-link text-light">Trung tâm Cyber Security</a></li>
                                    <li><a href="#" class="nav-link text-light">Trung tâm Nghiên cứu Quốc tế về Trí tuệ nhân tạo</a></li>
                                </ul>


                            </div>


                            <div class=" col-sm-4 col-md  col-6 col">
                                <span class="text-light border-bottom">Chương trình đào tạo</span>
                               
                                <ul style="list-style-type: none;">
                                    <li><a href="#" class="nav-link text-light"> Chương trình Việt Nhật (HEDSPI)</a></li>
                                    <li><a href="#" class="nav-link text-light">Chương trình Global ICT</a></li>
                                    <li><a href="#" class="nav-link text-light"> Chương trình Khoa học dữ liệu và trí tuệ nhân tạo</a></li>
                                    <li><a href="#" class="nav-link text-light"> Chương trình Thạc sỹ Chuyển đổi số</a></li>
                                    <li><a href="#" class="nav-link text-light">Các chương trình đại học</a></li>
                                    <li><a href="#" class="nav-link text-light"> Các chương trình thạc sỹ</a></li>
                                    <li><a href="#" class="nav-link text-light"> Các chương trình tiến sỹ</a></li>
                                    <li><a href="#" class="nav-link text-light"> Các chương trình đào tạo ngắn hạn</a></li>
                                </ul>
                            </div>


                            <div class=" col-sm-4 col-md  col-6 col">
                                <span class="text-light border-bottom">Hệ thống và Tài nguyên</span>
                               
                                <ul style="list-style-type: none;">
                                    <li><a href="#" class="nav-link text-light">Hệ thống Quản lý Đào tạo</a></li>
                                    <li>
                                        <a href="#" class="nav-link text-light">
                                            Hệ thống Quản lý Hợp tác Doanh nghiệp
                                        </a>
                                    </li>
                                    <li><a href="#" class="nav-link text-light">Các mẫu biểu dành cho sinh viên Viện</a></li>
                                </ul>

                            </div>


                            <div class=" col-sm-4 col-md  col-12 col">
                                <div class="logo-part text-light">
                                    <img src="Images/soict-light-logo.png" class="w-50 logo-footer">

                                    <p> (+84) 24 3869 2463</p>
                                    <p> vp@soict.hust.edu.vn</p>
                                    <p> P. 505 – Nhà B1 – Đại học Bách khoa Hà nội</p>
                                    <p> Số 1 Đại Cồ Việt – Hai Bà Trưng – Hà Nội</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container border-top">

                        <p class="text-start text-light ">
                            Copyright @ |
                            Viện Công nghệ Thông tin và Truyền thông
                        </p>


                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh51eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>