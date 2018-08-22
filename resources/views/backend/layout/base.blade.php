<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>Admin - @yield('title')</title>
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
        <style>
            table th {
                text-align: center;
            }
        </style>
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
                    <a href="/">
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
                    <li>
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
        @include('backend.layout.nav')
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
