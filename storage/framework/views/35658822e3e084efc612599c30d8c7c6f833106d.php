   
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Data Produk</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="<?php echo e(route('produk.index')); ?>"> Kembali</a>
            </div>
        </div>
    </div>
   <br>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    
           <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Produk:</strong>
                    <input disabled type="text" name="nama_produk" value="<?php echo e($produk->nama_produk); ?>" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Harga Produk:</strong>
                    <input disabled="" type="number" name="harga_produk" value="<?php echo e($produk['harga_produk']); ?>" class="form-control" >
                </div>
                <div class="form-group">
                    <strong>Jumlah Produk:</strong>
                    <input disabled="" type="number" name="jumlah_produk" value="<?php echo e($produk['jumlah_produk']); ?>" class="form-control" >
                </div>
                <div class="form-group">
                    <strong>Kategori :</strong>
                    <select disabled="" name="id_kategori" class="form-control">
                      
                      <?php $__currentLoopData = $data_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($kat['id_kategori']); ?>" <?php echo e(($produk['id_kategori'] === $kat['id_kategori'])?'selected' : ''); ?>><?php echo e($kat['nama_kategori']); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </select>
                </div>
                <div class="form-group">
                    <strong>Variasi :</strong>
                    <select disabled="" name="id_variasi" class="form-control">
                      
                      <?php $__currentLoopData = $data_variasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($var['id_variasi']); ?>" <?php echo e(($produk['id_variasi'] === $var['id_variasi'])?'selected' : ''); ?>><?php echo e($var['nama_variasi']); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <h3><strong>Foto Produk</strong></h3>
              <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Tambah Foto</button>
            </div>
            <?php $__currentLoopData = $data_gambar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gbr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($gbr['id_produk'] == $produk['id_produk']): ?>
                <img width="18rem" src="<?php echo e(url('assets/images/'.$gbr['link_gambar_produk'])); ?>"/>
                <br>
                
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Gambar Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo e(route('gambar.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="modal-body">
        <label for="link_gambar_produk">Gambar/Foto</label>
        <input type="hidden"name="id_produk" value="<?php echo e($produk['id_produk']); ?>" class="form-control"></input>
        <input type="file"name="link_gambar_produk"class="form-control"></input>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/DCIM/laravel-website/resources/views/produk/Show.blade.php ENDPATH**/ ?>