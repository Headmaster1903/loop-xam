<?php echo $__env->make('parts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- body -->
   <?php echo $__env->make('parts.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end loader -->
         <!-- header -->
         <?php echo $__env->make('parts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- end header inner -->
      <!-- innva -->
      <div class="innva">
         <div class="container">
            <div class="row d_flex">
              <div class="col-md-6">
                <div class="titlepage text_align_justify">
                  <h2>About Us</h2> 
                  <p>Founded in November 2013, Bitaccess is a privately held technology company 
                    headquartered in Ottawa, Ontario, Canada. From start-ups to Fortune 500 companies, 
                    Bitaccess provides software services to power Fintech businesses in over 15 countries. 
                    Our customers rely on Bitaccess software and services to power their core infrastructure, 
                    compliance, security and support services.

                    <br><br>
                      
                    Bitaccess aims to simplify and enhance the experience of investing in cryptocurrencies. We enable users to enter the crypto market with zero learning curve required, and we help construct diversified portfolios with the aim to maximize 
                      returns while maintaining your preferred risk profile.

                      <br><br>
                      The cryptocurrency market is complex, young and high volatile
                          . Bitaccess has your best interest at heart and will only charge
                          you when your investment hits profit margin of 85%
                      </p>
                  <!--<a class="read_more" href="javascript:void(0)">Read More</a>-->
                </div>
              </div>
              <div class="col-md-6">
                <div class="innva_img">
                  <figure><img src="home/images/innva.png" alt="#"/></figure>
                </div>
              </div>
            </div>
         </div>
      </div>
      <!-- end innva -->

      <!--mission-->
      <?php echo $__env->make('parts.mission', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!--end of mission-->


      <!-- footer -->
      <?php echo $__env->make('parts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('parts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u886879462/domains/bit-access.host/public_html/core/resources/views/about.blade.php ENDPATH**/ ?>