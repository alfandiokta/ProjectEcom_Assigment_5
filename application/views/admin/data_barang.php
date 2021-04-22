<div class="container-fluid">
<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_data"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>

<table class="table table-bordered">
    <tr id= "main_heading">
        <th width="2%">No</th>
        <th >Id</th>
        <th >Nama Barang</th>
        <th width="10%">Gambar</th>
        <th >Detail</th>
        <th >Kategori</th>
        <th >Harga</th>
        <th colspan="3">Aksi</th>
    </tr>

    <?php  
    $no=1; 
    foreach($produk as $item) :
    ?>

    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $item['id_produk']; ?></td>
        <td><?php echo $item['nama_produk']; ?></td>
        <td><img class="img-fluid max-width: 10%;" src="<?php echo base_url() . 'assets/images/'.$item['gambar']; ?>"/></td>
        <td><?php echo $item['deskripsi']; ?></td>
        <td><?php echo $item['kategori']; ?></td>
        <td><?php echo $item['harga']; ?></td>
        
        <td> <a href="<?php echo base_url();?>admin/data_barang/edit/<?php echo $item['id_produk'];?>"class="btn btn-primary btn-sm">Edit</i></a>
        </td> 
        <td> <a href="<?php echo base_url();?>admin/data_barang/hapus/<?php echo $item['id_produk'];?>"class="btn btn-danger btn-sm">Hapus</i></a>
        </td> 
    </tr>
    <?php endforeach;?>

</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi';?>"
        method="post" enctype="multipart/form-data">
            <div class="form-group">
            <label for="" class="">Id</label>
            <input type="text" name="id_produk"class="form-control">
            </div>
            <div class="form-group">
            <label for="" class="">Nama Barang</label>
            <input type="text" name="nama_produk"class="form-control">
            </div>
            <div class="form-group">
            <label for="" class="">Detail</label>
            <input type="text" name="deskripsi"class="form-control">
            </div>
            <div class="form-group">
            <label for="" class="">Kategori</label>
            <input type="text" name="kategori"class="form-control">
            </div>
            <div class="form-group">
            <label for="" class="">Harga</label>
            <input type="number" name="harga" class="form-control">
            </div>
            <div class="form-group">
            <label for="" class="">Gambar</label><br>
            <input type="file" name="gambar"class="form-control">
            </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
      
    </div>
  </div>
</div>