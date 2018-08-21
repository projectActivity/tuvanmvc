<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>SmartDMS</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <base href="{{ asset('') }}" >

        @include('backend.layout.style')

        @stack('css-stack')
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
        if (!window.jQuery) {
        document.write('<script src="/js/libs/jquery-2.1.1.min.js"><\/script>');
        }
        </script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>
        if (!window.jQuery.ui) {
        document.write('<script src="/js/libs/jquery-ui-1.10.3.min.js"><\/script>');
        }
        </script>
    </head>
    <body class="smart-style-0">
        <!-- #HEADER -->
        <header id="header">
            <input type="hidden" id="globalCoSoID" value="2">
            {{-- @if (user != null)
            {
            <input type="hidden" id="globalUserName" value="@user.TENDANGNHAP" />
            <input type="hidden" id="globalFullName" value="@user.HOTEN" />
            } --}}
            <div id="logo-group">
                <!-- PLACE YOUR LOGO HERE -->
                <span id="logo">
                    <a href="/CoCauToChucArea/CoCauToChuc/index">
                        {{-- @*<img src="/img/LogoThue.png" alt="PHẦN MỀM HỖ TRỢ NGHIỆP VỤ CHI CỤC THUẾ CẦU GIẤY" style="width:35px;height:35px;">*@ --}}
                        <img src="favicon.png" alt="Công ty TNHH Tư Vấn M&V" style="width:35px;height:35px;" />
                    </a>
                </span>
                <span class="title-site">
                    Công ty TNHH Tư Vấn M&V
                </span>
                <!-- END LOGO PLACEHOLDER -->
            </div>
            <div class="pull-right">
                <!-- Note: The activity badge color changes when clicked and resets the number to 0
                Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
                <span id="activity" class="activity-dropdown" style="line-height:60px;display:none">
                    <i class="fa fa-bell fa-2x" style="color: red"></i>
                    <b class="badge" id="totalNotificationForUser" style="position: relative;left: -7px; top: -14px;">1</b>
                </span>
                <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
                <div class="ajax-dropdown">
                    <!-- notification content -->
                    <div class="ajax-notifications custom-scroll">
                    </div>
                    <!-- end notification content -->
                    <!-- footer: refresh area -->
                    <!-- end footer -->
                </div>
                <!-- END AJAX-DROPDOWN -->
                <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5" style="padding-left: 10px !important;display:inline-block!important">
                    <li class="">
                        {{-- @if (user != null)
                        { --}}
                        <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown" aria-expanded="false">
                            {{-- @*<img src="img/avatars/sunny.png" alt="John Doe" class="online">*@ --}}
                            <img src="img/users_woman-512.png" alt="Vũ Xuân Hoàn" class="online" style="background:white;width:30px;height:30px" />
                        </a>
                        {{-- } --}}
                        <ul class="dropdown-menu pull-right">
                            
                            <li>
                                <a class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i>Toàn màn hình</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="/Account/Logout" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i><strong><u>Đ</u>ăng xuất</strong></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- end pulled right: nav area -->
        </header>
        <!-- END HEADER -->
        <!-- #NAVIGATION -->
        <!-- Left panel : Navigation area -->
        <!-- Note: This width of the aside area can be adjusted through LESS/SASS variables -->
        <aside id="left-panel" style="padding-top:49px">
            <!-- User info -->
            <div class="login-info" style=" background-color:#f8983b; border:0px 1px 0px 0px;">
                <span>
                    <a id="show-shortcut">
                        
                        <img src="img/users_woman-512.png" alt="Vũ Xuân Hoàn" class="online" style="background:white;width:24px;height:24px">
                        <span>
                            Vũ Xuân Hoàn
                        </span>
                        <i class="fa fa-angle-down"></i>
                    </a>
                </span>
            </div>
            <!-- end user info -->
            <!-- NAVIGATION : This navigation is also responsive
            To make this navigation dynamic please make sure to link the node
            (the reference to the nav > ul) after page load. Or the navigation
            will not initialize.
            -->
            <nav>
                <!--
                NOTE: Notice the gaps after each icon usage <i></i>..
                Please note that these links work a bit different than
                traditional href="" links. See documentation for details.
                -->
                <ul>
                    <li class="" id="QLDMTAG">
                        <a href="#" title="Quản lý danh mục Tag"><i class="fas fa-tag fa-lg"></i><span class="menu-item-parent">Quản lý danh mục Tag</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
                        <ul>
                            <li class="">
                                <a href="/DMTAGAREA/DMTAG/INDEX" title="Danh mục Tag">
                                    <span class="menu-item-parent">Danh mục Tag</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="" id="QLBAIVIET">
                        <a href="#" title="Quản lý bài viết"><i class="fab fa-amilia fa-lg"></i><span class="menu-item-parent">Quản lý bài viết</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
                        <ul style="display: none;">
                            <li class="">
                                <a href="/TVBAIVIETAREA/TVBAIVIET/INDEX/1" title="Quản lý bài viết">
                                    <span class="menu-item-parent">Quản lý bài viết</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/TVCHUDEAREA/TVCHUDE/INDEX" title="Quản lý chủ đề">
                                    <span class="menu-item-parent">Quản lý chủ đề</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/TVBAIVIETAREA/TVBAIVIET/INDEX/2" title="Quản lý dịch vụ">
                                    <span class="menu-item-parent">Quản lý dịch vụ</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/TVBAIVIETAREA/TVBAIVIET/INDEX/3" title="Quản lý quá trình cung cấp dịch vụ">
                                    <span class="menu-item-parent">Quản lý quá trình cung cấp dịch vụ</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/TVBAIVIETAREA/TVBAIVIET/INDEX/4" title="Quản lý giới thiệu - liên hệ">
                                    <span class="menu-item-parent">Quản lý giới thiệu - liên hệ</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="" id="QLDOITAC">
                        <a href="#" title="Quản lý đối tác"><i class="fas fa-users fa-lg"></i><span class="menu-item-parent">Quản lý đối tác</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
                        <ul>
                            <li class="">
                                <a href="/TVDOITACAREA/TVDOITAC/INDEX" title="Danh mục đối tác">
                                    <span class="menu-item-parent">Danh mục đối tác</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="" id="QLPHANHOI">
                        <a href="#" title="Quản lý phản hồi"><i class="fas fa-bullhorn fa-lg"></i><span class="menu-item-parent">Quản lý phản hồi</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
                        <ul>
                            <li class="">
                                <a href="/TVPHANHOIAREA/TVPHANHOI/INDEX" title="Danh mục phản hồi">
                                    <span class="menu-item-parent">Danh mục phản hồi</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="" id="QLSEO">
                        <a href="#" title="Quản lý SEO"><i class="fas fa-hashtag fa-lg"></i><span class="menu-item-parent">Quản lý SEO</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
                        <ul>
                            <li class="">
                                <a href="/TVSEOAREA/TVSEO/INDEX" title="Danh mục SEO">
                                    <span class="menu-item-parent">Danh mục SEO</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="" id="QLSLIDE">
                        <a href="#" title="Quản lý Slide"><i class="fas fa-images fa-lg"></i><span class="menu-item-parent">Quản lý Slide</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
                        <ul>
                            <li class="">
                                <a href="/TVSLIDEAREA/TVSLIDE/INDEX" title="Danh mục Slide">
                                    <span class="menu-item-parent">Danh mục Slide</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="" id="QLTHANHVIEN">
                        <a href="#" title="Quản lý thành viên"><i class="fas fa-user fa-lg"></i><span class="menu-item-parent">Quản lý thành viên</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
                        <ul>
                            <li class="">
                                <a href="/TVTHANHVIENAREA/TVTHANHVIEN/INDEX" title="Danh mục thành viên">
                                    <span class="menu-item-parent">Danh mục thành viên</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="" id="QLTHONGTINCHUNG">
                        <a href="#" title="Thông tin chung"><i class="fas fa-info-circle fa-lg"></i><span class="menu-item-parent">Thông tin chung</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
                        <ul>
                            <li class="">
                                <a href="/TVTHONGTINCHUNGAREA/TVTHONGTINCHUNG/INDEX" title="Danh mục thông tin chung">
                                    <span class="menu-item-parent">Danh mục thông tin chung</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="" id="TUVANONLINE">
                        <a href="#" title="Tư vấn Online"><i class="fas fa-comments fa-lg"></i><span class="menu-item-parent">Tư vấn Online</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
                        <ul>
                            <li class="">
                                <a href="/TVTUVANONLINEAREA/TVTUVANONLINE/INDEX" title="Danh mục tư vấn Online">
                                    <span class="menu-item-parent">Danh mục tư vấn Online</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="" id="VANBANPHAPLUAT">
                        <a href="#" title="Văn bản pháp luật"><i class="far fa-copy fa-lg"></i><span class="menu-item-parent">Văn bản pháp luật</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
                        <ul>
                            <li class="">
                                <a href="/TVVANBANPHAPLUATAREA/TVVANBANPHAPLUAT/INDEX" title="Danh mục văn bản pháp luật">
                                    <span class="menu-item-parent">Danh mục văn bản pháp luật</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="" id="QLDATLICHHEN">
                        <a href="#" title="Quản lý đặt lịch hẹn"><i class="far fa-calendar-alt fa-lg"></i><span class="menu-item-parent">Quản lý đặt lịch hẹn</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
                        <ul>
                            <li class="">
                                <a href="/TVDATLICHAREA/TVDATLICH/INDEX" title="Danh mục đặt lịch hẹn">
                                    <span class="menu-item-parent">Danh mục đặt lịch hẹn</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="" id="QLNguoiDung">
                        <a href="#" title="Quản lý người dùng"><i class="fas fa-user-circle fa-lg"></i><span class="menu-item-parent">Quản lý người dùng</span><b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b></a>
                        <ul>
                            <li class="">
                                <a href="/dmnguoidungarea/dmnguoidung/index" title="Xem danh sách người dùng">
                                    <span class="menu-item-parent">Xem danh sách người dùng</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </nav>
            <span class="minifyme" data-action="minifyMenu"><i class="fa fa-arrow-circle-left hit"></i></span>
        </aside>
        <!-- END NAVIGATION -->
        <!-- #MAIN PANEL -->
        <div id="main" role="main" style="margin-top:@mainStyle">
            @yield('content')
            <!-- RIBBON -->
            <!-- END #MAIN CONTENT -->
        </div>
        <!-- END #MAIN PANEL -->
        <!-- #PAGE FOOTER -->
        <div class="page-footer">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    {{-- @*<span class="txt-color-white">SmartDMS <span class="hidden-xs">- HiNet JSC - I&D Department</span> © 2017</span>*@ --}}
                    <span class="txt-color-white">SmartDMS <span class="hidden-xs">- HiNet JSC</span> © 2017</span>
                </div>
                <div class="col-xs-6 col-sm-6 text-right">
                    <div id="pnl-chat"></div>
                    <div id="pnl-notification"></div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <div class="overlay">
            <div class="overlay-text">
                <h1 class="page-title" style="color: #fff !important">
                <i class="fa-fw fa fa-spin fa-cog"></i> Đang xử lý
                </h1>
            </div>
        </div>
        
        @include('backend.layout.script')
        
        @stack('js-stack')
        
    </body>
</html>