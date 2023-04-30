<div id="content" class="content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Post List</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <div style="font-size: 12px;display: flex;">
                            <li class="breadcrumb-item"><a href="<?= base_url('ltehome') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">Product</a></li>
                            <li class="breadcrumb-item active"><a href="#">Post List</a></li>
                        </div>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- end page-header -->
    <div class="line-page"></div>
    <div class="row">
        <div class="col-xl-12">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="<?= base_url('lteproduct/lteporduct_post'); ?>" class="nav-link active">
                        <span class="d-sm-none"><i class="fas fa-laptop"></i> Laptop</span>
                        <span class="d-sm-block d-none"><i class="fas fa-laptop"></i> Laptop</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('lteproduct/lteporduct_server'); ?>" class="nav-link">
                        <span class="d-sm-none"><i class="fas fa-server"></i> Server</span>
                        <span class="d-sm-block d-none"><i class="fas fa-server"></i> Server</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('lteproduct/lteporduct_pc'); ?>" class="nav-link">
                        <span class="d-sm-none"><i class="fas fa-mobile"></i> PC</span>
                        <span class="d-sm-block d-none"><i class="fas fa-mobile"></i> PC</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('lteproduct/lteporduct_lcd'); ?>" class="nav-link">
                        <span class="d-sm-none"><i class="fas fa-desktop"></i> Monitor/LCD</span>
                        <span class="d-sm-block d-none"><i class="fas fa-desktop"></i> Monitor/LCD</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('lteproduct/lteporduct_tv'); ?>" class="nav-link">
                        <span class="d-sm-none"><i class="fas fa-tv"></i> TV</span>
                        <span class="d-sm-block d-none"><i class="fas fa-tv"></i> TV</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('lteproduct/lteporduct_phone'); ?>" class="nav-link">
                        <span class="d-sm-none"><i class="fas fa-mobile-alt"></i> Phone</span>
                        <span class="d-sm-block d-none"><i class="fas fa-mobile-alt"></i> Phone</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('lteproduct/lteporduct_ipad'); ?>" class="nav-link">
                        <span class="d-sm-none"><i class="fas fa-tablet-alt"></i> Ipad</span>
                        <span class="d-sm-block d-none"><i class="fas fa-tablet-alt"></i> Ipad</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('lteproduct/lteporduct_headphones'); ?>" class="nav-link">
                        <span class="d-sm-none"><i class="fas fa-headphones-alt"></i> Headphones</span>
                        <span class="d-sm-block d-none"><i class="fas fa-headphones-alt"></i> Headphones</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="default-tab-1">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-inverse" data-sortable-id="index-6">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="TableDefault_L" class="table table-bordered table-td-valign-middle">
                                            <tbody>
                                                <?php if ($dataLaptop) : $no = 1;
                                                    foreach ($dataLaptop as $row) : ?>
                                                        <tr class="odd gradeX">
                                                            <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
                                                            <td width="1%" class="with-img">
                                                                <div>
                                                                    <?php if ($row['product_cover'] == NULL) { ?>
                                                                        <img src="<?= base_url('assets/apps/notfound/notfound.png'); ?>" class="img-rounded height-60" style="border-radius: 0px !important;" />
                                                                    <?php } else { ?>
                                                                        <img src="<?= base_url('assets/website/product/cover' . $row['product_cover']); ?>" class="img-rounded height-60" style="border-radius: 0px !important;" />
                                                                    <?php } ?>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <!-- TOP -->
                                                                    <div>
                                                                        <div>
                                                                            <font style="font-size: 12px;font-weight:900"><?= $row['product_name'] ?></font>
                                                                        </div>
                                                                        <div style="margin-top: -7px;">
                                                                            <font style="font-size: 8px;font-weight:500;color:#9e9e9e">Product Name</font>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Buttom -->
                                                                    <div style="display: flex;justify-content: space-between;margin-top: 10px;">
                                                                        <div>
                                                                            <div>
                                                                                <font style="font-size: 12px;font-weight:900"><?= $row['hostname'] ?></font>
                                                                            </div>
                                                                            <div style="margin-top: -7px;">
                                                                                <font style="font-size: 8px;font-weight:500;color:#9e9e9e">Host Name</font>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <a href="" style="font-size: 12px;font-weight:500;color:#9e9e9e"><i class="fa-solid fa-link"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <!-- TOP -->
                                                                    <div>
                                                                        <div>
                                                                            <font style="font-size: 12px;font-weight:900"><?= $row['serial_number'] ?></font>
                                                                        </div>
                                                                        <div style="margin-top: -7px;">
                                                                            <font style="font-size: 8px;font-weight:500;color:#9e9e9e">Serial Number</font>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Buttom -->
                                                                    <div style="margin-top: 10px;">
                                                                        <div>
                                                                            <font style="font-size: 12px;font-weight:900"><?= $row['brand'] ?></font>
                                                                        </div>
                                                                        <div style="margin-top: -7px;">
                                                                            <font style="font-size: 8px;font-weight:500;color:#9e9e9e">Brand</font>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <!-- TOP -->
                                                                    <div>
                                                                        <div>
                                                                            <font style="font-size: 12px;font-weight:900"><?= $row['location_branch'] != NULL ? $row['location_branch'] : 'X' ?></font>
                                                                        </div>
                                                                        <div style="margin-top: -7px;">
                                                                            <font style="font-size: 8px;font-weight:500;color:#9e9e9e">Branch Location</font>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Buttom -->
                                                                    <div style="margin-top: 10px;">
                                                                        <div>
                                                                            <font style="font-size: 12px;font-weight:900"><?= $row['location_room'] != NULL ? $row['location_room'] : 'X' ?></font>
                                                                        </div>
                                                                        <div style="margin-top: -7px;">
                                                                            <font style="font-size: 8px;font-weight:500;color:#9e9e9e">Current Location</font>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <!-- TOP -->
                                                                    <div>
                                                                        <div>
                                                                            <font style="font-size: 12px;font-weight:900"><?= $row['status_available'] ?></font>
                                                                        </div>
                                                                        <div style="margin-top: -7px;">
                                                                            <font style="font-size: 8px;font-weight:500;color:#9e9e9e">Status Device</font>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Buttom -->
                                                                    <div style="display: flex;justify-content: space-between;margin-top: 10px;">
                                                                        <div>
                                                                            <div>
                                                                                <font style="font-size: 12px;font-weight:900"><?= $row['purchase_year'] != NULL ? $row['purchase_year'] : '0000' ?></font>
                                                                            </div>
                                                                            <div style="margin-top: -7px;">
                                                                                <font style="font-size: 8px;font-weight:500;color:#9e9e9e">Purchase Year</font>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <font style="font-size: 12px;font-weight:500;color:#9e9e9e"><i class="fa-solid fa-link"></i></font>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                        $no++;
                                                    endforeach
                                                    ?>
                                                <?php else : ?>
                                                    <tr>
                                                        <td colspan="6">
                                                            <div class="page-table-not-found">
                                                                <div>
                                                                    <img src="<?= base_url('assets/lte/apps/svg/search-animate.svg'); ?>" style="width:300px" alt="">
                                                                </div>
                                                                <div>
                                                                    <center>
                                                                        <p class="font-not-found">No data available in table</p>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endif ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>