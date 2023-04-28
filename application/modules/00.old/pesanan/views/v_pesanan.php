<div id="content" class="content">
  <ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="<?php echo base_url('pesanan');?>">Pesanan</a></li>
  </ol>
  <h1 class="page-header">&nbsp</h1>
  <div class="row">
    <div class="col-xl-12">
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title">
            <!-- <span><a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#add">TAMBAH</a></span> -->
          </h4>
          <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
          </div>
        </div>
        <?php if($this->session->flashdata('pesanan') != NULL){ ?>
        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Notif!</strong> <?php echo $this->session->flashdata('pesanan') ?>
        </div>
        <?php } ?>
        <div class="panel-body">
          <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
            <thead>
                <tr>
                    <th class="text-nowrap">No</th>
                    <th class="text-nowrap">Kode Transaksi</th>
                    <th class="text-nowrap">Pembeli</th>
                    <th class="text-nowrap">Alamat</th>
                    <th class="text-nowrap">Alamat opsi</th>
                    <th class="text-nowrap">Tanggal</th>
                    <th class="text-nowrap">Status</th>
                    <th class="text-nowrap">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no = 0;
                foreach($data as $row){
                $no++;
            ?>
                <tr>
                    <td><?= $no == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $no ?></td>
                    <td><a href="pesanan/pdf/<?php echo $row->id ?>" target="_blank"><?= $row->kode_transaksi == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row->kode_transaksi ?></a></td>
                    <td><?= $row->nama_depan.' '.$row->nama_belakang ?></td>
                    <td><?= $row->alamat ?></td>
                    <td><?= $row->alamat_opsi ?></td>
                    <td><?= $row->tanggal ?></td>
                    <td><?= $row->status_transaksi == 1 ? "<label class='label label-warning'>Belum Bayar</label>" 
                    : ( $row->status_transaksi == 2 ? "<label class='label label-danger'>Dibatalkan</label>" 
                    : ( $row->status_transaksi == 3 ? "<label class='label label-success'>Diproses</label>"  
                    : ( $row->status_transaksi == 4 ? "<label class='label label-success'>Dikirim</label>" 
                    : ( $row->status_transaksi == 5 ? "<label class='label label-success'>Selesai</label>"  : '' )))) ?></td>
                    <td>
                    <?php if($row->status_transaksi == 1){ ?>
                        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#batal<?php echo $row->id;?>">Dibatalkan</a>
                        <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#proses<?php echo $row->id;?>">Diproses</a>
                    <?php }elseif($row->status_transaksi == 2){ ?>
                        Tidak ada Aksi
                        <?php }elseif($row->status_transaksi == 3){ ?>
                            <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#kirim<?php echo $row->id;?>">Dikirim</a>
                            <?php }elseif($row->status_transaksi == 4){ ?>
                                <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#selesai<?php echo $row->id;?>">Selesai</a>
                                <?php }elseif($row->status_transaksi == 5){ ?>
                                    Tidak ada Aksi
                    <?php } ?>
                    </td>
                </tr>

                <!-- Diproses -->
                <div class="modal fade" id="proses<?php echo $row->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Proses Pesanan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form class="form-horizontal" method="post" action="pesanan/diproses">
                                <div class="modal-body">
                                <p>Anda yakin mau Memproses Pesanan dengan kode transaksi <b><?php echo $row->kode_transaksi;?></b></p>
                                </div>
                                <div class="modal-footer">
                                  <input type="hidden" name="id" value="<?php echo $row->id;?>">
                                  <input type="hidden" name="id_user" value="<?php echo $row->id_user;?>">
                                  <input type="hidden" name="id_transaksi" value="<?php echo $row->id_transaksi;?>">
                                  <input type="hidden" name="kode_transaksi" value="<?php echo $row->kode_transaksi;?>">
                                  <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                  <button class="btn btn-success">Simpan</button>
                                </div>
                            </form>
                          </div>
                      </div>
                    </div>
                </div>

                <!-- Dibatalkan -->
                <div class="modal fade" id="batal<?php echo $row->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Batalkan Pesanan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form class="form-horizontal" method="post" action="pesanan/dibatalkan">
                                <div class="modal-body">
                                <p>Anda yakin mau Membatalkan Pesanan dengan kode transaksi <b><?php echo $row->kode_transaksi;?></b></p>
                                </div>
                                <div class="modal-footer">
                                  <input type="hidden" name="id" value="<?php echo $row->id;?>">
                                  <input type="hidden" name="id_user" value="<?php echo $row->id_user;?>">
                                  <input type="hidden" name="id_transaksi" value="<?php echo $row->id_transaksi;?>">
                                  <input type="hidden" name="kode_transaksi" value="<?php echo $row->kode_transaksi;?>">
                                  <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                  <button class="btn btn-danger">Simpan</button>
                                </div>
                            </form>
                          </div>
                      </div>
                    </div>
                </div>

                <!-- Dikirim -->
                <div class="modal fade" id="kirim<?php echo $row->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Kirim Pesanan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form class="form-horizontal" method="post" action="pesanan/dikirim">
                                <div class="modal-body">
                                <p>Anda yakin mau Mengirimkan Pesanan dengan kode transaksi <b><?php echo $row->kode_transaksi;?></b></p>
                                </div>
                                <div class="modal-footer">
                                  <input type="hidden" name="id" value="<?php echo $row->id;?>">
                                  <input type="hidden" name="id_user" value="<?php echo $row->id_user;?>">
                                  <input type="hidden" name="id_transaksi" value="<?php echo $row->id_transaksi;?>">
                                  <input type="hidden" name="kode_transaksi" value="<?php echo $row->kode_transaksi;?>">
                                  <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                  <button class="btn btn-danger">Simpan</button>
                                </div>
                            </form>
                          </div>
                      </div>
                    </div>
                </div>

                <!-- Selesai -->
                <div class="modal fade" id="selesai<?php echo $row->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Menyelesaikan Pesanan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form class="form-horizontal" method="post" action="pesanan/selesai">
                                <div class="modal-body">
                                <p>Anda yakin mau Menyelesaikan Pesanan dengan kode transaksi <b><?php echo $row->kode_transaksi;?></b></p>
                                </div>
                                <div class="modal-footer">
                                  <input type="hidden" name="id" value="<?php echo $row->id;?>">
                                  <input type="hidden" name="id_user" value="<?php echo $row->id_user;?>">
                                  <input type="hidden" name="id_transaksi" value="<?php echo $row->id_transaksi;?>">
                                  <input type="hidden" name="kode_transaksi" value="<?php echo $row->kode_transaksi;?>">
                                  <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                                  <button class="btn btn-danger">Simpan</button>
                                </div>
                            </form>
                          </div>
                      </div>
                    </div>
                </div>

            <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- end panel-body -->
      </div>
      <!-- end panel -->
    </div>
    <!-- end col-10 -->
  </div>
  

</div>