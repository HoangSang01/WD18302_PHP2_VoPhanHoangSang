<link rel="stylesheet" type="text/css" href="../resources/assets/client/styles/courses.css">
<link rel="stylesheet" type="text/css" href="../resources/assets/client/styles/courses_responsive.css">
<!-- Header -->

<header class="header">

    <!-- Header Content -->
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container mr-auto">
                            <a href="#">
                                <div class="logo"><img src="images/logo-fpt-polytechnic.png" alt=""></div>
                            </a>
                        </div>
                        <nav class="main_nav_contaner">
                            <ul class="main_nav">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="instructors.html">Instructors</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header_content_right ml-auto text-right">
                            <div class="header_search">
                                <div class="search_form_container">
                                    <form action="#" id="search_form" class="search_form trans_400">
                                        <input type="search" class="header_search_input trans_400" placeholder="Type for Search" required="required">
                                        <div class="search_button">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Hamburger -->

                            <div class="user"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                            </div>
                            <div class="hamburger menu_mm">
                                <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumbs_list d-flex flex-row align-items-center justify-content-start">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="courses.html">Môn học</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Filter-->
<!-- Bộ lọc môn học -->
<div class="filter" style="background-color: #f8f8f8; padding: 20px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="semester" style="color: #a5a5a5;">Kỳ học:</label>
                    <select class="form-control" id="semester" style="color: #a5a5a5;">
                        <option value="">Tất cả</option>
                        <option value="1">Kỳ 1</option>
                        <option value="2">Kỳ 2</option>
                        <option value="3">Kỳ hè</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="teacher" style="color: #a5a5a5;">Giáo viên:</label>
                    <select class="form-control" id="teacher" style="color: #a5a5a5;">
                        <option value="">Tất cả</option>
                        <option value="1">Nguyễn Thị A</option>
                        <option value="2">Trần Văn B</option>
                        <option value="3">Lê Thị C</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="major" style="color: #a5a5a5;">Ngành học:</label>
                    <select class="form-control" id="major" style="color: #a5a5a5;">
                        <option value="">Tất cả</option>
                        <option value="1">Công nghệ thông tin</option>
                        <option value="2">Kinh tế</option>
                        <option value="3">Ngôn ngữ Anh</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <button type="submit" class="btn btn-light mt-2" style="color: #ffff; background-color: #2e21df;">Lọc</button>
                <button type="reset" class="btn btn-light mt-2" style=" color: #ffff; background-color: #a5a5a5;">Đặt lại</button>
            </div>
        </div>
    </div>
</div>

<!-- Courses -->

<div class="courses">
    <div class="container">
        <div class="row courses_row">

            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="../resources/assets/client/images/course_4.jpg" alt=""></div>
                    <div class="course_body">
                        <div class="course_title"><a href="course.html">Lập trình Web</a></div>
                        <div class="course_info">
                            <ul>
                                <li><a href="instructors.html">Trần Văn B</a></li>
                                <li><a href="#">Tiếng Tây Ban Nha</a></li>
                            </ul>
                        </div>
                        <div class="course_text">
                            <p>"Môn học rất thú vị và mang tính ứng dụng cao. Mặc dù khá hóc búa nhưng giảng
                                viên đã hỗ trợ rất tốt. Tôi đã học được nhiều kiến thức mới."</p>
                        </div>
                    </div>
                    <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                        <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                        <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                        <div class="course_mark course_free trans_200"><a href="#">Đánh giá</a></div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="../resources/assets/client/images/course_5.jpg" alt=""></div>
                    <div class="course_body">
                        <div class="course_title"><a href="course.html">Lập trình Web</a></div>
                        <div class="course_info">
                            <ul>
                                <li><a href="instructors.html">Trần Văn B</a></li>
                                <li><a href="#">Tiếng Tây Ban Nha</a></li>
                            </ul>
                        </div>
                        <div class="course_text">
                            <p>"Môn học rất thú vị và mang tính ứng dụng cao. Mặc dù khá hóc búa nhưng giảng
                                viên đã hỗ trợ rất tốt. Tôi đã học được nhiều kiến thức mới."</p>
                        </div>
                    </div>
                    <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                        <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                        <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                        <div class="course_mark course_free trans_200"><a href="#">Đánh giá</a></div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="../resources/assets/client/images/course_6.jpg" alt=""></div>
                    <div class="course_body">
                        <div class="course_title"><a href="course.html">Lập trình Web</a></div>
                        <div class="course_info">
                            <ul>
                                <li><a href="instructors.html">Trần Văn B</a></li>
                                <li><a href="#">Tiếng Tây Ban Nha</a></li>
                            </ul>
                        </div>
                        <div class="course_text">
                            <p>"Môn học rất thú vị và mang tính ứng dụng cao. Mặc dù khá hóc búa nhưng giảng
                                viên đã hỗ trợ rất tốt. Tôi đã học được nhiều kiến thức mới."</p>
                        </div>
                    </div>
                    <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                        <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                        <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                        <div class="course_mark course_free trans_200"><a href="#">Đánh giá</a></div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="../resources/assets/client/images/course_7.jpg" alt=""></div>
                    <div class="course_body">
                        <div class="course_title"><a href="course.html">Lập trình Web</a></div>
                        <div class="course_info">
                            <ul>
                                <li><a href="instructors.html">Trần Văn B</a></li>
                                <li><a href="#">Tiếng Tây Ban Nha</a></li>
                            </ul>
                        </div>
                        <div class="course_text">
                            <p>"Môn học rất thú vị và mang tính ứng dụng cao. Mặc dù khá hóc búa nhưng giảng
                                viên đã hỗ trợ rất tốt. Tôi đã học được nhiều kiến thức mới."</p>
                        </div>
                    </div>
                    <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                        <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                        <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                        <div class="course_mark course_free trans_200"><a href="#">Đánh giá</a></div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="../resources/assets/client/images/course_8.jpg" alt=""></div>
                    <div class="course_body">
                        <div class="course_title"><a href="course.html">Lập trình Web</a></div>
                        <div class="course_info">
                            <ul>
                                <li><a href="instructors.html">Trần Văn B</a></li>
                                <li><a href="#">Tiếng Tây Ban Nha</a></li>
                            </ul>
                        </div>
                        <div class="course_text">
                            <p>"Môn học rất thú vị và mang tính ứng dụng cao. Mặc dù khá hóc búa nhưng giảng
                                viên đã hỗ trợ rất tốt. Tôi đã học được nhiều kiến thức mới."</p>
                        </div>
                    </div>
                    <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                        <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                        <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                        <div class="course_mark course_free trans_200"><a href="#">Đánh giá</a></div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="../resources/assets/client/images/course_9.jpg" alt=""></div>
                    <div class="course_body">
                        <div class="course_title"><a href="course.html">Lập trình Web</a></div>
                        <div class="course_info">
                            <ul>
                                <li><a href="instructors.html">Trần Văn B</a></li>
                                <li><a href="#">Tiếng Tây Ban Nha</a></li>
                            </ul>
                        </div>
                        <div class="course_text">
                            <p>"Môn học rất thú vị và mang tính ứng dụng cao. Mặc dù khá hóc búa nhưng giảng
                                viên đã hỗ trợ rất tốt. Tôi đã học được nhiều kiến thức mới."</p>
                        </div>
                    </div>
                    <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                        <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                        <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                        <div class="course_mark course_free trans_200"><a href="#">Đánh giá</a></div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="../resources/assets/client/images/course_10.jpg" alt=""></div>
                    <div class="course_body">
                        <div class="course_title"><a href="course.html">Lập trình Web</a></div>
                        <div class="course_info">
                            <ul>
                                <li><a href="instructors.html">Trần Văn B</a></li>
                                <li><a href="#">Tiếng Tây Ban Nha</a></li>
                            </ul>
                        </div>
                        <div class="course_text">
                            <p>"Môn học rất thú vị và mang tính ứng dụng cao. Mặc dù khá hóc búa nhưng giảng
                                viên đã hỗ trợ rất tốt. Tôi đã học được nhiều kiến thức mới."</p>
                        </div>
                    </div>
                    <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                        <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                        <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                        <div class="course_mark course_free trans_200"><a href="#">Đánh giá</a></div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="../resources/assets/client/images/course_11.jpg" alt=""></div>
                    <div class="course_body">
                        <div class="course_title"><a href="course.html">Lập trình Web</a></div>
                        <div class="course_info">
                            <ul>
                                <li><a href="instructors.html">Trần Văn B</a></li>
                                <li><a href="#">Tiếng Tây Ban Nha</a></li>
                            </ul>
                        </div>
                        <div class="course_text">
                            <p>"Môn học rất thú vị và mang tính ứng dụng cao. Mặc dù khá hóc búa nhưng giảng
                                viên đã hỗ trợ rất tốt. Tôi đã học được nhiều kiến thức mới."</p>
                        </div>
                    </div>
                    <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                        <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                        <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                        <div class="course_mark course_free trans_200"><a href="#">Đánh giá</a></div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="../resources/assets/client/images/course_12.jpg" alt=""></div>
                    <div class="course_body">
                        <div class="course_title"><a href="course.html">Lập trình Web</a></div>
                        <div class="course_info">
                            <ul>
                                <li><a href="instructors.html">Trần Văn B</a></li>
                                <li><a href="#">Tiếng Tây Ban Nha</a></li>
                            </ul>
                        </div>
                        <div class="course_text">
                            <p>"Môn học rất thú vị và mang tính ứng dụng cao. Mặc dù khá hóc búa nhưng giảng
                                viên đã hỗ trợ rất tốt. Tôi đã học được nhiều kiến thức mới."</p>
                        </div>
                    </div>
                    <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                        <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                        <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                        <div class="course_mark course_free trans_200"><a href="#">Đánh giá</a></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col">
                <div class="load_more_button"><a href="#">Xem Thêm</a></div>
            </div>
        </div>
    </div>
</div>