<!-- Banner -->
	<div id="banner">
		<div class="wrapper">
			<?php if (is_front_page() ) { ?>
				<div class="bnr_con animatedParent animateOnce">

					<div class="slider">
						<div class="box_skitter box_skitter_large">
							<ul>
								<li><figure><img src="<?php bloginfo('template_url') ?>/images/slider/1.jpg" alt="different types of medical equipment" class="random"/></figure></li>
								<li><figure><img src="<?php bloginfo('template_url') ?>/images/slider/2.jpg" alt="different types of medical equipment" class="random"/></figure></li>
								<li><figure><img src="<?php bloginfo('template_url') ?>/images/slider/3.jpg" alt="three wheelchairs" class="random"/></figure></li>
							</ul>
				    </div>
						<ul class="rslides">
							<li><figure><img src="<?php bloginfo('template_url') ?>/images/slider/1.jpg" alt="different types of medical equipment"/></figure></li>
							<li><figure><img src="<?php bloginfo('template_url') ?>/images/slider/2.jpg" alt="different types of medical equipment"/></figure></li>
							<li><figure><img src="<?php bloginfo('template_url') ?>/images/slider/3.jpg" alt="three wheelchairs"/></figure></li>
						</ul>
					</div>

					<div class="bnr_info animated zoomIn">
						<?php dynamic_sidebar('bnr_info'); ?>
					</div>

				</div>
				<?php } else {?>
				<div class="non_ban">
					<figure>

						<?php if (has_post_thumbnail() && !is_product_category() && !is_product() && !is_shop()) {?>
							<?php the_post_thumbnail('full');?>
						<?php }else if(is_product_category() && is_product() && is_shop()){ ?>
							<div class="non_ban_img">
								<img src="<?php bloginfo('template_url');?>/images/nonehome-18401058.jpg" alt="wheelchair on a white background" />
							</div>
						<?php }else{ ?>
							<div class="non_ban_img" style="margin-top: 60px;">
							<div></div>
								<!-- <img src="<?php bloginfo('template_url');?>/images/nonehome-18401058.jpg" alt="wheelchair on a white background" /> -->
							</div>
						<?php } ?>
				</figure>
					<div class="page_title" style="margin-top: 0px;">
						<?php if ( is_front_page() ) { ?>
						<?php dynamic_sidebar( 'bnr_info' );?>
						<?php } elseif(!is_home() && !is_author() && !is_tag()){ ?>
								<!-- <h1 class="headings_title"><?php the_title(); ?></h1> -->
								<?php if(is_product_category() || is_shop()){ ?>
	             <h1><?php echo woocommerce_page_title(); ?></h1>
	             <?php }else{ ?>
	             <h1><?php the_title(); ?></h1>
            	<?php } ?>
						<?php } else{?>
								<h1 class="headings_title">Blog</h1>
						<?php }?>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
<!-- End Banner -->
