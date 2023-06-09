<style>
    .sidebar .nav>li.nav-profile .cover {
        /* background: url(<?= base_url('assets/apps/background/background-sidebar.gif') ?>); */
        background: url(<?= base_url('assets/apps/background/3.jpg') ?>);
        background-repeat: no-repeat;
        background-size: cover
    }
</style>
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
                        <font style="text-transform: capitalize;"><?= $this->session->userdata('user_full_name') ?></font>
                        <small><?= $this->session->userdata('user_dept') ?></small>
                    </div>
                </a>
            </li>
        </ul>
        <ul class="nav">
            <li class="nav-header">Main</li>
            <li>
                <a href="<?= base_url('whome'); ?>" target="_blank">
                    <i class="fa-solid fa-globe icon-page-sidebar"></i>
                    <span>Website</span>
                </a>
            </li>
            <li>
                <a href="http://127.0.0.1:8080/itimo" target="_blank">
                    <i class="fa-solid fa-square-share-nodes icon-page-sidebar"></i>
                    <span>IT IMO</span>
                </a>
            </li>
            <li class="nav-header">Navigation</li>
            <li class="<?= $this->uri->segment(1) == "ltehome" ? "active" : ""; ?>">
                <a href="<?= base_url('ltehome'); ?>">
                    <i class="fa-solid fa-cubes-stacked icon-page-sidebar"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="<?= $this->uri->segment(1) == "ltesubscribe" ? "active" : ""; ?>">
                <a href="<?= base_url('ltesubscribe'); ?>">
                    <i class="fa-solid fa-cash-register icon-page-sidebar"></i>
                    <span>Order List</span>
                </a>
            </li>
            <li class="has-sub <?= $this->uri->segment(1) == "lteproduct" ? "active" : ""; ?>">
                <a href="javascript:;">
                    <b class="caret"></b>
                    <i class="fa-solid fa-folder-tree icon-page-sidebar"></i>
                    <span>Product</span>
                </a>
                <ul class="sub-menu">
                    <li class="<?= $this->uri->segment(2) == "lteporduct_post" ? "active" : ""; ?>">
                        <a href="<?= base_url('lteproduct/lteporduct_post'); ?>">
                            Post List
                        </a>
                    </li>
                    <li class="<?= $this->uri->segment(2) == "lteporduct_stock" ? "active" : ""; ?>">
                        <a href="<?= base_url('lteproduct/lteporduct_stock'); ?>">
                            Stock List
                        </a>
                    </li>
                </ul>
            </li>
            <li class="<?= $this->uri->segment(1) == "ltesubscribe" ? "active" : ""; ?>">
                <a href="<?= base_url('ltesubscribe'); ?>">
                    <i class="fa fa-comment-alt icon-page-sidebar"></i>
                    <span>Subscribe</span>
                </a>
            </li>
            <li class="nav-header">CMS Information</li>
            <li class="<?= $this->uri->segment(1) == "ltesetting" ? "active" : ""; ?>">
                <a href="<?= base_url('ltesetting'); ?>">
                    <i class="fa-solid fa-gears icon-page-sidebar"></i>
                    <span>Setting</span>
                </a>
            </li>
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
        </ul>
    </div>
</div>
<div class="sidebar-bg"></div>