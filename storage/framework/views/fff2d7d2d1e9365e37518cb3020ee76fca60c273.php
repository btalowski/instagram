<?php $titleTag = htmlspecialchars($post->title); ?>
<?php $__env->startSection('title', "| $titleTag"); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/<?php echo e($post->image); ?>" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="<?php echo e($post->user->profile->profileImage()); ?>" class="rounded-circle w-100" style="max-width: 40px;">
                    </div>
                    <div>
                         <div class="font-weight-bold">
                             <a href="/profile/<?php echo e($post->user->id); ?>">
                               <span class="text-dark"><?php echo e($post->user->username); ?></span>  
                             </a>
                             
                         </div> 
                    </div>
                </div>
                
                <hr>
                
                
                
                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/<?php echo e($post->user->id); ?>">
                            <span class="text-dark"><?php echo e($post->user->username); ?></span>
                        </a>
                    </span> <?php echo e($post->caption); ?>

                </p>
            </div>
            <div class="interaction">
                        <a href="#" class="like"><?php echo e(Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 1 ? 'Ten post Ci się podoba' : 'Lubię to !' : 'Lubię to !'); ?></a> |
                        <a href="#" class="like"><?php echo e(Auth::user()->likes()->where('post_id', $post->id)->first() ? Auth::user()->likes()->where('post_id', $post->id)->first()->like == 0 ? 'Ten post Ci się nie podoba' : 'Słabe' : 'Słabe'); ?></a>
                
            </div>
           
            
                    
                
            <hr>
             
        <h3>Komentarze</h3>
        <?php if(Auth::check()): ?>

            <?php echo e(Form::open(['route' => ['comments.store'], 'method' => 'POST'])); ?>

            <p><?php echo e(Form::textarea('body', old('body'))); ?></p>
            <?php echo e(Form::hidden('post_id', $post->id)); ?>

            <p><?php echo e(Form::submit('Zatwierdź')); ?></p>
          <?php echo e(Form::close()); ?>

          <?php endif; ?>
          <?php $__empty_1 = true; $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <div>
            <p><?php echo e($comment->user->name); ?> <?php echo e($comment->created_at); ?></p>
            <p><?php echo e($comment->body); ?></p>
            
            <?php $__env->startPush('body'); ?>
            <script>
               alert($comment->user->name);
               alert(Auth::user()->name);
                
                </script>
                <?php $__env->stopPush(); ?>
           <?php if($comment->user->name==Auth::user()->name || $post->user_id==Auth::user()->id): ?>
         <?php echo e(Form::open(['route' => ['comments.destroy', $comment->id, $post->id], 'method' => 'DELETE'])); ?>

				<?php echo e(Form::submit('usuń komentarz', ['class' => 'btn btn-mid btn-block btn-danger'])); ?>

			<?php echo e(Form::close()); ?>

                        <?php endif; ?>
            <hr></div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <p>Nie ma jeszcze żadnego komentarza.</p>
          <?php endif; ?>
	
<span><?php echo e($post->comments->count()); ?> <?php echo e(str_plural('comment', $post->comments->count())); ?></span>
        </div>
    </div>
</div>
 <script type="text/javascript">
        var token = '<?php echo e(Session::token()); ?>';
        var urlLike = '<?php echo e(route('like')); ?>';
        </script> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Bartek\bartkoGram\resources\views/posts/show.blade.php ENDPATH**/ ?>