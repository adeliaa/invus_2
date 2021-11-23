
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo site_url('admin/index'); ?>">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
  </ol>

</nav>
		<div class="container text-center">
      <div class="col-md-1" style="margin-bottom:2%">
        <a href="<?= site_url('admin/add_barang'); ?>" class="btn btn-dark rounded">Tambah Barang</a>
      </div>
		<table class="table table-hover table-light">
  <thead>
    <tr>
      <th scope="col">Foto Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Kondisi Barang</th>
      <th scope="col">Stok</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($tb_barang as $barang){

      $breadcumbs = ""
      ?>
      <tr>
      <td><img style="width:100px" src="<?php echo base_url(); ?>assets/img/<?php echo $barang->gambar?>"></th>
      <td><?php echo $barang->nama_barang?></td>
      <td><?php echo $barang->kondisi?></td>
      <td><?php echo $barang->stok?></td>
      <td><a class="btn btn-primary btn-sm" href="<?php echo site_url('admin/edit_barang/'.$barang->id_barang);?>" class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>

    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>