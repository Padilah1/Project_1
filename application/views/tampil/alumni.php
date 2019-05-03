 <div class="content-wrapper">
  <section class="content-header">
    <h1> Mahasiswa<small>Alumni</small> </h1>
  </section>
  <section class="content">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><center>Data Alumni<center></h3>
      </div>
    <div class="box-body">
        <table border="1"id="example1" class="table table-bordered text-center">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jurusan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($alumni->result() as $index => $row){ ?>
              <tr>
                <td><?=($index+1)?></td>
                <td><?=$row->nama?></td>
                <td><?=$row->jurusan?></td>
                <td>
                  <button type="button" class="btn btn-sm btn-warning btn-show-alumni" data-toggle="modal" data-target="#modal-default" data-id="<?= $row->id?>">
                  <i class="fa fa-search"></i> Detail
                </button>
                  <a href="<?= base_url('alumni/edit/'.$row->id)?>">
                  <button class="btn btn-sm btn">
                    <i class="fa fa-refresh"></i> Edit
                  </button>
                  </a>
                  <a href="<?= base_url('alumni/delete/'.$row->id)?>">
                  <button class="btn btn-sm btn-danger">
                    <i class="fa fa-eraser"></i> Delete
                  </button>
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>

        <div class="modal fade" id="modal-default" role="dialog">
          <div class="modal-dialog">
            
          </div>
        </div>
    </div>
  </section>
</div>
