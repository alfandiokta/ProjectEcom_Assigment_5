<div class="container fluid">
    <h3><i class="fa fa-edit"></i>Edit Data Produk</h3>

    <?php foreach($produk as $item) : ?>
        
        <form method="post" action="<?php echo base_url().'admin/data_barang/update'?>">
            <div class="form-group">
            <label for="" class="">Id Produk</label>
            <input type="hidden" name="id_produk"class="form-control"
            value="<?php echo $item->id_produk?>">
            </div>
            <div class="form-group">
            <label for="" class="">Nama Produk</label>
            <input type="text" name="nama_produk"class="form-control"
            value="<?php echo $item->nama_produk?>">
            </div>
            <div class="form-group">
            <label for="" class="">Detail</label>
            <input type="text" name="deskripsi"class="form-control"
            value="<?php echo $item->deskripsi?>">
            </div>
            <div class="form-group">
            <label for="" class="">Kategori</label>
            <input type="text" name="kategori"class="form-control"
            value="<?php echo $item->kategori?>">
            </div>
            <div class="form-group">
            <label for="" class="">Harga</label>
            <input type="text" name="harga"class="form-control"
            value="<?php echo $item->harga?>">
            </div>
            <button type="submit" class="btn btn-primary btn-sm-3">
            Simpan</button>
        
        </form>
        <?php endforeach; ?>

</div>