<div class="content-wrapper">
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><center>Data Admin<center></h3>
      </div>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <th>No</th>
            <th>Username</th>
            <th>Created</th>
            <th>Aksi</th>
          </thead>
          
          <tbody>
            <?php foreach($admin->result() as $index => $row){ ?>
              <tr>
              <td><?=($index+1)?></td>
              <td><?=$row->username?></td>
              <td><?=$row->created?></td>
              <td>
                <button type="button" class="btn btn-warning btn-show-admin" data-toggle="modal" data-target="#modal-admin" data-id="<?= $row->id?>">
                  <i class="fa fa-search"></i> Detail
                </button>
                <a href="<?= base_url('admin/edit/'.$row->id)?>admin/edit">
                <button class="btn btn-sm btn">
                  <i class="fa fa-refresh"></i> Edit
                </button>
                </a>
                <a href="<?= base_url('admin/delete/'.$row->id)?>admin/delete">
                <button class="btn btn-sm btn-danger">
                  <i class="fa fa-eraser"></i> Delete
                </button>
                </a>            
              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
        <div class="modal fade" id="modal-admin">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Detail Admin</h4>
              </div>
              <div class="modal-body-admin">

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>

    </div>
  </section>
</div>