   
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit Kategori</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="<?php echo e(route('kategori.index')); ?>"> Back</a>
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
    
    
    <form action="<?php echo e(route('kategori.update',$kategori->id_kategori)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="nama_kategori" value="<?php echo e($kategori->nama_kategori); ?>" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
   
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/DCIM/laravel-website/resources/views/kategori/edit.blade.php ENDPATH**/ ?>