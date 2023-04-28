<!-- begin #content -->
<div id="content" class="content content-full-width">
    <!-- begin profile -->
    <div class="profile">
        <div class="profile-header">
            <!-- BEGIN profile-header-cover -->
            <div class="profile-header-cover"></div>
            <!-- END profile-header-cover -->
            <!-- BEGIN profile-header-content -->
            <div class="profile-header-content">
                <!-- BEGIN profile-header-img -->
                <div class="profile-header-img">
                    <img src="<?php echo base_url().'assets/img/user/'.$this->session->userdata('image'); ?>" alt="">
                </div>
                <!-- END profile-header-img -->
                <!-- BEGIN profile-header-info -->
                <div class="profile-header-info">
                    <h4 class="mt-0 mb-1"><?php echo $data->nama_depan.' '.$data->nama_belakang;?></h4>
                    <p class="mb-2"><?php echo $data->username;?></p>
                    <a href="home" class="btn btn-xs btn-yellow">Dashboard</a>
                </div>
                <!-- END profile-header-info -->
            </div>
            <!-- END profile-header-content -->
            &nbsp
        </div>
    </div>
    <!-- end profile -->
    
    <div class='bg-white'>
        <!-- begin profile-content -->
        <div class="profile-content">
            <!-- begin tab-content -->
            <div class="tab-content p-0">
                <!-- begin #profile-about tab -->
                <div class="tab-pane fade show active" id="profile-about">
                    <!-- begin table -->
                    <div class="table-responsive form-inline">
                        <table class="table table-profile">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>
                                        <h4><?php echo $data->nama_depan;?> <small><?php echo $data->nama_belakang;?></small></h4>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <form class="form-horizontal form-bordered" action="profil/update" enctype="multipart/form-data" method="POST">
                                    <br>
                                    <div class="col-lg-3">
                                        <b><?php echo $this->session->flashdata('notif_update_user') ?></b>
                                    </div>
                                    <br>
                                    <tr>
                                        <td class="field valign-middle">Nama Depan</td>
                                        <td class="with-form-control">
                                            <input type="text" class="form-control" name="nama_depan" value="<?php echo $data->nama_depan; ?>" placeholder="Nama Depan..." required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field valign-middle">Nama Belakang</td>
                                        <td class="with-form-control">
                                            <input type="text" class="form-control" name="nama_belakang" value="<?php echo $data->nama_belakang; ?>" placeholder="Nama Depan..." required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field valign-middle">Username</td>
                                        <td class="with-form-control">
                                            <input type="text" class="form-control" name="username" value="<?php echo $data->username; ?>" placeholder="Username..." required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field valign-middle">Email</td>
                                        <td class="with-form-control">
                                            <input type="email" class="form-control" name="email" value="<?php echo $data->email; ?>" placeholder="Email..." required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field valign-middle">Password</td>
                                        <td class="with-form-control">
                                            <input type="Password" class="form-control" name="password" id="password" placeholder="****" data-toggle="password"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field valign-middle">Konfirmasi Password</td>
                                        <td class="with-form-control">
                                            <input type="Password" class="form-control" name="password" id="konfirmasi_password" placeholder="****"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field valign-middle">Foto</td>
                                        <td class="with-form-control">
                                            <div class="input-group">
                                            <?php if(file_exists('assets/img/user/'.$this->session->userdata('image')) && $this->session->userdata('image') != NULL) { ?>
                                                <img class="thumb-image setpropileam" src="<?php echo base_url().'assets/img/user/'.$this->session->userdata('image'); ?>" width="128px" height="128px" alt="User profile picture">
                                            <?php }else{ ?>
                                                <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Men-Profile-Image.png" width="128px" height="128px" alt="User profile picture"/>  
                                            <?php } ?>
                                            </div>
                                            </br>
                                            <input id="fileUpload" class="upload btn-warning" name="profile_pic" type="file"/><br />
                                            <input type="hidden" name="fileOld" value="<?php echo $this->session->userdata('image') != NULL ? $this->session->userdata('image'):'';?>" />
                                        </td>
                                    </tr>
                                    <tr class="divider">
                                        <td colspan="2"></td>
                                    </tr>
                                    <tr class="highlight">
                                        <td class="field">&nbsp;</td>
                                        <td class="p-t-10 p-b-10">
                                            <button type="submit" class="btn btn-primary width-150">Update</button>
                                        </td>
                                    </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table -->
                </div>
                <!-- end #profile-about tab -->
            </div>
            <!-- end tab-content -->
        </div>
        <!-- end profile-content -->
    </div>
    
</div>
<!-- end #content -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>

<script type="text/javascript">
	$("#password").password('toggle');
</script>

<script type="text/javascript">
    window.onload = function () {
        document.getElementById("password").onchange = validatePassword;
        document.getElementById("konfirmasi_password").onchange = validatePassword;
    }

    function validatePassword(){
      var pass2=document.getElementById("konfirmasi_password").value;
      var pass1=document.getElementById("password").value;
      console.log(pass2);
      console.log(pass1);
      console.log(pass1!=pass2);
      
      if(pass1.length >= 6)
        document.getElementById("password").setCustomValidity('');
      else
        document.getElementById("password").setCustomValidity("Password Kurang dari 6 character");
      

      if(pass1!=pass2)
          document.getElementById("konfirmasi_password").setCustomValidity("Password Tidak Sama, Coba Lagi");
      else
          document.getElementById("konfirmasi_password").setCustomValidity('');
    }
</script>