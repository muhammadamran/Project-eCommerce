<div id="content" class="content">
  <ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="<?php echo base_url('pengguna');?>">User</a></li>
  </ol>
  <h1 class="page-header">Data User</h1>
  <div class="row">
    <div class="col-xl-12">
      <div class="panel panel-inverse">
        <div class="panel-heading">
          <h4 class="panel-title">
            <span><a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#addpeg">TAMBAH</a></span>
          </h4>
          <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
          </div>
        </div>
        <?php if($this->session->flashdata('pengguna') != NULL){ ?>
        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Notif!</strong> <?php echo $this->session->flashdata('pengguna') ?>
        </div>
        <?php } ?>
        <div class="panel-body">
          <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
            <thead>
              <tr>
                <th class="text-nowrap">No</th>
                <th class="text-nowrap">Username</th>
                <th class="text-nowrap">Email</th>
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
                <td><?= $row->username == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row->username ?></td>
                <td><?= $row->email == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row->email ?></td>
                <td><?= $row->status == 1 ? "<label class='label label-success'>Aktif</label>" : "<label class='label label-warning'>Non-Aktif</label>" ?></td>
                <td>
                    <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editpeg<?php echo $row->id_user;?>"><i class="fa fas fa-edit"></i></a>
                    <a href="#" class="btn btn-sm btn-danger" style="color:#fff;cursor:pointer" data-toggle="modal" data-target="#hapuspeg<?php echo $row->id_user;?>"><i class="fa fas fa-trash"></i></a>
                    <!-- <a href="#" class="btn btn-sm btn-secondary"><i class="fa fas fa-lock"></i></a> -->
                </td>
              </tr>
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
  <div class="modal fade" id="addpeg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">TAMBAH PENGGUNA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="pengguna/tambah_pengguna" method="POST">
            <center>
              <img src="https://ptsp.bmkg.go.id/resources/frontend/images/user.png" width="128px" height="128px"/>
            </center>
            </br>
            <div class="row">
              <div class="form-group col-xl-4">
                <label for="username" class="col-form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username.." required>
              </div>
              <div class="form-group col-xl-4">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email.." required>
              </div>
              <div class="form-group col-xl-4">
                <label for="role" class="col-form-label">Akses:</label>
                  <select class="form-control" name="role" id="role" required>
                    <option disabled selected> Pilih Akses </option>
                    <option value="Superadmin">Superadmin</option>
                    <option value="Admin">Admin</option>
                    <option value="Member">Member</option>
                  </select>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xl">
                <label for="nama_depan" class="col-form-label">Nama Depan:</label>
                <input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="Nama Depan.." required>
              </div>
              <div class="form-group col-xl">
                <label for="nama_belakang" class="col-form-label">Nama Belakang:</label>
                <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang.." required>
              </div>
            </div>
            
            <div class="row">
              <div class="form-group col-xl">
                <label for="no_hp" class="col-form-label">Handphone:</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Handphone.." required>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xl-6">
                <label for="password" class="col-form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="****" required>
              </div>
              <div class="form-group col-xl-6">
                <label for="konfirmasi_password" class="col-form-label">Konfirmasi Password:</label>
                <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" placeholder="****" required>
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

  <?php
    foreach($data as $row){
  ?>
  <!-- Modal EDIT -->
  <div class="modal fade" id="editpeg<?php echo $row->id_user;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">EDIT PENGGUNA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="pengguna/edit_pengguna" method="POST">
            <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $row->id_user;?>">

            <center>
              <img src="https://ptsp.bmkg.go.id/resources/frontend/images/user.png" width="128px" height="128px"/>
            </center>
            </br>

            <div class="row">
              <div class="form-group col-xl-4">
                <label for="username" class="col-form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $row->username;?>" placeholder="Username.." required>
              </div>
              <div class="form-group col-xl-4">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row->email;?>" placeholder="Email.." required>
              </div>
              <div class="form-group col-xl-4">
                <label for="role" class="col-form-label">Akses:</label>
                  <select class="form-control" name="role" id="role" required>
                    <option value="<?php echo $row->role;?>" selected> ( <?php echo $row->role;?> ) </option>
                    <option value="Superadmin">Superadmin</option>
                    <option value="Admin">Admin</option>
                    <option value="Member">Member</option>
                  </select>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xl">
                <label for="nama_depan" class="col-form-label">Nama Depan:</label>
                <input type="text" class="form-control" id="nama_depan" name="nama_depan" value="<?php echo $row->nama_depan;?>" placeholder="Nama Depan.." required>
              </div>
              <div class="form-group col-xl">
                <label for="nama_belakang" class="col-form-label">Nama Belakang:</label>
                <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" value="<?php echo $row->nama_belakang;?>" placeholder="Nama Belakang.." required>
              </div>
            </div>
            
            <div class="row">
              <div class="form-group col-xl">
                <label for="no_hp" class="col-form-label">Handphone:</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $row->no_hp;?>" placeholder="Handphone.." required>
              </div>
              <div class="form-group col-xl">
                <label for="status" class="col-form-label">Status:</label>
                  <select class="form-control" name="status" id="status" required>
                    <option value="<?php echo $row->status;?>" selected> ( <?= $row->status == 1 ? "<label>Aktif</label>" : "<label>Non-Aktif</label>" ?> ) </option>
                    <option value="1">Aktif</option>
                    <option value="0">Non Aktif</option>
                  </select>
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
  <div class="modal fade" id="hapuspeg<?php echo $row->id_user;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">HAPUS PENGGUNA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="pengguna/hapus_pengguna">
            <div class="modal-body">
              <p>Anda yakin mau menghapus Pengguna <b><?php echo $row->username;?></b></p>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id_user" value="<?php echo $row->id_user;?>">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
              <button class="btn btn-danger">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

</div>

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