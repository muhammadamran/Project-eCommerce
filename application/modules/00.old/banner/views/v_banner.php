<div id="content" class="content">
  <ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="<?php echo base_url('banner');?>">Banner</a></li>
  </ol>
  <h1 class="page-header">&nbsp</h1>
  <div class="row">
    <div class="col-xl-12">
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title">
            <span><a href="" class="btn btn-sm btn-white" data-toggle="modal" data-target="#addbanner">TAMBAH BANNER</a></span>
          </h4>
          <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
          </div>
        </div>
        <?php if($this->session->flashdata('banner') != NULL){ ?>
        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Notif!</strong> <?php echo $this->session->flashdata('banner') ?>
        </div>
        <?php } ?>
        <div class="panel-body">
            <div class ="table-responsive">
                <table id="tbl-banner" class="table table-striped table-bordered table-td-valign-middle" width="100%">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Judul</th>
                            <th>Banner</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- end panel-body -->
      </div>
      <!-- end panel -->
    </div>
    <!-- end col-10 -->

    <!-- Modal ADD -->
    <div class="modal fade bd-example-modal-lg" id="addbanner" tabindex="-1" role="dialog" aria-labelledby="addbanner" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addbanner">TAMBAH BANNER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="banner/tambah_banner" enctype="multipart/form-data"  method="POST">
                        <div class="form-group">
                            <label class="col-form-label">JUDUL : </label>
                            <textarea class="ckeditor" id="judulx" name="judul" reuired></textarea>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-xl-4">
                                <label class="col-form-label">BANNER : </label>
                                <input class="upload btn-warning form-control" name="banner_pic" type="file" required/>
                            </div>
                            <div class="form-group col-xl-3">
                                <label class="col-form-label">STATUS: </label>
                                    <select name="status" class="form-control" required>
                                        <option value="">-- PILIH --</option>
                                        <option value="1">SHOW</option>
                                        <option value="0">HIDE</option>
                                    </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" value="Cek">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal EDIT -->
    <div class="modal fade" id="editbanner" tabindex="-1" role="dialog" aria-labelledby="editbanner" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="editbanner">EDIT BANNER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="banner/edit_banner" method="POST">
                        <input type="hidden" class="form-control" id="idx" name="id">
                        <div class="form-group">
                            <label class="col-form-label">STATUS: </label>
                            <div class="col-lg-3">
                                <select name="status" id="statusx" class="form-control" required>
                                    <option value="1">SHOW</option>
                                    <option value="0">HIDE</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" value="Cek">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal HAPUS -->
    <div class="modal fade" id="hapusbanner" tabindex="-1" role="dialog" aria-labelledby="hapusbanner" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="hapusbanner">HAPUS BANNER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="banner/hapus_banner" method="POST">
                        <div class="modal-body">
                            <p>Anda yakin mau menghapus Banner <input type="text" id="bannerxx" disabled></p>
                        </div>
                        <input type="hidden" class="form-control" id="idxx" name="id">
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger" value="Cek">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Manage -->
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/app-manage.js');?>"></script>