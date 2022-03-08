<?= $this->extend('layouts/admin')?>
<?= $this->section('content')?>
<?php
    if(session()->getFlashdata('success')){
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?=session()->getFlashdata('success')?>
        <button type="button" class="close" data-dismiss="alert" aria-label="close">Success</button>
        </div>
        <?php
    }
        ?>
<div class="container">
    <h3>Data User</h3>
    <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addUser">Tambah Data</button>
   
    <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Role</th>
            <th>Option</th>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($data as $row):
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row['nama']?></td>
                <td><?=$row['username']?></td>
                <td><?=$row['role']?></td>
                <td>
                <a href="#"  class="btn btn-info btn-sm btn-edit" data-toggle="modal" data-target="#editUser-<?=$row['id']?>">Edit</a>
                    <a href="<?= base_url('Usercontroller/delete/'.$row['id'])?>" onclick="return confirm('Yakin Akan Dihapus')" class="btn btn-danger btn-sm btn-delete">Hapus</a>
                </td>
            </tr>
            <form action="<?=base_url('user/edit/'.$row['id'])?>" method="post">
            <div class="modal fade"id="editUser-<?=$row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                

                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama User</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama User" value="<?=$row['nama']?>">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?=$row['username']?>">
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input type="text" class="form-control" name="password" placeholder="Password" value="<?=$row['password']?>">
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="kasir"<?=$row['role']=="kasir"?"checked":""?>>
                            <label class="form-check-label" type="flexRadioDefault1">Kasir</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" value="manager"<?=$row['role']=="manager"?"checked":""?>>
                            <label class="form-check-label" type="flexRadioDefault2">Manager</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioDefault3" value="admin"<?=$row['role']=="admin"?"checked":""?>>
                            <label class="form-check-label" type="flexRadioDefault3">Admin</label>
                        </div>
                    </div>
                </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</form>
            <?php
            $no++;
            endforeach?>
        </tbody>
    </table>
</div>

<!-- Add product -->
<!-- <form action="/UserController/simpan" method="post"> -->
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?=base_url('users')?>" method="post">

                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama User</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama User">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                    <label>User</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="kasir">
                            <label class="form-check-label" type="flexRadioDefault1">Kasir</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" value="manager">
                            <label class="form-check-label" type="flexRadioDefault2">Manager</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="flexRadioDefault3" value="admin">
                            <label class="form-check-label" type="flexRadioDefault3">Admin</label>
                        </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- </form> -->

            <?= $this->endSection()?>
