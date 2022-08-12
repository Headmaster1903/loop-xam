<?php
    $st = App\site_settings::find(1);
?>
<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
	<title><?php echo e(__('messages.wd_not_ttl')); ?></title>
</head>
<body>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="border:1px solid #CCC; padding:4%; box-shadow:2px 2px 4px 4px #CCC;">
            <div align="">
        		<img src="<?php echo e(env('APP_URL')); ?>/img/<?php echo e($st->site_logo); ?>" style="height:100px; width:100px;" align="center">
        	</div>
        	<h3 align=""><?php echo e(__('messages.wd_not_ttl')); ?> </h3>
        	<p>
        	   <?php echo e(__('messages.hi')); ?>, <b><?php echo e($md['username']); ?></b> <?php echo e(__('messages.wd_req_on')); ?> <?php echo e(env('APP_URL')); ?> <?php echo e(__('messages.has_bn_created')); ?>.
        	   <br>
        	   <?php echo e(__('messages.kdly_att_req')); ?>.
        	</p>
        	<p>
        		<i class="fa fa-certificate"><?php echo e($st->site_title); ?> <?php echo e(__('messages.wd_ivt')); ?>.
        	</p>
        </div>
    </div>
	
</body>
</html><?php /**PATH /home/u160536160/domains/mine-pool.io/public_html/core/resources/views/mail/wd_notification.blade.php ENDPATH**/ ?>