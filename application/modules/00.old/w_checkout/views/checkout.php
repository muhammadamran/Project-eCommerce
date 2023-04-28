<div class="ht__bradcaump__area" style="background-color: #868e96;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Checkout</h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="<?= base_url()."w_home"; ?>">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Checkout</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="wn__checkout__area section-padding--lg bg__white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wn_checkout_wrap">
                    <!-- <div class="checkout_info">
                        <span>Returning customer ?</span>
                        <a class="showlogin" href="#">Click here to login</a>
                    </div> -->
                    <div class="checkout_login">
                        <form class="wn__checkout__form" action="w_checkot/create_transaksi">
                            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>

                            <div class="input__box">
                                <label>Username or email <span>*</span></label>
                                <input type="text">
                            </div>

                            <div class="input__box">
                                <label>password <span>*</span></label>
                                <input type="password">
                            </div>
                            <div class="form__btn">
                                <button>Login</button>
                                <label class="label-for-checkbox">
                                    <input id="rememberme" name="rememberme" value="forever" type="checkbox">
                                    <span>Remember me</span>
                                </label>
                                <a href="#">Lost your password?</a>
                            </div>
                        </form>
                    </div>
                    <!-- <div class="checkout_info">
                        <span>Have a coupon? </span>
                        <a class="showcoupon" href="#">Click here to enter your code</a>
                    </div> -->
                    <div class="checkout_coupon">
                        <form action="#">
                            <div class="form__coupon">
                                <input type="text" placeholder="Coupon code">
                                <button>Apply coupon</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <form action="<?= base_url('w_checkout/create_transaksi');?>" method="post">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="customer_details">
                    <h3>Detail Pemesanan</h3>
                    <div class="customar__field">
                        <div class="margin_between">
                            <div class="input_box space_between">
                                <label>Nama Depan <span>*</span></label>
                                <input type="text" value="<?= $this->session->userdata("nama_depan");?>" readonly>
                                <input type="hidden" name="id_user" value="<?= $this->session->userdata("id_user");?>">
                            </div>
                            <div class="input_box space_between">
                                <label>Nama Belakang <span>*</span></label>
                                <input type="text" value="<?= $this->session->userdata("nama_belakang");?>" readonly>
                            </div>
                        </div>
                        <!-- <div class="input_box">
                            <label>Nama Perusahaan <span>*</span></label>
                            <input type="text" name="nama_perusahaan" required>
                        </div> -->
                        <div class="input_box">
                            <label>Negara<span>*</span></label>
                            <select class="select__option" name="negara" required>
                                <option value="">Pilih Negara</option>
                                <option value="Indonesia">Indonesia</option>
                            </select>
                        </div>
                        <div class="input_box">
                            <label>Provinsi<span>*</span></label>
                            <input type="text" name="provinsi" placeholder="Nama Provinsi" required>
                        </div>
                        <div class="input_box">
                            <label>Kota/Kabupaten<span>*</span></label>   
                            <input type="text" name="kabupaten" placeholder="Nama Kota/Kabupaten" required>                         
                        </div>
                        <div class="input_box">
                            <label>Kecamatan<span>*</span></label>
                            <input type="text" name="kecamatan" placeholder="Nama Kecamatan" required>  
                        </div>
                        <div class="input_box">
                            <label>Kelurahan<span>*</span></label>
                            <input type="text" name="kelurahan" placeholder="Nama Kelurahan" required>  
                        </div>
                        <div class="input_box">
                            <label>Alamat Pengiriman <span>*</span></label>
                            <input type="text" name="alamat" placeholder="Alamat Pengiriman" required>
                            <!-- <textarea type="text" placeholder="Alamat Pengiriman"></textarea> -->
                        </div>
                        <div class="input_box">
                            <input type="hidden" name="alamat_opsi" value="kosong" placeholder="Alamat Pengiriman. (optional)">
                        </div>
                        <div class="input_box">
                            <label>Kodepos / ZIP <span>*</span></label>
                            <input type="text" name="kodepos" placeholder="Kodepos" required>
                        </div>
                        <div class="margin_between">
                            <div class="input_box space_between">
                                <label>Telepon <span>*</span></label>
                                <input type="text" name="telepon" value="<?= $this->session->userdata("no_hp");?>" required>
                            </div>

                            <div class="input_box space_between">
                                <label>Alamat Email <span>*</span></label>
                                <input type="email" name="email" value="<?= $this->session->userdata("email");?>" required>
                            </div>
                        </div>
                    </div>
                    <input type="checkbox" name="privasi" value="1" required> Saya telah menyetujui ketentuan dari SERAGAMPOS
                    <div class="review-form-actions">
                        <br>
                        <button class="kelas-beli">Pesan Produk</button>
                    </div>
                    <!-- <div class="create__account">
                        <div class="wn__accountbox">
                            <input class="input-checkbox" name="createaccount" value="1" type="checkbox">
                            <span>Create an account ?</span>
                        </div>
                        <div class="account__field">
                            <form action="#">
                                <label>Account password <span>*</span></label>
                                <input type="text" placeholder="password">
                            </form>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="customer_details mt--20">
                    <div class="differt__address">
                        <input name="ship_to_different_address" value="1" type="checkbox">
                        <span>Ship to a different address ?</span>
                    </div>
                    <div class="customar__field differt__form mt--40">
                        <div class="margin_between">
                            <div class="input_box space_between">
                                <label>First name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="input_box space_between">
                                <label>last name <span>*</span></label>
                                <input type="text">
                            </div>
                        </div>
                        <div class="input_box">
                            <label>Company name <span>*</span></label>
                            <input type="text">
                        </div>
                        <div class="input_box">
                            <label>Country<span>*</span></label>
                            <select class="select__option">
                                <option>Select a country…</option>
                                <option>Afghanistan</option>
                                <option>American Samoa</option>
                                <option>Anguilla</option>
                                <option>American Samoa</option>
                                <option>Antarctica</option>
                                <option>Antigua and Barbuda</option>
                            </select>
                        </div>
                        <div class="input_box">
                            <label>Address <span>*</span></label>
                            <input type="text" placeholder="Street address">
                        </div>
                        <div class="input_box">
                            <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                        </div>
                        <div class="input_box">
                            <label>District<span>*</span></label>
                            <select class="select__option"> 
                                <option>Select a country…</option>
                                <option>Afghanistan</option>
                                <option>American Samoa</option>
                                <option>Anguilla</option>
                                <option>American Samoa</option>
                                <option>Antarctica</option>
                                <option>Antigua and Barbuda</option>
                            </select>
                        </div>
                        <div class="input_box">
                            <label>Postcode / ZIP <span>*</span></label>
                            <input type="text">
                        </div>
                        <div class="margin_between">
                            <div class="input_box space_between">
                                <label>Phone <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="input_box space_between">
                                <label>Email address <span>*</span></label>
                                <input type="email">
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <?php
            $con=mysqli_connect("localhost","root","","db_seragampos");
            if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            // $query = mysqli_query($con,"SELECT * FROM tbl_keranjang WHERE id=".$_GET['id']."");
            $sesi_ker = $this->session->userdata("id_user");
            ?>
            <div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
                <div class="wn__order__box">
                    <h3 class="onder__title">Pemesanan Anda</h3>
                    <div class="col-12">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Harga Satuan x Qty</th>
                                    <th>Size</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($con,"SELECT a.id,a.kode_transaksi,a.id_user,a.id_produk,a.catatan,a.jumlah,a.harga,a.status,a.date_add,a.size,
                                                                    b.id,b.nama_produk,b.kd_kategori,b.deskripsi,b.cover,b.gambar,b.status,b.harga,b.berat,b.stok,b.diskon,b.created_at
                                                            FROM tbl_keranjang a JOIN tbl_produk b
                                                            ON a.id_produk=b.id
                                                            WHERE a.id_user='$sesi_ker' AND a.status='0' 
                                                            ORDER BY a.id ");

                                if(mysqli_num_rows($query)>0){
                                    while($rowkerview = mysqli_fetch_array($query))
                                    {
                                    $a = $rowkerview['jumlah'];
                                    $b = $rowkerview['harga'];
                                    $c = $a * $b;
                                ?>
                                <!-- <li><?= $rowkerview['nama_produk'];?> × <?= $rowkerview['jumlah'];?><span><?= buatRupiah($c);?></span></li> -->
                                <!-- <td><?= $rowkerview['nama_produk'];?><span><?= buatRupiah($c);?></span></td> -->
                                <tr>
                                    <td><?= $rowkerview['nama_produk'];?></td>
                                    <td><?= buatRupiah($rowkerview['harga']);?> × <?= $rowkerview['jumlah'];?></td>
                                    <td><?= $rowkerview['size'];?></td>
                                    <td><?= buatRupiah($c);?></td>
                                </tr>
                                    <?php } } mysqli_close($con); ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- <ul class="shipping__method">
                        <li>Cart Subtotal <span>$48.00</span></li>
                        <li>Shipping 
                            <ul>
                                <li>
                                    <input name="shipping_method[0]" data-index="0" value="legacy_flat_rate" checked="checked" type="radio">
                                    <label>Flat Rate: $48.00</label>
                                </li>
                                <li>
                                    <input name="shipping_method[0]" data-index="0" value="legacy_flat_rate" checked="checked" type="radio">
                                    <label>Flat Rate: $48.00</label>
                                </li>
                            </ul>
                        </li>
                    </ul> -->
                    <?php
                    $con=mysqli_connect("localhost","root","","db_seragampos");
                    if (mysqli_connect_errno())
                    {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                    // $query = mysqli_query($con,"SELECT * FROM tbl_keranjang WHERE id=".$_GET['id']."");
                    $sesi_ker = $this->session->userdata("id_user");
                    $query = mysqli_query($con,"SELECT a.id,a.kode_transaksi,a.id_user,a.id_produk,a.catatan,a.jumlah,a.harga,a.status,a.date_add, 
                                                b.id_user,b.email,b.nama_depan,b.nama_belakang,b.no_hp,b.username,b.password,b.image,b.role,b.status,b.created_at,
                                                c.id,c.nama_produk,c.kd_kategori,c.deskripsi,c.cover,c.gambar,c.status,c.harga,c.berat,c.stok,c.diskon,c.created_at 
                                                FROM tbl_keranjang a 
                                                JOIN tbl_users b 
                                                ON a.id_user=b.id_user 
                                                JOIN tbl_produk c 
                                                ON a.id_produk=c.id 
                                                WHERE a.id_user='$sesi_ker' AND a.status='0' 
                                                ORDER BY a.id ");
                    $rowker1=mysqli_fetch_assoc($query);

                    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
                    function generate_string($input, $strength = 16) {
                        $input_length = strlen($input);
                        $random_string = '';
                        for($i = 0; $i < $strength; $i++) {
                            $random_character = $input[mt_rand(0, $input_length - 1)];
                            $random_string .= $random_character;
                        }
                    
                        return $random_string;
                    }
                    
                    $kalimat = generate_string($permitted_chars, 20);;
                    $sub_kalimat = substr($kalimat,-5);
                    // echo $sub_kalimat;
                    ?>
                    <input type="hidden" name="kode_transaksi" value="INV/<?= $rowker1['kode_transaksi'];?>/<?= $sub_kalimat;?>">
                    <input type="hidden" name="id_transaksi" value="<?= $rowker1['kode_transaksi'];?>">
                    <?php
                    $querycount = mysqli_query($con,"SELECT COUNT(a.id) AS jumlah_ker,a.id,a.kode_transaksi,a.id_user,a.id_produk,a.catatan,a.jumlah,a.harga,a.status,a.date_add, 
                                                     b.id_user,b.email,b.nama_depan,b.nama_belakang,b.no_hp,b.username,b.password,b.image,b.role,b.status,b.created_at,
                                                     c.id,c.nama_produk,c.kd_kategori,c.deskripsi,c.cover,c.gambar,c.status,c.harga,c.berat,c.stok,c.diskon,c.created_at 
                                                     FROM tbl_keranjang a 
                                                     JOIN tbl_users b 
                                                     ON a.id_user=b.id_user 
                                                     JOIN tbl_produk c 
                                                     ON a.id_produk=c.id 
                                                     WHERE a.id_user='$sesi_ker' AND a.status='0' 
                                                     ORDER BY a.id ");
                    $rowker2=mysqli_fetch_assoc($querycount);

                    $queryjumker = mysqli_query($con,"SELECT id_produk, SUM(harga) AS jumlah_harga_ker
                                                      FROM tbl_keranjang 
                                                      WHERE id_user='$sesi_ker' AND status='0'
                                                      ORDER BY id ");
                    $rowker3=mysqli_fetch_assoc($queryjumker);
                    $biaya=5;
                    $ssbayar_checkout = $biaya + $rowker3['jumlah_harga_ker'];
                    ?>
                    <ul class="total__amount">
                        <li>Total Pemesanan <span><?= buatRupiah($ssbayar_checkout); ?></span></li>
                        <!-- COPY -->
                        <!-- <script>
                            var copyTextareaBtn = document.querySelector('.js-textareacopybtn');

                            copyTextareaBtn.addEventListener('click', function(event) {
                            var copyTextarea = document.querySelector('.js-copytextarea');
                            copyTextarea.focus();
                            copyTextarea.select();

                            try {
                                var successful = document.execCommand('copy');
                                var msg = successful ? 'successful' : 'unsuccessful';
                                console.log('Copying text command was ' + msg);
                            } catch (err) {
                                console.log('Oops, unable to copy');
                            }
                            });
                        </script>
                        <p>
                            <button class="js-textareacopybtn" style="vertical-align:top;">Copy Textarea</button>
                            <textarea class="js-copytextarea">Hello I'm some text</textarea>
                        </p> -->
                        <!-- END COPY -->
                    </ul>
                </div>
                <div id="accordion" class="checkout_accordion mt--30" role="tablist">
                    <div class="payment">
                        <div class="che__header" role="tab" id="headingOne">
                            <a class="checkout__title" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span>Bank Transfer</span>
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="payment-body">Jika anda sudah selesai melakukan pemesanan, harap masuk kembali ke website ini dan kirim bukti Pembayaran ke whatsapps SERAGAMPOS.</div>
                        </div>
                    </div>
                    <!-- <div class="payment">
                        <div class="che__header" role="tab" id="headingTwo">
                            <a class="collapsed checkout__title" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span>Cheque Payment</span>
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="payment-body">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</div>
                        </div>
                    </div>
                    <div class="payment">
                        <div class="che__header" role="tab" id="headingThree">
                            <a class="collapsed checkout__title" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span>Cash on Delivery</span>
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="payment-body">Pay with cash upon delivery.</div>
                        </div>
                    </div>
                    <div class="payment">
                        <div class="che__header" role="tab" id="headingFour">
                            <a class="collapsed checkout__title" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span>PayPal <img src="images/icons/payment.png" alt="payment images"> </span>
                            </a>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="payment-body">Pay with cash upon delivery.</div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        </form>
    </div>
</section>