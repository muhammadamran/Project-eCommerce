<!-- LOGIN -->
<div class="modal fade" id="login" tabindex="-1" role="dialog">
    <div class="modal-dialog modal__container_sign" role="document">
        <div class="modal-content">
            <div class="modal-header modal__header">
                <h2 class="contact__title">Sign In</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="modal-product">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="contact-form-wrap">
                                    <p>Please enter the email and password that you created.</p>
                                    <form action="<?= base_url('whome/action_login'); ?>" method="post">
                                        <div class="single-contact-form space-between">
                                            <input type="email" name="user_mail" placeholder="Email">
                                            <input type="password" name="user_pass" id="password" placeholder="Password">
                                        </div>
                                        <div class="checkbox checkbox-css" style="margin-top: -30px;margin-bottom: 30px;margin-left: 233px;">
                                            <input type="checkbox" id="ckb1" onclick="myFunction()" />
                                            <label for="ckb1">Show Password</label>
                                        </div>
                                        <!-- <p>Silahkan <font style="color:#ce7852"><a data-toggle="modal" title="Create An Account" href="#daftar"><b>CREATE AN ACCOUNT</b></a></font> Jika Belum Memiliki Akun</p> -->
                                        <div class="contact-btn">
                                            <button type="submit" name="submit">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Show Password -->
<script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<!-- End Show Password -->
<!-- END LOGIN -->