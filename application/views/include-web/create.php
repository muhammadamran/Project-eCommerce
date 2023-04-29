<!-- CREATE -->
<div class="modal fade" id="daftar" tabindex="-1" role="dialog">
    <div class="modal-dialog modal__container_sign" role="document">
        <div class="modal-content">
            <div class="modal-header modal__header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="modal-product">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="contact-form-wrap">
                                    <h2 class="contact__title">Create An Account</h2>
                                    <p>Silahkan Create An Account anda disini dan akan aktif sebagai member untuk melakukan pemesanan. </p>
                                    <form action="<?= base_url('whome/create_account'); ?>" method="post">
                                        <div class="single-contact-form space-between">
                                            <input type="text" name="nama_depan" placeholder="Nama Depan*">
                                            <input type="text" name="nama_belakang" placeholder="Nama Belakang*">
                                        </div>
                                        <div class="single-contact-form space-between">
                                            <input type="email" name="email" placeholder="Email*">
                                            <input type="text" name="no_hp" placeholder="No. Handphone*">
                                        </div>
                                        <div class="single-contact-form space-between">
                                            <input type="password" name="password" id="password" data-toggle="password" placeholder="Password*">
                                            <input type="password" name="password" id="konfirmasi_password" placeholder="Konfirmasi Password*">
                                            <input type="hidden" name="role" value="Member">
                                            <input type="hidden" name="status" value="1">
                                            <input type="hidden" name="created_at" value="<?= date('Y-m-d h:m:i') ?>">
                                        </div>
                                        <div class="contact-btn">
                                            <p>Silahkan <font style="color:#ce7852"><a data-toggle="modal" title="Create An Account" href="#daftar"><b>SIGN IN</b></a></font> Jika Sudah Memiliki Akun</p>
                                            <button type="submit">Create An Account</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="form-output">
                                    <p class="form-messege">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal__container" role="document">
        <div class="modal-content">
            <div class="modal-header modal__header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="modal-product">
                    <div class="product__thumb">
                        <a class="first__img" href="#"><img src="<?= base_url('assets/website/produk/2_1610441072.jpg'); ?>" alt="product image"></a>
                        <a class="second__img animation1" href="#"><img src="<?= base_url('assets/website/produk/cover/dua.png'); ?>" alt="product image"></a>
                    </div>
                    <div class="product-images">
                        <div class="main-image images">
                            <img alt="big images" src="<?= base_url('assets/website/images/product/big-img/1.jpg'); ?>">
                        </div>
                    </div>
                    <div class="product-info">
                        <h1><?= $row['nama_produk']; ?></h1>
                        <div class="price-box-3">
                            <div class="s-price-box">
                                <span class="new-price"></span>
                            </div>
                        </div>
                        <div class="quick-desc">
                            <hr>
                            <?= $row['deskripsi']; ?>
                        </div>
                        <div class="select__color">
                            <h2>Select color</h2>
                            <ul class="color__list">
                                <li class="red"><a title="Red" href="#">Red</a></li>
                                <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                <li class="orange"><a title="Orange" href="#">Orange</a></li>
                            </ul>
                        </div>
                        <div class="select__size">
                            <h2>Select size</h2>
                            <ul class="color__list">
                                <li class="l__size"><a title="L" href="#">L</a></li>
                                <li class="m__size"><a title="M" href="#">M</a></li>
                                <li class="s__size"><a title="S" href="#">S</a></li>
                                <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                            </ul>
                        </div>
                        <div class="social-sharing">
                            <div class="widget widget_socialsharing_widget">
                                <h3 class="widget-title-modal">Share this product</h3>
                                <ul class="social__net social__net--2 d-flex justify-content-start">
                                    <li class="facebook"><a href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                    <li class="linkedin"><a href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                    <li class="pinterest"><a href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                    <li class="tumblr"><a href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="addtocart-btn">
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CREATE -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
    window.onload = function() {
        document.getElementById("password").onchange = validatePassword;
        document.getElementById("konfirmasi_password").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("konfirmasi_password").value;
        var pass1 = document.getElementById("password").value;
        console.log(pass2);
        console.log(pass1);
        console.log(pass1 != pass2);

        if (pass1.length >= 6)
            document.getElementById("password").setCustomValidity('');
        else
            document.getElementById("password").setCustomValidity("Password Kurang dari 6 character");


        if (pass1 != pass2)
            document.getElementById("konfirmasi_password").setCustomValidity("Password Tidak Sama, Coba Lagi");
        else
            document.getElementById("konfirmasi_password").setCustomValidity('');
    }
</script>