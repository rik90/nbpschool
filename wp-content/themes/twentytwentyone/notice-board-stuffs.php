<?php /* Template Name: NBPS Stuffs Notice Board Page */ ?>
<?php get_header('nbps'); ?> 
<style>
    .banner-area {
        background: rgba(0, 0, 0, 0) url(<?php the_post_thumbnail_url(); ?>) no-repeat scroll center center / cover !important;
        position: relative;
        width: 100%;
        z-index: 1;
    }
</style>        
        <div class="banner-area-wrapper">
            <div class="banner-area text-center" >	
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                <?php the_title( '<h2>', '</h2>' ); ?>
                                <?php // twenty_twenty_one_post_thumbnail(); ?>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="container">
            <div class="row">
                <div class="sliderrowarea">
                    <marquee attribute_name = "attribute_value"....more attributes> <p>Early Bird Admissions Started! Join World’s #1 Leading Online School with 7500+ happy students!</p>
                    </marquee>
                </div>
            </div>
       </div>

        <div class="container">
            <div class="row">
                <!--<div class="einnarae">-->
                    <?php // the_content(); ?>
                    
                <!--</div>-->
                
                <div class="container">
                    <div class="row">
                        <div class="noticeinnmy row">
                            <div class="col-sm-9">
                                <p>Notice 1</p>
                            </div> 
                            <div class="col-sm-3">
                                <a class="default-btn btn-sm" href="#">Download</a>
                            <div>
                        </div>
                        </div>
                        </div>
        	   
        	    <div class="noticeinnmy row">
                    <div class="col-sm-9">
                        <p>Notice 2</p>
                    </div> 
                    <div class="col-sm-3">
                        <a class="default-btn btn-sm" href="#">Download</a>
                    <div>
        		    </div>
                    </div>
               </div>
	   
	    <div class="noticeinnmy row">
            <div class="col-sm-9">
                <p>Notice 3</p>
            </div> 
            <div class="col-sm-3">
                <a class="default-btn btn-sm" href="#">Download</a>
            <div>
		    </div>
            </div>
       </div>
            </div>
       </div>
		 
		 

<!-- Subscribe Start -->
<div class="subscribe-area pt-60 pb-70">
    <div class="container">
        <div class="row">
            <div class="newsinn">
            <div class="col-lg-8 offset-lg-2">
                <div class="subscribe-content section-title text-center">
                    <h2>subscribe our newsletter</h2>
                    <p>I must explain to you how all this mistaken idea </p>
                </div>
                <div class="newsletter-form mc_embed_signup">
                    <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll" class="mc-form"> 
                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your e-mail address" required>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                            <button id="mc-embedded-subscribe" class="default-btn" type="submit" name="subscribe" style="background: #f58220;"><span>subscribe</span></button> 
                        </div>    
                    </form>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div>
                    <!-- mailchimp-alerts end -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Subscribe End -->

<?php get_footer('nbps'); ?>