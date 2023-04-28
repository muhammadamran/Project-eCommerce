<?php
$con = mysqli_connect("localhost", "root", "", "db_seragampos");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = mysqli_query($con, "SELECT * FROM tbl_produk WHERE id=" . $_GET['id'] . "");
$row = mysqli_fetch_assoc($query);
?>
<div class="ht__bradcaump__area" style="background-color: #868e96;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title"><?= $row['nama_produk']; ?></h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="<?= base_url() . "w_home"; ?>">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Produk</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="maincontent bg--white pt--80 pb--55">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="wn__single__product">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="wn__fotorama__wrapper">
                                <div class="fotorama wn__fotorama__action" data-nav="thumbs">
                                    <?php
                                    if (!empty($row['gambar'])) {
                                        $json = json_decode($row['gambar']);
                                        for ($i = 0; $i < count($json); $i++) {
                                    ?>
                                            <a href="#"><img src="<?= base_url() . 'assets/img/produk/' . $json[$i]; ?>" alt=""></a>
                                    <?php }
                                    } else {
                                        echo '-';
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <form action="<?= base_url('w_product/keranjang'); ?>" method="post">
                                <div class="product__info__main">
                                    <h1><?= $row['nama_produk']; ?></h1>
                                    <div class="product-reviews-summary d-flex">
                                        <ul class="rating-summary d-flex">
                                            <li><i class="zmdi zmdi-star-outline"></i></li>
                                            <li><i class="zmdi zmdi-star-outline"></i></li>
                                            <li><i class="zmdi zmdi-star-outline"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                                        </ul>
                                    </div>
                                    <div class="price-box">
                                        <span><?= buatRupiah($row['harga']); ?></span>
                                        <table border="1">
                                            <tdead>
                                                <!-- <td>No </td> -->
                                                <!-- <th>Judul buku</th> -->
                                                <th>harga</th>
                                                <th>jumlah</th>
                                                <th>Operator</th>
                                                <th>Total</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <!-- <td>1</td> -->
                                                        <!-- <td>algoritma dan pemprograman</td> -->
                                                        <td><input type="text" name="harga" id="algoritma" size="7" value="75000" readonly></td>
                                                        <td><input type="number" name="jumlah_algoritma" id="harga_algoritma" size="7" value="0" onchange="total()"></td>
                                                        <td>@</td>
                                                        <td><input type="text" name="total_jumlah" id="total" size="7" value="" readonly></td>
                                                        <!-- <input type="button" onclick="window.print()" value="cetak"> -->
                                                    </tr>
                                                </tbody>
                                        </table>
                                        <script type="text/javascript">
                                            function total() {
                                                var valgoritma = 75000 * parseInt(document.getElementById('harga_algoritma').value);
                                                var jumlah_harga = valgoritma;

                                                document.getElementById('total').value = jumlah_harga;
                                            }
                                        </script>
                                        <!-- <input type="hidden" name="harga" id="harga" value="<?= $row['harga']; ?>">
                                        <input type="hidden" name="kode_transaksi" value="<?= date('Ymd') ?>ID<?= $this->session->userdata("id_user"); ?>">
                                        <input type="hidden" name="id_user" value="<?= $this->session->userdata("id_user"); ?>">
                                        <input type="hidden" name="id_produk" value="<?= $row['id']; ?>">
                                        <input type="hidden" name="date_add" value="<?= date('Y-m-d H:m:i'); ?>">
                                        <input type="hidden" name="status" value="0"> -->
                                        <?php
                                        if ($row['diskon'] == 0) {
                                            echo "<div><small><i><font style='font-family:roboto; color:black;'> Harga Normal</font></i></small></div>";
                                        } else {
                                        ?>
                                            <div style="text-decoration: line-through;"><?= buatRupiah($row['diskon']); ?></div>
                                        <?php } ?>
                                    </div>
                                    <div class="box-tocart d-flex">
                                        <span>Qty</span>
                                        <!-- HARGA DB -->

                                        <!-- END HARGA DB -->
                                        <div class="addtocart__actions">
                                            <?php if ($this->session->userdata("role") == NULL) { ?>
                                                <a data-toggle="modal" title="Sign In" href="#login">
                                                    <button class="tocart" type="submit" title="Tambah Keranjang">
                                                        <img src="<?= base_url('mode/images/icons/shopping-cart.png') ?>"> Keranjang
                                                    </button>
                                                </a>
                                            <?php } else { ?>
                                                <button class="tocart" type="submit" title="Tambah Keranjang"><img src="<?= base_url('mode/images/icons/shopping-cart.png') ?>"> Keranjang</button>
                                            <?php } ?>
                                        </div>
                                        <div class="product-addto-links clearfix">
                                            <a class="wishlist" href="#"></a>
                                            <a class="compare" onClick="window.location.reload();"></a>
                                        </div>
                                    </div>
                                    <div class="subtotal">
                                        <!-- HARGA TOTAL JUMLAH -->
                                        <h5>Sub Total </h5>
                                        <h3>Rp. </h3>
                                        <br>
                                        <div class="review_form_field">
                                            <span><b><img src="<?= base_url('mode/images/icons/notes.png'); ?>">
                                                    <font style="font-family: 'Poppins', sans-serif; color:#003369">Catatan Jika Ada</font>
                                                </b> <small><i>(Optional)</i></small></span>
                                            <div class="input__box">
                                                <textarea name="catatan" placeholder="Contoh: Ukuran Baju M, Jumlah 10 lengan panjang 5 dst..."></textarea>
                                            </div>
                                            <!-- END HARGA TOTAL JUMLAH -->
                                        </div>
                                    </div>
                                    <div class="product_meta">
                                        <span class="posted_in">Categories:
                                            <a href="#">Adventure</a>,
                                            <a href="#">Kids' Music</a>
                                        </span>
                                    </div>
                                    <div class="product-share">
                                        <ul>
                                            <li class="categories-title">Share :</li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-twitter icons"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-tumblr icons"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-facebook icons"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-linkedin icons"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="product__info__detailed">
                    <div class="pro_details_nav nav justify-content-start" role="tablist">
                        <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Details</a>
                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab">Reviews</a>
                    </div>
                    <div class="tab__container">
                        <!-- Start Single Tab Content -->
                        <div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
                            <div class="description__attribute">
                                <?= $row['deskripsi']; ?>
                            </div>
                        </div>
                        <!-- End Single Tab Content -->
                        <!-- Start Single Tab Content -->
                        <div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
                            <div class="review__attribute">
                                <h1>Customer Reviews</h1>
                                <h2>Hastech</h2>
                                <div class="review__ratings__type d-flex">
                                    <div class="review-ratings">
                                        <div class="rating-summary d-flex">
                                            <span>Quality</span>
                                            <ul class="rating d-flex">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                        </div>

                                        <div class="rating-summary d-flex">
                                            <span>Price</span>
                                            <ul class="rating d-flex">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="rating-summary d-flex">
                                            <span>value</span>
                                            <ul class="rating d-flex">
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <p>Hastech</p>
                                        <p>Review by Hastech</p>
                                        <p>Posted on 11/6/2018</p>
                                    </div>
                                </div>
                            </div>
                            <div class="review-fieldset">
                                <h2>You're reviewing:</h2>
                                <h3>Chaz Kangeroo Hoodie</h3>
                                <div class="review-field-ratings">
                                    <div class="product-review-table">
                                        <div class="review-field-rating d-flex">
                                            <span>Quality</span>
                                            <ul class="rating d-flex">
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="review-field-rating d-flex">
                                            <span>Price</span>
                                            <ul class="rating d-flex">
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="review-field-rating d-flex">
                                            <span>Value</span>
                                            <ul class="rating d-flex">
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                                <li class="off"><i class="zmdi zmdi-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="review_form_field">
                                    <div class="input__box">
                                        <span>Nickname</span>
                                        <input id="nickname_field" type="text" name="nickname">
                                    </div>
                                    <div class="input__box">
                                        <span>Summary</span>
                                        <input id="summery_field" type="text" name="summery">
                                    </div>
                                    <div class="input__box">
                                        <span>Review</span>
                                        <textarea name="review"></textarea>
                                    </div>
                                    <div class="review-form-actions">
                                        <button>Submit Review</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Tab Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>