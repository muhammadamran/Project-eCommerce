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
                    <img src="<?php echo base_url().'assets/img/logo/'. $data->logo; ?>" alt="">
                </div>
                <!-- END profile-header-img -->
                <!-- BEGIN profile-header-info -->
                <div class="profile-header-info">
                    <h4 class="mt-0 mb-1"><?php echo $data->nama_perusahaan;?></h4>
                    <p class="mb-2">&nbsp</p>
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
                                        <h4><?php echo $data->nama_perusahaan;?> <small><?php echo $data->email;?></small></h4>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <!-- end table -->
                </div>
                <!-- end #profile-about tab -->
            </div>
            
            <form class="form-horizontal form-bordered" action="perusahaan/update" enctype="multipart/form-data" method="POST">
                <div class="col-lg-3">
                    <b><?php echo $this->session->flashdata('update') ?></b>
                </div>
                <br>
                <input type="hidden" class="form-control" name="id" value="<?php echo $data->id; ?>" required/>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">NAMA PERUSAHAAN</label>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nama_perusahaan" value="<?php echo $data->nama_perusahaan; ?>" required/>
                                    <div class="input-group-addon bg-green">
                                        <i class="fa fa-address-card text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">EMAIL</label>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email" value="<?php echo $data->email; ?>" required/>
                                    <div class="input-group-addon bg-warning">
                                        <i class="fa fa-envelope text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">HANDPHONE</label>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="number" class="form-control" name="no_telpon" value="<?php echo $data->no_telpon; ?>" required/>
                                    <div class="input-group-addon bg-grey">
                                        <i class="fa fa-mobile text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">SLOGAN</label>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <textarea class="form-control" name="slogan" id="slogan" cols="30" rows="10" required><?php echo $data->slogan; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">LOGO/ICON</label>
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <?php if(file_exists('assets/img/logo/'.$data->logo) && $data->logo != NULL) { ?>
                                        <img class="thumb-image setpropileam" src="<?php echo base_url().'assets/img/logo/'.$data->logo; ?>" width="128px" height="128px" alt="Logo picture">
                                    <?php }else{ ?>
                                        <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Men-Profile-Image.png" width="128px" height="128px" alt="Logo picture"/>  
                                    <?php } ?>
                                </div>
                                </br>
                                <input class="upload btn-warning" name="logo_pic" type="file"/><br />
                                <input type="hidden" name="logoOld" value="<?php echo $data->logo != NULL ? $data->logo:'';?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-xl-4">
                        <div class="input-group">
                            <input type="text" class="form-control" name="link_fb" value="<?php echo $data->link_fb; ?>" required/>
                            <div class="input-group-addon bg-aqua">
                                <i class="fab fa-lg fa-fw m-r-10 fa-facebook text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-xl-4">
                        <div class="input-group">
                            <input type="text" class="form-control" name="link_instagram" value="<?php echo $data->link_instagram; ?>" required/>
                            <div class="input-group-addon bg-pink">
                                <i class="fab fa-lg fa-fw m-r-10 fa-instagram text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-xl-4">
                        <div class="input-group">
                            <input type="text" class="form-control" name="link_twitter" value="<?php echo $data->link_twitter; ?>" required/>
                            <div class="input-group-addon bg-blue">
                                <i class="fab fa-lg fa-fw m-r-10 fa-twitter text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <center>
                <button type="submit" class="btn btn-primary width-150">Update</button>
                </center>
                <!-- <button type="submit" class="btn btn-primary width-150">Update</button> -->
            </form>
            <!-- end tab-content -->
        </div>
        <!-- end profile-content -->
    </div>

</div>
<!-- end #content -->