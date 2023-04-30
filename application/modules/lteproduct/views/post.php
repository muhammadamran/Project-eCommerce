<div id="content" class="content">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Stock List</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <div style="font-size: 12px;display: flex;">
                            <li class="breadcrumb-item"><a href="<?= base_url('ltehome') ?>">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">Product</a></li>
                            <li class="breadcrumb-item active"><a href="#">Stock List</a></li>
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
                    <a href="#" class="nav-link active">
                        <span class="d-sm-none">Stock List</span>
                        <span class="d-sm-block d-none">Stock List</span>
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
                                        <table id="TableDefault_L" class="table table-striped table-bordered table-td-valign-middle">
                                            <thead>
                                                <tr style="text-transform: uppercase;text-align:center">
                                                    <th width="1%" data-orderable="false"></th>
                                                    <th class="text-nowrap">Email & Datetime</th>
                                                    <th class="text-nowrap">Location</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if ($data) : $no = 1;
                                                    foreach ($data as $row) : ?>
                                                        <tr class="odd gradeX">
                                                            <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
                                                            <!-- Email & Datetime -->
                                                            <td>
                                                                <div class="oke-icon">
                                                                    <!-- Icon -->
                                                                    <div class="elemen-bg">
                                                                        <i class="fa-solid fa-user-clock" style="font-size: 14px;"></i>
                                                                    </div>
                                                                    <!-- Text -->
                                                                    <div style="margin-left: 10px;">
                                                                        <div style="font-size: 14px;font-weight: 900;">
                                                                            <?= $row['email'] != NULL ? $row['email'] : '<center><i style="color:red">NULL</i></center>' ?>
                                                                        </div>
                                                                        <div style="font-size: 12px;font-weight: 400;">
                                                                            <?= $row['date_time'] != NULL ? $row['date_time'] : '<center><i style="color:red">NULL</i></center>' ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <!-- Location -->
                                                            <td>
                                                                <div class="oke-icon">
                                                                    <!-- Icon -->
                                                                    <div class="elemen-bg">
                                                                        <i class="fa-solid fa-location" style="font-size: 14px;"></i>
                                                                    </div>
                                                                    <!-- Text -->
                                                                    <div style="margin-left: 10px;">
                                                                        <div style="font-size: 14px;font-weight: 900;">
                                                                            <?= $row['location'] != NULL ? $row['location'] : '<center><i style="color:red">NULL</i></center>' ?>
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