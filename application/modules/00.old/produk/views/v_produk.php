<div id="content" class="content">
  <ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="<?php echo base_url('produk');?>">Produk</a></li>
  </ol>
  <h1 class="page-header">&nbsp</h1>
  <div class="row">
    <div class="col-xl-12">
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title">
            <span><a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#add">TAMBAH</a></span>
          </h4>
          <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
          </div>
        </div>
        <?php if($this->session->flashdata('produk') != NULL){ ?>
        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Notif!</strong> <?php echo $this->session->flashdata('produk') ?>
        </div>
        <?php } ?>
        <div class="panel-body">
          <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
            <thead>
                <tr>
                    <th class="text-nowrap">No</th>
                    <th class="text-nowrap">Produk</th>
                    <th class="text-nowrap">Kategori</th>
                    <th class="text-nowrap">Stok</th>
                    <th class="text-nowrap">Status</th>
                    <th class="text-nowrap">Tanggal</th>
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
                    <td><?= $row->nama_produk == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row->nama_produk ?></td>
                    <td><?= $row->nama_kategori == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row->nama_kategori ?></td>
                    <td><?= $row->stok == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : "Tersedia(".$row->stok.")" ?></td>
                    <td><?= $row->status == 1 ? "<label class='label label-success'>Show</label>" : ( $row->status == 2 ? "<label class='label label-warning'>Hide</label>" :  "<label class='label label-danger'>Delete</label>" ) ?></td>
                    <td><?= $row->created_at ?></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit<?php echo $row->id;?>"><i class="fa fas fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-danger" style="color:#fff;cursor:pointer" data-toggle="modal" data-target="#hapus<?php echo $row->id;?>"><i class="fa fas fa-trash"></i></a>
                    </td>
                </tr>

                <!-- Modal EDIT -->
                <div class="modal fade bd-example-modal-lg" id="edit<?php echo $row->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">EDIT PRODUK</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form action="produk/edit_produk" method="POST">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row->id;?>">

                            <div class="row">
                                <div class="form-group col-xl-6">
                                    <label for="status" class="col-form-label">Status:</label>
                                    <select class="form-control" name="status" required>
                                        <option value="<?php echo $row->status;?>" selected>  ( <?php echo $row->status == 1 ? "<label>Show</label>" : ( $row->status == 2 ? "<label>Hide</label>" :  "<label>Delete</label>" );?> ) </option>
                                        <option value="1"> Show </option>
                                        <option value="2"> Hide </option>
                                        <option value="2"> Delete </option>
                                    </select>
                                </div>
                                
                                <div class="form-group col-xl-4">
                                    <label class="col-form-label">Berat:</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" name="berat" value="<?php echo $row->berat;?>" required>
                                        <span class="input-group-text" id="basic-addon2">kg</span>
                                    </div>
                                </div>

                                <div class="form-group col-xl-5">
                                    <label class="col-form-label">Harga:</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon2">Rp. </span>
                                        <input type="number" class="form-control" name="harga" value="<?php echo $row->harga;?>" required>
                                        <span class="input-group-text bg-white" id="basic-addon2">/PCS</span>
                                    </div>
                                </div>

                                <div class="form-group col-xl-3">
                                    <label class="col-form-label">Diskon:</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" name="diskon" value="<?php echo $row->diskon;?>" required>
                                        <span class="input-group-text bg-white" id="basic-addon2">%</span>
                                    </div>
                                </div>

                                <div class="form-group col-xl-12">
                                    <label for="kd_kategori" class="col-form-label">Deskripsi:</label>
                                    <textarea name="deskripsi" id="ckeditor" class="ckeditor text-editor"><?php echo $row->deskripsi;?></textarea>
                                </div>

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Ubah</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Modal HAPUS -->
                <div class="modal fade" id="hapus<?php echo $row->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">HAPUS PENGGUNA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form class="form-horizontal" method="post" action="produk/hapus_produk">
                            <div class="modal-body">
                            <p>Anda yakin mau menghapus Produk <b><?php echo $row->nama_produk;?></b></p>
                            </div>
                            <div class="modal-footer">
                            <input type="hidden" name="id" value="<?php echo $row->id;?>">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button class="btn btn-danger">Hapus</button>
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
  
  <!-- Modal ADD -->
  <div class="modal fade bd-example-modal-lg" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">TAMBAH PRODUK</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="produk/tambah_produk" enctype="multipart/form-data" method="POST">
            
            <div class="row">
                <div class="form-group col-xl-6">
                    <label for="nama_produk" class="col-form-label">Judul:</label>
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Judul.." required>
                </div>

                <div class="form-group col-xl-6">
                    <label for="kd_kategori" class="col-form-label">Kategori:</label>
                    <select class="form-control" name="kd_kategori">
                        <option disabled selected> PILIH </option>
                        <?php foreach($kategori as $row){ ?>
                            <option value="<?php echo $row->id ?>"> <?php echo $row->nama_kategori ?> </option>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="form-group col-xl-4">
                    <label class="col-form-label">Berat:</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="berat">
                        <span class="input-group-text" id="basic-addon2">kg</span>
                    </div>
                </div>

                <div class="form-group col-xl-5">
                    <label class="col-form-label">Harga:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2">Rp. </span>
                        <input type="number" class="form-control" name="harga">
                        <span class="input-group-text bg-white" id="basic-addon2">/PCS</span>
                    </div>
                </div>

                <div class="form-group col-xl-3">
                    <label class="col-form-label">Diskon:</label>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="diskon" value="0">
                        <span class="input-group-text bg-white" id="basic-addon2">%</span>
                    </div>
                </div>

                <div class="form-group col-xl-12">
                    <label for="cover" class="col-form-label">Cover:</label>
                    <input type="file" class="form-control" id="cover" name="cover" placeholder="Cover.." required>
                </div>

                <div class="form-group col-xl-12">
                    <label for="kd_kategori" class="col-form-label">Deskripsi:</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text btn-warning"><i class="icon-picture">  Upload</i></span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="form-control" name="pic[]" required  multiple />
                        </div>
                    </div>
                    <textarea name="deskripsi" id="ckeditor" class="ckeditor text-editor" ></textarea>
                </div>
            </div>
            
            </br>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" value="Cek">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>