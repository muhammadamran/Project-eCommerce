<div id="sidebar" class="sidebar">
    <div data-scrollbar="true" data-height="100%">
        <ul class="nav">
            <li class="nav-profile">
                <a href="javascript:;" data-toggle="nav-profile">
                    <div class="cover with-shadow"></div>
                    <div class="image">
                        <img src="<?= base_url('assets/lte/apps/user/male.jpg'); ?>" alt="Profile" />
                    </div>
                    <div class="info">
                        <font style="text-transform: capitalize;">Name</font>
                        <small>Job </small>
                    </div>
                </a>
            </li>
        </ul>
        <ul class="nav">
            <li class="nav-header">Main</li>
            <li>
                <a href="" target="_blank">
                    <i class="fa-solid fa-globe icon-page-sidebar"></i>
                    <span>Website</span>
                </a>
            </li>
            <li class="nav-header">Navigation</li>
            <li class="">
                <a href="index.php">
                    <i class="fa-solid fa-cubes-stacked icon-page-sidebar"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="index.php?m=menu&s=index">
                    <i class="fa-solid fa-folder-plus icon-page-sidebar"></i>
                    <span>Menu</span>
                </a>
            </li>
            <li class="has-sub ">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa-solid fa-folder-tree icon-page-sidebar"></i>
                    <span>Content</span>
                </a>
                <ul class="sub-menu">
                    <li class="">
                        <a href="">
                            Menu
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            No data available
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-header">Point of Sale</li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa-solid fa-cash-register icon-page-sidebar"></i>
                    <span>Pos System
                        <span class="label label-theme">
                            Lock
                        </span>
                    </span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Customer Order</a></li>
                    <li><a href="#">Kitchen Order</a></li>
                    <li><a href="#">Counter Checkout</a></li>
                    <li><a href="#">Table Booking</a></li>
                    <li><a href="#">Menu Stock</a></li>
                </ul>
            </li>
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        </ul>
    </div>
</div>
<div class="sidebar-bg"></div>