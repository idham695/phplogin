<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>

            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#NewMenuModal">Add New Menu</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $m['menu']; ?></td>
                            <td>
                                <a href="" data-toggle="modal" data-target="#editMenuModal<?= $m['id']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url('menu/deletemenu/'); ?><?= $m['id']; ?>" class="badge badge-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


</div>

<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="NewMenuModal" tabindex="-1" role="dialog" aria-labelledby="NewMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NewMenuModalLabel">Add New Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('menu') ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" placeholder="Menu Name" name="menu">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="Submit" class="btn btn-primary">Add</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- edit Modal -->
<?php foreach ($menu as $m) : ?>
    <div class="modal fade" id="editMenuModal<?= $m['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMenuModalLabel">Edit Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('menu/editmenu') ?>" method="post">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="menu" placeholder="Menu Name" name="id" value="<?= $m['id']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="menu" placeholder="Menu Name" name="menu" value="<?= $m['menu']; ?>">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>