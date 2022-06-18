<section class="content" style="position: relative;">

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <form action="#" method="post">
                    <input type="hidden" name="act" id="act" value="edit">
                    <input type="hidden" name="id" value="0" id="target_id">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modelTitle">Edit User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body row g-3">
                                <div class="col-md-6">
                                    <label for="inputUsername" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="inputUsername" name="username">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword" class="form-label">Password</label>
                                    <input type="text" class="form-control" id="inputPassword" name="password">
                                </div>
                                <div class="col-12">
                                    <label for="inputName" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="inputName" name="name">
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" name="email">
                                </div>
                                <div class="col-12">
                                    <label for="inputLevel" class="form-label">Level</label>
                                    <input type="text" class="form-control" id="inputLevel" name="level">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card" style="border-top: 3px solid #4692BF;">
                <div class="card-header clear-after" style="display: flex; justify-content: space-between; align-items: center;">
                    <h3 class="card-title d-block">Daftar User</h3>
                    <div><button type="button" class="btn btn-primary" id="add-user">Add User</button></div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="jsGrid1" class="jsgrid" style="position: relative; height: 100%; width: 100%;">
                        <div class="jsgrid-grid-header">
                            <table class="jsgrid-table">
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell" style="width: 90px;">No</th>
                                    <th class="jsgrid-header-cell" style="width: 150px;">User Name</th>
                                    <th class="jsgrid-header-cell" style="width: 150px;">Password</th>
                                    <th class="jsgrid-header-cell" style="width: 150px;">Name</th>
                                    <th class="jsgrid-header-cell" style="width: 150px;">Email</th>
                                    <th class="jsgrid-header-cell" style="width: 150px;">Level</th>
                                    <th class="jsgrid-header-cell" style="width: 150px;">Aksi</th>
                                </tr>
                                <tbody>
                                    <?php  $i =1; foreach($users as $user):?>
                                    <tr class="jsgrid-row">
                                        <td class="jsgrid-cell" style="width: 90px;"><?php echo $i; $i++;?></td>
                                        <td class="jsgrid-cell" style="width: 150px;"><?php echo $user->usernama; ?></td>
                                        <td class="jsgrid-cell" style="width: 150px;"><?php echo $user->password; ?></td>
                                        <td class="jsgrid-cell" style="width: 150px;"><?php echo $user->name; ?></td>
                                        <td class="jsgrid-cell" style="width: 150px;"><?php echo $user->email; ?></td>
                                        <td class="jsgrid-cell" style="width: 150px;"><?php echo $user->level; ?></td>
                                        <td class="jsgrid-cell" style="width: 150px;">
                                            <button class="cus-btn-edit" style="border: none; outline: none; background-color: transparent;" user-id="<?php echo $user->id?>">
                                                <i style="color: blue; margin-right: 5px;" class="fas fa-edit"></i>
                                            </button>
                                            <button class="cus-btn-trash" style="border: none; outline: none; background-color: transparent;" user-id="<?php echo $user->id?>"><i style="color: blue;" class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                        <div class="jsgrid-load-shader" style="display: none; position: absolute; inset: 0px; z-index: 1000;"></div>
                        <div class="jsgrid-load-panel" style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...</div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>