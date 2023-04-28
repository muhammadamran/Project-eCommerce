<div id="header" class="header navbar-default">
    <div class="navbar-header">
        <a href="<?php echo base_url('home');?>" class="navbar-brand"><span class="navbar-logo"></span> <b><?php echo $this->session->userdata('nama_perusahaan'); ?></b></a>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown navbar-user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php if(file_exists('assets/img/user/'.$this->session->userdata('image')) && $this->session->userdata('image') != NULL) { ?>
                    <img src="<?php echo base_url().'assets/img/user/'. $this->session->userdata('image');?>" alt="" />     
                <?php }else{ ?>
                    <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Men-Profile-Image.png" alt=""/>  
                <?php } ?> 
                <span class="d-none d-md-inline"><?php echo $this->session->userdata('nama'); ?></span> <b class="caret"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="<?php echo base_url(); ?>profil" class="dropdown-item">Edit Profil</a>
                <a href="<?php echo base_url(); ?>w_home/logout" class="dropdown-item">Log Out</a>
            </div>
        </li>
    </ul>
</div>