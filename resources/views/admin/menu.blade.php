<div id="menuleft">
    <ul class="nav" id="main-menu">
        <li>
            <a href="{{URL::to('/admin/dashboard')}}"><i class="fa fa-dashboard"></i> Tổng quan</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-sitemap"></i> Quản lý menu<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{!! route('admin.menu.list') !!}">Danh sách menu</a>
                </li>
                <li>
                    <a href="{!! route('admin.menu.insert') !!}">Thêm mới menu</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-table"></i> Quản lý banner<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="{!! route('admin.banner.list') !!}">Danh sách banner</a></li>
                <li><a href="{!! route('admin.banner.add') !!}">Thêm mới banner</a></li>
            </ul>
        </li>

    <li>
        <a href="#"><i class="fa fa-qrcode"></i> Quản lý tỉnh/thành phố<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{!! route('admin.countries.list') !!}">Danh sách tỉnh/thành phố</a>
            </li>
        </ul>
    </li>
        <li>
            <a href="#"><i class="fa fa-fw fa-file"></i> Trang tĩnh<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{!! route('admin.pages.list') !!}">Danh sách trang</a>
                </li>
                <li>
                    <a href="{!! route('admin.pages.insert') !!}">Thêm mới trang</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-tasks fa-fw"></i> Quản lý tin tức<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{!! route('admin.news.list') !!}">Danh sách tin tức</a>
                </li>
                <li>
                    <a href="{!! route('admin.news.insert') !!}">Thêm tin mới</a>
                </li>
                <li>
                    <a href="{!! route('admin.catnews.list') !!}">Danh mục tin</a>
                </li>
            </ul>
        </li>
        <!--<li>
            <a href="#"><i class="fa fa-tasks fa-fw"></i> Quản lý tours<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{!! route('admin.tours.list') !!}">Danh sách tours</a>
                </li>
                <li>
                    <a href="{!! route('admin.tours.add') !!}">Thêm tours mới</a>
                </li>
                <li>
                    <a href="{!! route('admin.catalog_tours.list') !!}">Danh mục tours</a>
                </li>
                <li>
                    <a href="{!! route('admin.tours.customer.list') !!}">Khách đặt tours</a>
                </li>
            </ul>
        </li>-->
        <li>
            <a href="{{ route('admin.email.list') }}"><i class="fa fa-envelope"></i> Email nhận tin khuyến mãi </a>
        </li>
        <!--
        <li>
            <a href="{{URL::to('/admin/user')}}"><i class="fa fa-user"></i> Quản lý người dùng </a>
        </li>
        -->
        <li>
            <a href="{{URL::to('/admin/config')}}"><i class="fa fa-cog"></i> Cấu hình </a>
        </li>
    </ul>
</div>
