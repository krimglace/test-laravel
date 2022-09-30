<?php ?>

<?php $__env->startSection('content'); ?>

<div class="container">
  <h2>Data Kategori Produk</h2>
  
  <div class="row">
    <div class="col-sm">
      <a href="#" class="btn btn-primary">Tambah Kategori</a>
    </div>
    <br><br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th colspan="2" class="text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        
        <?php $__currentLoopData = $data_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ktg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($ktg['id_kategori']); ?></td>
          <td><?php echo e($ktg['nama_kategori']); ?></td>
          <td class="text-center"><a href="#" class="btn btn-warning">Edit</a></td>
          <td class="text-center">
            <form action="#" method="post">
              <?php echo e(csrf_field()); ?>

              <input type="hidden" name="_method" value="DELETE"/>
              
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/DCIM/laravel-website/resources/views/Kategori.blade.php ENDPATH**/ ?>