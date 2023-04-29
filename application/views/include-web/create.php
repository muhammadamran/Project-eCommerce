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