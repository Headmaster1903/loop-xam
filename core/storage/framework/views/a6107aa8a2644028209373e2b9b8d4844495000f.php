<?php echo $__env->make('user.inc.fetch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>


    <div class="main-panel">
        <div class="content">
            <?php ($breadcome = __('messages.cb_paymt')); ?>
            <?php echo $__env->make('user.atlantis.main_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="page-inner mt--5">                   
                <div id="prnt"></div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title"><?php echo e(__('messages.dpt_u_cb')); ?></div>
                                    <div class="card-tools">                                            
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php if(!Session::has('coinbase_charge')): ?>
                                    <div class="row">  
                                        <div class="col-md-7">
                                            <div class="panel-body">

                                                <form class="form-horizontal" method="POST" role="form" action="<?php echo URL::route('coinbase.paybtcamt'); ?>" >
                                                    <?php echo csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label for="amount" class="col-md-4 control-label"><?php echo e(__('messages.enter_amt')); ?></label>
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><b><?php echo e(env('CURRENCY')); ?></b></span>
                                                                </div>
                                                                <input id="amount" type="number" class="form-control" name="amount" required autofocus>                    
                                                            </div>
                                                            <?php if(Session::has('err')): ?>
                                                                <span class="help-block text-danger">
                                                                    <strong><?php echo e(Session::get('err')); ?></strong>
                                                                </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-md-offset-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                <?php echo e(__('messages.pay_now')); ?>

                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="col-md-5" align="center"><br>
                                            <i class="fab fa-bitcoin fa-4x text-info"></i>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if(Session::has('coinbase_charge')): ?>
                                    <?php ($coinbase_charge = Session::get('coinbase_charge')); ?>
                                    <div class="row">  
                                        <div class="col-md-8">
                                            <div class="panel-body">
                                                <div class="form-group<?php echo e($errors->has('amount') ? ' has-error' : ''); ?>">
                                                    <label for="amount" class="col-md-4 control-label"><?php echo e(__('messages.cb_dpt_trans')); ?></label>
                                                    <div class="col-md-12 text-center border p-3 bg_grey">
                                                        <div class="h4">
                                                            <b><i class="fab fa-bitcoin"></i><?php echo e(__('messages.btc')); ?>:</b> <?php echo e($coinbase_charge['pricing']['bitcoin']['amount']); ?> 
                                                        </div>                                                       
                                                        <b><?php echo e(__('messages.adr')); ?>:</b> <?php echo e($coinbase_charge['addresses']['bitcoin']); ?> 
                                                    </div>
                                                   
                                                    <div>
                                                        <p class="text-danger">
                                                            <?php echo e(__('messages.cb_chrg_info')); ?>                                                            
                                                        </p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4" align="center"><br>
                                            <i class="fab fa-bitcoin fa-4x text-info"></i>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <a href="/<?php echo e($user->username); ?>/wallet" class="btn btn-primary">
                                                    <?php echo e(__('messages.bck')); ?>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>

        <?php echo $__env->make('user.inc.confirm_inv', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
            
<?php echo $__env->make('layouts.atlantis.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u886879462/domains/bit-access.host/public_html/core/resources/views/user/pay_coinbase_amt.blade.php ENDPATH**/ ?>