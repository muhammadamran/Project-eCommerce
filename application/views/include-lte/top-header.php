<div id="header" class="header navbar-default">
    <div class="navbar-header">
        <a href="<?= base_url('ltehome'); ?>" class="navbar-brand">
            <!-- <span class="navbar-logo"></span> -->
            <div style="display:flex;justify-content:center;align-items: center;">
                <div style="width: 50px;margin-left: -6px;">
                    <img src="<?= base_url('assets/apps/icon/' . $lte_icon); ?>" alt="Logo Icon">
                </div>
                <div>
                    <div style="margin-top: 5px;">
                        <b>CMS <?= $lte_appname ?></b>
                    </div>
                    <div style="font-size: 9px;font-weight: 100;margin-top: -15px;">
                        <?= $lte_companyname ?>
                    </div>
                </div>
            </div>
        </a>
        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <ul class="navbar-nav navbar-right">
        <li>
            <div style="margin-top: 8px;margin-left:10px">
                <button type="button" class="btn btn-dark-custom" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Local Time +07:00">
                    <i class="far fa-clock"></i>
                    <font id="todaysDate"></font>
                </button>
            </div>
        </li>
        <li>
            <div style="margin-top: 8px;margin-left:10px">
                <button type="button" onClick="showHideRA('divRA')" class="btn btn-dark-custom" data-container="body" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Activity">
                    <i class="fa-solid fa-calendar"></i>
                    Activity
                </button>
            </div>
        </li>
        <li class="dropdown navbar-user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php if ($this->session->userdata('user_sex') == 'M') { ?>
                    <img src="<?= base_url('assets/lte/apps/user/male.jpg'); ?>" alt="Profile" />
                <?php } else if ($this->session->userdata('user_sex') == 'F') { ?>
                    <img src="<?= base_url('assets/lte/apps/user/female.jpg'); ?>" alt="Profile" />
                <?php } else { ?>
                    <img src="<?= base_url('assets/lte/apps/user/1.jpg'); ?>" alt="Profile" />
                <?php } ?>
                <b class="caret" style="margin-top: 7px;"></b>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="javascript:;" class="dropdown-item">Edit Profile</a>
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item">Log Out</a>
            </div>
        </li>
    </ul>
</div>