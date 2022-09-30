<?php $__env->startSection('content'); ?>

<div class="container">
  <h2>Data Kategori Produk</h2>
  
  <div class="row">
    <div class="col-sm">
      <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Kategori</a>
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
          <th>ID</th>
          <th>Nama</th>
          <th colspan="2" class="text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        
        <?php $i = 1; ?>
        <?php $__currentLoopData = $data_kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ktg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
          <td><?php echo e($i++); ?></td>
          <td><?php echo e($ktg['id_kategori']); ?></td>
          <td><?php echo e($ktg['nama_kategori']); ?></td>
          <td class="text-center"><a href="<?php echo e(route('kategori.edit',$ktg->id_kategori)); ?>" class="btn btn-warning">Edit</a></td>
          <td class="text-center">
            <form action="<?php echo e(route('kategori.destroy',$ktg->id_kategori)); ?>" method="post">
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kategori</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo e(route('kategori.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="modal-body">
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text"name="nama_kategori"class="form-control"></input>
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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/DCIM/laravel-website/resources/views/Kategori/Index.blade.php ENDPATH**/ ?>