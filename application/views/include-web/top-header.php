<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-7 col-lg-2">
                <div class="logo">
                    <a href="<?= base_url() . "whome"; ?>">
                        <img src="<?= base_url('assets/apps/logo/logo-white.png'); ?>" class="logo-tp" alt="Logo Header">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <nav class="mainmenu__nav">
                    <ul class="meninmenu d-flex justify-content-start">
                        <li class="drop with--one--item"><a href="<?= base_url() . "whome"; ?>">Home</a></li>
                        <li class="drop with--one--item"><a href="<?= base_url() . "wcatalog"; ?>">Catalog</a></li>
                        <li><a href="<?= base_url() . "w_tentangkami"; ?>">About US</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-8 col-sm-8 col-5 col-lg-2">
                <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                    <li class="wishlist"><a href="<?= base_url() . "w_love"; ?>"></a></li>
                    <!-- NOTIF -->
                    <!-- <li class="notif"><a class="notif_active" data-toggle="modal" title="Notifikasi" href="#notif"><span class="product_notif">10</span></a>
                    </li> -->
                    <!-- END NOTIF -->
                    <!-- KERANGJANG -->
                    <li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">0</span></a>
                        <!-- Start Shopping Cart -->
                        <div class="block-minicart minicart__active">
                            <div class="minicart-content-wrapper">
                                <div class="micart__close">
                                    <span>Tutup</span>
                                </div>
                                <div class="items-total d-flex justify-content-between">
                                    <span> items</span>
                                    <span>Total Harga</span>
                                </div>
                                <div class="total_amount text-right">
                                    <span>Jum</span>
                                </div>
                                <div class="mini_action checkout">
                                    <a class="checkout__btn" href="<?= base_url() . "w_checkout"; ?>">Beli ()</a>
                                    <br>
                                    <font>Tidak Ada Produk Yang Dipesan</font>
                                </div>
                                <div class="single__items">
                                    <div class="miniproduct">
                                        <!-- VIEW KERANJANG -->
                                        <div class="item01 d-flex">
                                            <div class="thumb">
                                                <a href="product-details.html">
                                                    <img src="" alt="product images">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h6><a href="product-details.html">Product Name</a></h6>
                                                <span class="prize">Price</span>
                                                <div class="product_prize d-flex justify-content-between">
                                                    <span class="qun">Qty: </span>
                                                    <span class="qun">Size: </span>
                                                    <ul class="d-flex justify-content-end">
                                                        <li>
                                                            <a href="" title="Hapus Item ()">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END VIEW KERANJANG -->
                                    </div>
                                </div>
                                <div class="mini_action cart">
                                    <a class="cart__btn" href="cart.html">View and edit cart</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END KERANJANG -->
                    <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                        <div class="searchbar__content setting__block">
                            <div class="content-inner">
                                <?php if ($this->session->userdata("role") == NULL) { ?>
                                    <div class="switcher-currency">
                                        <strong class="label switcher-label">
                                            <span>SIGN IN</span>
                                        </strong>
                                        <div class="switcher-options">
                                            <div class="switcher-currency-trigger">
                                                <div class="setting__menu">
                                                    <span><a data-toggle="modal" title="Sign In" href="#login">Sign In</a></span>
                                                    <!-- <span><a data-toggle="modal" title="Create An Account" href="#daftar">Create An Account</a></span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($this->session->userdata("role") == 'Member') { ?>
                                    <div class="switcher-currency">
                                        <strong class="label switcher-label">
                                            <span>My Account</span>
                                        </strong>
                                        <div class="switcher-options">
                                            <div class="switcher-currency-trigger">
                                                <div class="setting__menu">
                                                    <span><a href="#"><?= $this->session->userdata("nama_depan"); ?> <?= $this->session->userdata("nama_belakang"); ?></a></span>
                                                    <span><a href="<?= base_url() ?>whome/logout" title="Log Out">Log Out</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($this->session->userdata("role") == 'Superadmin') { ?>
                                    <div class="switcher-currency">
                                        <strong class="label switcher-label">
                                            <span>My Account</span>
                                        </strong>
                                        <div class="switcher-options">
                                            <div class="switcher-currency-trigger">
                                                <div class="setting__menu">
                                                    <span><a href="#"><?= $this->session->userdata("nama_depan"); ?> <?= $this->session->userdata("nama_belakang"); ?></a></span>
                                                    <span><a href="<?= base_url() ?>home" target="_blank" title="Home">Admin LTE</a></span>
                                                    <span><a href="<?= base_url() ?>whome/logout" title="Log Out">Log Out</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <?php if ($this->session->userdata("role") == 'Admin') { ?>
                                    <div class="switcher-currency">
                                        <strong class="label switcher-label">
                                            <span>My Account</span>
                                        </strong>
                                        <div class="switcher-options">
                                            <div class="switcher-currency-trigger">
                                                <div class="setting__menu">
                                                    <span><a href="#"><?= $this->session->userdata("nama_depan"); ?> <?= $this->session->userdata("nama_belakang"); ?></a></span>
                                                    <span><a href="<?= base_url() ?>home" target="_blank" title="Home">Admin LTE</a></span>
                                                    <span><a href="<?= base_url() ?>whome/logout" title="Log Out">Log Out</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Start Mobile Menu -->
        <div class="row d-none">
            <div class="col-lg-12 d-none">
                <nav class="mobilemenu__nav">
                    <ul class="meninmenu">
                        <li><a href="<?= base_url() . "whome"; ?>">Home</a></li>
                        <li><a href="#">Atasan</a>
                            <ul>
                                <li><a href="<?= base_url() . "w_shop/kemeja"; ?>">Kemeja</a>
                                    <ul>
                                        <li><a href="<?= base_url() . "w_shop/kemeja_pos"; ?>">Kemeja POS Giro</a></li>
                                        <li><a href="<?= base_url() . "w_shop/kemeja_bumn"; ?>">Kemeja BUMN</a></li>
                                        <li><a href="<?= base_url() . "w_shop/kemeja_kantor"; ?>">Kemeja Kantor</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url() . "w_shop/kaos"; ?>">Kaos</a></li>
                                <li><a href="<?= base_url() . "w_shop/jaket"; ?>">Jaket</a>
                                    <ul>
                                        <li><a href="<?= base_url() . "w_shop/jaket_pos"; ?>">Jaket POS</a></li>
                                        <li><a href="<?= base_url() . "w_shop/jaket_bumn"; ?>">Jaket BUMN</a></li>
                                        <li><a href="<?= base_url() . "w_shop/jaket_olahraga"; ?>">Jaket Olahraga</a></li>
                                        <li><a href="<?= base_url() . "w_shop/jaket_gunung"; ?>">Jaket Gunung</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url() . "w_shop/polo"; ?>">Polo</a>
                                    <ul>
                                        <li><a href="<?= base_url() . "w_shop/polo_pos"; ?>">Polo Shirt Wesel POS</a></li>
                                        <li><a href="<?= base_url() . "w_shop/polo_bumn"; ?>">Polo Shirt BUMN</a></li>
                                        <li><a href="<?= base_url() . "w_shop/polo_pgm"; ?>">Polo Shirt PGM</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Bawahan</a>
                            <ul>
                                <li><a href="<?= base_url() . "w_shop/celana"; ?>">Celana</a>
                                    <ul>
                                        <li><a href="<?= base_url() . "w_shop/celana_jeans"; ?>">Celana Jeans</a></li>
                                        <li><a href="<?= base_url() . "w_shop/celana_chino"; ?>">Celana Chino</a></li>
                                        <li><a href="<?= base_url() . "w_shop/celana_olahraga"; ?>">Celana Olahraga</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Aksesories</a>
                            <ul>
                                <li><a href="<?= base_url() . "w_shop/topi"; ?>">Topi</a>
                                    <ul>
                                        <li><a href="<?= base_url() . "w_shop/topi_pos"; ?>">Topi POS</a></li>
                                        <li><a href="<?= base_url() . "w_shop/topi_bumn"; ?>">Topi BUMN</a></li>
                                        <li><a href="<?= base_url() . "w_shop/topi_pgm"; ?>">Topi PGM</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url() . "w_shop/souve"; ?>">Souvenir</a>
                                    <ul>
                                        <li><a href="<?= base_url() . "w_shop/souve_tag"; ?>">Name TAG</a></li>
                                        <li><a href="<?= base_url() . "w_shop/souve_card"; ?>">ID Card</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?= base_url() . "w_tentangkami"; ?>">Tentang Kami</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Mobile Menu -->
        <div class="mobile-menu d-block d-lg-none">
        </div>
        <!-- Mobile Menu -->
        <!-- End Start Mobile Menu -->

    </div>
</header>
<div class="box-search-content search_active block-bg close__top">
    <form id="search_mini_form" class="minisearch" action="#">
        <div class="field__search">
            <input type="text" placeholder="Cari disini...">
            <div class="action">
                <a href="#"><i class="zmdi zmdi-search"></i></a>
            </div>
        </div>
    </form>
    <div class="close__wrap">
        <span>close</span>
    </div>
</div>