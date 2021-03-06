<!-- Banner -->
<div id="banner">
<div class="wrapper animatedParent animateOnce">
	<?php if (is_front_page() ) { ?>
	<div class="bnr_main">
	<div class="slider">
<div class="box_skitter box_skitter_large">
		<ul>
			<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/1.jpg" class="random"  alt="foods concept"/></figure></li>
			<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/2.jpg" class="random"  alt="meal concept"/></figure></li>
			<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/3.jpg" class="random"  alt="meal concept"/></figure></li>
		</ul>
	</div>
	<ul class="rslides">
		<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/1.jpg" alt="food ingredients concept"/></figure></li>
		<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/2.jpg" alt="meal concept"/></figure></li>
		<li><figure><img src="<?php bloginfo('template_url');?>/images/slider/3.jpg" alt="meal concept"/></figure></li>
	</ul>
  </div>

  <div class="bnr_info animated fadeInUp">
				<?php dynamic_sidebar('bnr_info');?>
  </div>
	</div>
	 <?php } else {?>
<div class="non_ban">
			<figure>
		          <?php
		            // this will remove the banner in shop and category pages
		            if(is_product_category() || is_shop() || is_product()) {
		          ?>
		          <div id='no-banner-img'
		              style="
		                height:5px;
		                background:#f9f9f9 !important;
		              ">
		          </div>
							<?php
		            // this will remove the banner in shop and category pages
		            // if (has_post_thumbnail() && !is_product_category() && !is_product() && !is_shop()) {
		            }else if(has_post_thumbnail() && !is_product_category() && !is_product() && !is_shop()) {
		          ?>
							<?php the_post_thumbnail('full');?>
							<?php }else if(is_product_category() && is_product() && is_shop()){ ?>
								<img src="<?php bloginfo('template_url');?>/images/slider/nonhome-157908252.jpg" alt="food catering concept" />
							<?php }else{ ?>
		            <img src="<?php bloginfo('template_url');?>/images/slider/nonhome-157908252.jpg" alt="food catering concept" />
							<?php } ?>
				</figure>

			<div class="page_title">
				<?php if(!is_home() && !is_author() && !is_category() && !is_tag()) { ?>
					<!-- <h1 class="h1_title"><?php the_title(); ?></h1> -->
					<?php if(is_product_category() || is_shop()){ ?>
						<h1><?php echo woocommerce_page_title(); ?></h1>
					<?php }else{ ?>
						<h1 class="h1_title"><?php the_title(); ?></h1>
					<?php } ?>
					<?php echo do_shortcode("[short_title id='" . get_the_ID() . "']"); ?>
				<?php } else { ?>
					<h1 class="headings_title">Blog</h1>
				<?php } ?>
			</div>
</div>

		<?php }?>
	<div class="clearfix"></div>
</div>
</div>
<!-- End Banner -->
