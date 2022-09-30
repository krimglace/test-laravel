<?php ?>

<?php $__env->startSection('content'); ?>

<div class="container">
  <h2>Data Produk</h2>
  
  <div class="row">
    <div class="col-sm">
      <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Produk</a>
    </div>
    <br><br>
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Harga</th>
          <th colspan="3" class="text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        
        <?php $i = 1; ?>
        <?php $__currentLoopData = $data_produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
          <td><?php echo e($i++); ?></td>
          <td><?php echo e($prd['nama_produk']); ?></td>
          <td><?php echo e($prd['harga_produk']); ?></td>
          <td class="text-center"><a href="<?php echo e(route('produk.show',$prd->id_produk)); ?>" class="btn btn-primary">Lihat</a></td>
          <td class="text-center"><a href="<?php echo e(route('produk.edit',$prd->id_produk)); ?>" class="btn btn-warning">Edit</a></td>
          <td class="text-center">
            <form action="<?php echo e(route('produk.destroy',$prd->id_produk)); ?>" method="post">
              <?php echo e(csrf_field()); ?>

              <?php echo method_field('DELETE'); ?>
              <button type="submit" class="btn btn-danger">
                Delete
              </button>
            </form>
          </td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
      </tbody>
    </table>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo e(route('produk.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="modal-body">
        <label for="nama_produk">Nama Produk</label>
        <input type="text"name="nama_produk"class="form-control"></input>
        <br>
        
        <label for="harga_produk">Harga Produk</label>
        <input type="number"name="harga_produk"class="form-control"></input>
        <br>
        
        <label for="jumlah_produk">Jumlah Produk</label>
        <input type="number"name="jumlah_produk"class="form-control"></input>
        <br>
        
        <label for="id_variasi">Variasi</label>
        <select name="id_variasi" class="form-control">
          <?php $__currentLoopData = $data_variasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $var): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
          <option value="<?php echo e($var['id_variasi']); ?>">
            <?php echo e($var['nama_variasi']); ?>

          </option>
          
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <br>
        
        <label for="id_kategori">Kategori</label>
        <select name="id_kategori" class="form-control">
        <?php $__currentLoopData = $data_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
          <option value="<?php echo e($kat['id_kategori']); ?>">
            <?php echo e($kat['nama_kategori']); ?>

          </option>
          
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <br>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/DCIM/laravel-website/resources/views/Produk/Index.blade.php ENDPATH**/ ?>