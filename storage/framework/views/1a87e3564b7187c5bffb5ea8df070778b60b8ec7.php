   
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit Produk</h2>
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
    
    
    <form action="<?php echo e(route('produk.update',$produk->id_produk)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Produk:</strong>
                    <input type="text" name="nama_produk" value="<?php echo e($produk->nama_produk); ?>" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Harga Produk:</strong>
                    <input type="number" name="harga_produk" value="<?php echo e($produk['harga_produk']); ?>" class="form-control" >
                </div>
                <div class="form-group">
                    <strong>Jumlah Produk:</strong>
                    <input type="number" name="jumlah_produk" value="<?php echo e($produk['jumlah_produk']); ?>" class="form-control" >
                </div>
                <div class="form-group">
                    <strong>Kategori :</strong>
                    <select name="id_kategori" class="form-control">
                      
                      <?php $__currentLoopData = $data_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($kat['id_kategori']); ?>" <?php echo e(($produk['id_kategori'] === $kat['id_kategori'])?'selected' : ''); ?>><?php echo e($kat['nama_kategori']); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </select>
                </div>
                <div class="form-group">
                    <strong>Variasi :</strong>
                    <select name="id_variasi" class="form-control">
                      
                      <?php $__currentLoopData = $data_variasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($var['id_variasi']); ?>" <?php echo e(($produk['id_variasi'] === $var['id_variasi'])?'selected' : ''); ?>><?php echo e($var['nama_variasi']); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/DCIM/laravel-website/resources/views/produk/edit.blade.php ENDPATH**/ ?>