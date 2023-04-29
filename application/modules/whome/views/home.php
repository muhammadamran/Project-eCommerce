<?= $this->session->flashdata('notif_login_berhasil') ?>
<?= $this->session->flashdata('notif_login_gagal') ?>
<?= $this->session->flashdata('notif_create_account') ?>
<?= $this->session->flashdata('notif_logout') ?>
<?= $this->session->flashdata('notif_email') ?>
<?= $this->session->flashdata('notif_keranjang') ?>
<?= $this->session->flashdata('notif_hapus_keranjang') ?>
<!-- New Product -->
<style>
    .header {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= base_url('assets/apps/banner/' . $web_banner); ?>');
    }
</style>
<div style="margin-top:80px"></div>
<div class="header">
    <div class="section__title text-center">
        <h2 style="color:#fff"><?= $web_banner_title ?></h2>
    </div>
    <font style="font-size:18px"><?= $web_banner_paragraph ?></font>
</div>
<section class="wn__product__area brown--color pt--80  pb--30">
    <!-- BOX Animation -->
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <!-- End BOX Animation -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title text-center">
                    <h2 class="title__be--2">New <span class="color--theme">Product</span></h2>
                    <p>See the Latest Products</b>
                </div>
            </div>
        </div>
        <div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
            <div class="product product__style--3">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product__thumb">
                        <a class='first__img' href='#'>
                            <img src="<?= base_url('assets/website/product/2_1610441072.jpg'); ?>" alt="product image">
                        </a>
                        <a class='second__img animation1' href='#'>
                            <img src="<?= base_url('assets/website/product/cover/' . $web_cover); ?>" alt="product image">
                        </a>
                    </div>
                    <div class="product__content content--center">
                        <h4><a href="single-product.html">Product Name</a></h4>
                        <ul class="prize d-flex">
                            <li>Prices</li>
                            <li>
                                <small>
                                    <i>
                                        <font style='font-family:roboto; color:black;'> Harga Normal</font>
                                    </i>
                                </small>
                            </li>
                            <li class="old_prize">Discount</li>
                        </ul>
                        <div class="action">
                            <div class="actions_inner">
                                <ul class="add_to_links">
                                    <!-- <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li> -->
                                    <!-- <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li> -->
                                    <!-- <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li> -->
                                    <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal#"><i class="bi bi-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product__hover--content">
                            <ul class="rating d-flex">
                                <li class="on"><i class="fa fa-star-o"></i></li>
                                <li class="on"><i class="fa fa-star-o"></i></li>
                                <li class="on"><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End New Product -->

<!-- All Product -->
<section class="wn__bestseller__area bg--white pt--30  pb--80 hero">
    <!-- BOX Animation -->
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <!-- End BOX Animation -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title text-center">
                    <h2 class="title__be--2">All <span class="color--theme">Product</span></h2>
                    <p>See the Latest Products</p>
                </div>
            </div>
        </div>
        <!-- <div class="row mt--50">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="product__nav nav justify-content-center" role="tablist">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#nav-kemeja" role="tab">KEMEJA</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-kaos" role="tab">KAOS</a>
                </div>
            </div>
        </div> -->
        <div class="tab__container mt--60">
            <div class="row single__tab tab-pane fade show active" id="nav-kemeja" role="tabpanel">
                <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                    <div class="product product__style--3">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product__thumb">
                                <a class='first__img' href='#'>
                                    <img src="<?= base_url('assets/website/product/2_1610441072.jpg'); ?>" alt="product image">
                                </a>
                                <a class='second__img animation1' href='#'>
                                    <img src="<?= base_url('assets/website/product/cover/' . $web_cover); ?>" alt="product image">
                                </a>
                            </div>
                            <div class="product__content content--center">
                                <h4><a href="single-product.html">Product Name</a></h4>
                                <ul class="prize d-flex">
                                    <li>Prices</li>
                                    <li>
                                        <small>
                                            <i>
                                                <font style='font-family:roboto; color:black;'> Harga Normal</font>
                                            </i>
                                        </small>
                                    </li>
                                    <li class="old_prize">Discount</li>
                                </ul>
                                <div class="action">
                                    <div class="actions_inner">
                                        <ul class="add_to_links">
                                            <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                            <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                            <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal#>"><i class="bi bi-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__hover--content">
                                    <ul class="rating d-flex">
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li class="on"><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                        <li><i class="fa fa-star-o"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End All Product -->