<!-- Begin Page Content -->
<div class="container-fluid">


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <?= form_error('admin', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3" data-toggle="modal" data-target="#newRoleModal"><i class="fas fa-fw fa-plus"></i> Add Role Menu</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($role as $r) : ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $r['role']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-warning"><i class="fas fa-wrench"></i></i>access</a>
                                <a href="" class="badge badge-success" data-toggle="modal" data-target="#changeRoleModal<?= $r['id']; ?>"><i class="far fa-fw fa-edit"></i>edit</a>
                                <a href="<?= base_url(); ?>admin/delete/<?= $r['id']; ?>" onclick="return confirm('Yakin?');" class="badge badge-danger"><i class="far fa-fw fa-trash-alt"></i>delete</a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Role name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $no = 0; ?>
<?php foreach ($role as $r) : $no++; ?>
    <div class="modal fade" id="changeRoleModal<?= $r['id']; ?>" tabindex="-1" aria-labelledby="changeRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changeRoleModalLabel">Change Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/edit/' . $r['id']); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $r['id']; ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="role" name="role" value="<?= $r['role']; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>