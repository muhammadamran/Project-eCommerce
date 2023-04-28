<?php echo $this->session->flashdata('notif_login_berhasil')?>
<?php echo $this->session->flashdata('notif_login_gagal')?>
<?php echo $this->session->flashdata('notif_create_account')?>
<?php echo $this->session->flashdata('notif_logout')?>
<?php echo $this->session->flashdata('notif_email')?>
<div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
    <?php
    $query = $this->db->query("SELECT * FROM tbl_banner WHERE status='1'");

    foreach ($query->result_array() as $row)
    {
    ?>    
    <div class="slide animation__style10 fullscreen align__center--left" id="slide" style="background-image: url(<?= base_url().'assets/img/banner/'.$row['banner'];?>); background-repeat: no-repeat; background-position-x:center; background-position-y:91px; background-size: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider__content">
                        <div class="contentbox">
                            <!-- <h2>Seragam <span>Pos </span></h2>
                            <h2>Kini Hadir <span>Untuk Anda </span></h2>
                            <a class="shopbtn" href="#">shop now</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<hr>
<section class="wn__product__area brown--color pt--80  pb--30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title text-center">
                    <h2 class="title__be--2">Produk <span class="color--theme">Terbaru</span></h2>
                    <p>Lihat Produk Terbaru Dari <b><?php echo $data2->nama_perusahaan ?></p></b>
                </div>
            </div>
        </div>
        <!-- Start Single Tab Content -->
        <div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
            <!-- Start Single Product -->
            <?php
                $con=mysqli_connect("localhost","root","","db_seragampos");
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $result = mysqli_query($con,"SELECT * FROM tbl_produk");
                
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_array($result))
                    {
            ?>
            <div class="product product__style--3">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product__thumb">
                        <!-- <?php 
                          if (!empty($row['gambar'])) {
                            $json = json_decode($row['gambar']); 
                            for ($i=0; $i < count($json); $i++) { 
                        ?> -->
                            <!-- <link rel="shortcut icon" href="<?php echo base_url().'assets/img/produk/'.$data->logo;?>"> -->
                            <!-- <a href="assets/img/produk/<?= $json[$i] ?>" target="_blank">Attachment <?= $i+1 ?></a><br> -->
                            <!-- <a class="first__img" href="#"><img src="<?php echo base_url().'assets/img/produk/'.$json[$i];?>" alt="product image"></a> -->
                            <a class="first__img" href="#"><img src="<?php echo base_url().'assets/img/produk/cover/'.$row['cover'];?>" alt="product image"></a>
                            <a class="second__img animation1" href="#"><img src="<?php echo base_url('assets/img/produk/cover/dua.png');?>" alt="product image"></a>
                        <!-- <?php } } else { echo '-'; } ?> -->
                        <!-- <a class="first__img" href="#"><img src="<?php echo base_url('mode/images/books/1.jpg');?>" alt="product image"></a> -->
                        <!-- <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/2.jpg');?>" alt="product image"></a> -->
                        <!-- <div class="hot__box">
                            <span class="hot-label">BEST SALLER</span>
                        </div> -->
                    </div>
                    <div class="product__content content--center">
                        <h4><a href="single-product.html"><?php echo $row['nama_produk']; ?></a></h4>
                        <ul class="prize d-flex">
                            <li><?php echo buatRupiah($row['harga']); ?></li>
                            <?php 
                            if($row['diskon']==0){
                                echo "<li><small><i><font style='font-family:roboto; color:black;'> Harga Normal</font></i></small></li>";
                            }else{
                            ?>
                            <li class="old_prize"><?php echo buatRupiah($row['diskon']); ?></li>
                            <?php } ?>
                        </ul>
                        <div class="action">
                            <div class="actions_inner">
                                <ul class="add_to_links">
                                    <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                    <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                    <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                    <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal<?php echo $row['id'];?>"><i class="bi bi-search"></i></a></li>
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
            <?php } } mysqli_close($con); ?>
            <!-- Start Single Product -->
        </div>
        <!-- End Single Tab Content -->
    </div>
</section>
<hr>
<section class="wn__bestseller__area bg--white pt--80  pb--30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title text-center">
                    <h2 class="title__be--2">Semua <span class="color--theme">Produk</span></h2>
                    <p>Lihat Semua Produk Dari <b><?php echo $data2->nama_perusahaan ?></p></b>
                </div>
            </div>
        </div>
        <div class="row mt--50">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="product__nav nav justify-content-center" role="tablist">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#nav-kemeja" role="tab">KEMEJA</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-kaos" role="tab">KAOS</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-jaket" role="tab">JAKET</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-polo" role="tab">POLO</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-celana" role="tab">CELANA</a>
                    <a class="nav-item nav-link" data-toggle="tab" href="#nav-aksesories" role="tab">AKSESORIES</a>
                </div>
            </div>
        </div>
        <div class="tab__container mt--60">
            <div class="row single__tab tab-pane fade show active" id="nav-kemeja" role="tabpanel">
                <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/9.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/1.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/10.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/8.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/3.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/5.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/1.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/4.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/2.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/4.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/9.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/11.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/2.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/12.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/8.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/3.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/4.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/9.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/5.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                </div>
            </div>
            <div class="row single__tab tab-pane fade" id="nav-kaos" role="tabpanel">
                <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/8.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/2.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/12.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/11.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/1.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/5.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/11.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/4.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/10.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/3.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/1.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/9.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/4.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/7.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/3.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/4.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/4.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/10.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                </div>
            </div>
            <div class="row single__tab tab-pane fade" id="nav-jaket" role="tabpanel">
                <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/3.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/1.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/4.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/10.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/12.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/7.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/9.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/2.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/5.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/4.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/2.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/12.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/9.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/2.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/8.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/4.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/1.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/7.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                </div>
            </div>
            <div class="row single__tab tab-pane fade" id="nav-polo" role="tabpanel">
                <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/3.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/10.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/9.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/9.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/8.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/2.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/3.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/7.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/9.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/4.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/2.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/7.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/4.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/8.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/3.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/2.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                </div>
            </div>
            <div class="row single__tab tab-pane fade" id="nav-celana" role="tabpanel">
                <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/3.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/10.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/9.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/9.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/8.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/2.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/3.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/7.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/9.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/4.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/2.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/7.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/4.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/8.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/3.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/2.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                </div>
            </div>
            <div class="row single__tab tab-pane fade" id="nav-aksesories" role="tabpanel">
                <div class="product__indicator--4 arrows_style owl-carousel owl-theme">
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/3.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/10.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/9.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/9.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/8.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/2.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/3.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/7.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/9.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/4.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/2.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/7.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/4.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                    <div class="single__product">
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/8.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/3.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product product__style--3">
                                <div class="product__thumb">
                                    <a class="first__img" href="single-product.html"><img src="<?php echo base_url('mode/images/books/2.jpg');?>" alt="product image"></a>
                                    <a class="second__img animation1" href="single-product.html"><img src="<?php echo base_url('mode/images/books/6.jpg');?>" alt="product image"></a>
                                    <div class="hot__box">
                                        <span class="hot-label">BEST SALLER</span>
                                    </div>
                                </div>
                                <div class="product__content content--center">
                                    <h4><a href="single-product.html">Bowen Greenwood</a></h4>
                                    <ul class="prize d-flex">
                                        <li>$40.00</li>
                                        <li class="old_prize">$35.00</li>
                                    </ul>
                                    <div class="action">
                                        <div class="actions_inner">
                                            <ul class="add_to_links">
                                                <li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a></li>
                                                <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                                <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                                <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
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
                        <!-- Start Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>