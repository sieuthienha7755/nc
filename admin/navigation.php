  <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.php"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li <?php if( $page == 'index') echo 'class="active"'?>>
                            <a href="index.php" >
								<span class="educate-icon educate-home icon-wrap"></span>
								<span class="mini-click-non">Trang chủ</span>
							</a>
                        </li>

                        <li <?php if( $page == 'event') echo 'class="active"'?>>
                            <a href="events.html" aria-expanded="false">
                                <span class="educate-icon educate-event icon-wrap" aria-hidden="true"></span>
                                <span class="mini-click-non">Sự kiện</span>
                            </a>
                        </li>

                        <li <?php if( $page == 'teacher') echo 'class="active"'?>>
                            <a href="?p=teacher" aria-expanded="false">
                                <span class="educate-icon educate-professor icon-wrap"></span> 
                                <span class="mini-click-non">Giảng viên</span>
                            </a>
                        </li>

                        <li <?php if( $page == 'student') echo 'class="active"'?>>
                            <a href="student.php" aria-expanded="false">
                                <span class="educate-icon educate-student icon-wrap"></span>
                                <span class="mini-click-non">Sinh viên</span>
                            </a>
                        </li>

                        <li <?php if( $page == 'course') echo 'class="active"'?>>
                            <a href="course.php" aria-expanded="false">
                                <span class="educate-icon educate-course icon-wrap"></span>
                                <span class="mini-click-non">Khóa học</span>
                            </a>
                        </li>

                        <li <?php if( $page == 'class') echo 'class="active"'?>>
                            <a href="class.php" aria-expanded="false">
                                <span class="educate-icon educate-library icon-wrap"></span>
                                <span class="mini-click-non">Lớp học</span>
                            </a>
                        </li>

                        <li <?php if( $page == 'subjects') echo 'class="active"'?>>
                            <a href="subject.php" aria-expanded="false">
                                <span class="educate-icon educate-department icon-wrap"></span>
                                <span class="mini-click-non">Môn học</span>
                            </a>
                        </li>

                        <li <?php if( $page == 'att') echo 'class="active"'?>>
                            <a href="mailbox.html" aria-expanded="false">
                                <span class="educate-icon educate-apps icon-wrap"></span>
                                <span class="mini-click-non">Điểm danh</span>
                            </a>
                        </li>
                        
                        <li id="removable">
                            <a href="#" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Logout</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->