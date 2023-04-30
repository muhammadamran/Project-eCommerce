<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-7 col-lg-2">
                <div class="logo">
                    <a href="<?= base_url() . "whome"; ?>">
                        <img src="<?= base_url('assets/apps/logo/' . $web_logo_1); ?>" class="logo-tp" alt="Logo Header">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <nav class="mainmenu__nav">
                    <ul class="meninmenu d-flex justify-content-start">
                        <li class="drop with--one--item"><a href="<?= base_url() . "whome"; ?>">Home</a></li>
                        <li class="drop with--one--item"><a href="<?= base_url() . "wcatalog"; ?>">Catalog</a></li>
                        <li class="drop with--one--item"><a href="http://kn-idcore.ap.win.int.kn/" target="_blank">KN<font style="color:transparent">.</font>IDCore</a></li>
                        <li class="drop with--one--item"><a href="https://connections.mykn.community/" target="_blank">Connections</a></li>
                        <li class="drop with--one--item"><a href="https://learning.int.kn" target="_blank">Learning</a></li>
                        <li class="drop with--one--item"><a href="https://careerexplorer.kuehne-nagel.com" target="_blank">Career<font style="color:transparent">.</font>Explorer</a></li>
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
                                    <span>Close</span>
                                </div>
                                <div class="items-total d-flex justify-content-between">
                                    <span> Count Items</span>
                                    <span>Total Prices</span>
                                </div>
                                <div class="total_amount text-right">
                                    <span>Price Rp.</span>
                                </div>
                                <div class="mini_action checkout">
                                    <a class="checkout__btn" href="<?= base_url() . "w_checkout"; ?>">Checkout (0)</a>
                                </div>
                                <!-- if 1 = 160px; if 2 = 275px; if 3 = 325px; else = 400px; -->
                                <div class="single__items" id="for-items" style="height: 325px;">
                                    <div class="miniproduct">
                                        <!-- VIEW KERANJANG -->
                                        <!-- Sample -->
                                        <div class="item01 d-flex" style="align-items: center;border-style: solid none;border-width: 0px 0px 1px 0px;border-color: #ccc currentcolor;">
                                            <div class="thumb">
                                                <a href="product-details.html">
                                                    <img src="<?= base_url('assets/apps/background/background-sidebar.gif'); ?>" alt="product images">
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
                                        <!-- Sample -->
                                        <!-- Sample -->
                                        <div class="item01 d-flex" style="align-items: center;border-style: solid none;border-width: 0px 0px 1px 0px;border-color: #ccc currentcolor;">
                                            <div class="thumb">
                                                <a href="product-details.html">
                                                    <img src="<?= base_url('assets/apps/background/background-sidebar.gif'); ?>" alt="product images">
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
                                        <!-- Sample -->
                                        <!-- Sample -->
                                        <div class="item01 d-flex" style="align-items: center;border-style: solid none;border-width: 0px 0px 1px 0px;border-color: #ccc currentcolor;">
                                            <div class="thumb">
                                                <a href="product-details.html">
                                                    <img src="<?= base_url('assets/apps/background/background-sidebar.gif'); ?>" alt="product images">
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
                                        <!-- Sample -->
                                        <!-- END VIEW KERANJANG -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- END KERANJANG -->
                    <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                        <?php if ($this->session->userdata('user_mail') != NULL) { ?>
                            <!-- <?php
                                    $num_char = 12;
                                    $text = $this->session->userdata('user_full_name');
                                    ?>
                            <font style="color:#fff"><?= substr($text, 0, $num_char) . '...'; ?></font> -->
                        <?php } else { ?>
                        <?php } ?>
                        <div class="searchbar__content setting__block">
                            <div class="content-inner">
                                <?php if ($this->session->userdata("role") == NULL) { ?>
                                    <div class="switcher-currency">
                                        <strong class="label switcher-label">
                                            <span>SIGN IN/SIGN OUT</span>
                                            <?php if ($this->session->userdata('user_mail') != NULL) { ?>
                                                <hr>
                                                <?php
                                                $myString = $this->session->userdata('user_name');
                                                $FL    = explode('.', $myString);
                                                $F     = $FL[0];
                                                $L     = $FL[1];
                                                $showU = substr($F, 0, 1) . "" . substr($L, 0, 1);
                                                $showD = "<font style='text-transform: capitalize;'>$L</font>, <font style='text-transform: capitalize;'>$F / Kuehne + Nagel</font>";
                                                ?>
                                                <?= $showD ?>
                                            <?php } else { ?>
                                            <?php } ?>
                                        </strong>
                                        <div class="switcher-options">
                                            <div class="switcher-currency-trigger">
                                                <div class="setting__menu">
                                                    <?php if ($this->session->userdata('user_mail') != NULL) { ?>
                                                        <?php if ($this->session->userdata('user_role') == 1) { ?>
                                                            <span><a href="<?= base_url('ltehome') ?>" title="CMS System">CMS System</a></span>
                                                        <?php } else { ?>
                                                        <?php } ?>
                                                        <span><a href="<?= base_url('whome/logout') ?>" title="Sign Out">Sign Out</a></span>
                                                    <?php } else { ?>
                                                        <span><a data-toggle="modal" title="Sign In" href="#login">Sign In</a></span>
                                                    <?php } ?>
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