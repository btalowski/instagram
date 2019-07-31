<?php $__env->startSection('content'); ?>
<div class="container">
    <div class ="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fktw1-1.fna.fbcdn.net/vp/2d82fddfc374b411ab6a566923f31481/5DB94318/t51.2885-19/s150x150/55837776_379384389454688_4456240822588801024_n.jpg?_nc_ht=instagram.fktw1-1.fna.fbcdn.net" class="rounded-circle">
    </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1><?php echo e($user->username); ?></h1>
                <a href="#">Dodaj nowego posta</a>
                </div> 
                    <div class="d-flex">
                        <div class="pr-5">Posty: <strong>100</strong></div>
                        <div class="pr-5"><strong>66 </strong>obserwujących</div>
                        <div class="pr-5">Obserwowni: <strong>7</strong></div>
                    </div> 
                    <div class="pt-4 font-weight-bold"><?php echo e($user->profile->title); ?></div>
                    <div><?php echo e($user->profile->description); ?></div>
                        <div><a href="#"><?php echo e($user->profile->url); ?></a></div>
                  
    </div>
    </div>
            <div class="row pt-5">
                <div class="col-4">
                    <img src="https://instagram.fktw1-1.fna.fbcdn.net/vp/7d7578cf66ce0f6f20fb55169474344b/5DED128E/t51.2885-15/sh0.08/e35/s640x640/58409318_2321705324780194_7950002896366659890_n.jpg?_nc_ht=instagram.fktw1-1.fna.fbcdn.net" class="w-100">
                </div>
                <div class="col-4">
                    <img src="https://instagram.fktw1-1.fna.fbcdn.net/vp/a2a5817c3810a0be143fbf046d62897f/5DC086CF/t51.2885-15/sh0.08/e35/c0.88.812.812a/s640x640/52624230_2030816677032777_3708324491031419355_n.jpg?_nc_ht=instagram.fktw1-1.fna.fbcdn.net" class="w-100">
                </div>
                <div class="col-4">
                    <img src="https://instagram.fktw1-1.fna.fbcdn.net/vp/b4369b69e9a9c5abe80c0c14bc5eb3e3/5DA49847/t51.2885-15/sh0.08/e35/s640x640/34330965_2060131084312954_7170002881930592256_n.jpg?_nc_ht=instagram.fktw1-1.fna.fbcdn.net" class="w-100">
                </div>
                
                
            </div>       
            
            
            
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\bartkoGram\resources\views/home.blade.php ENDPATH**/ ?>