<?php
/ Template Name: Products /
@session_start();
get_includes('head');
get_includes('header');
get_includes('nav');
get_includes('banner');
?>

<div id="main_area">
	<div class="wrapper">
    <div class="main_con">

		<main>
      <?php if(!is_front_page()) : ?><div class="breadcrumbs">
      	<?php
      	if(function_exists('bcn_display'))
      	{
      			bcn_display();
      	}?>
      </div><?php endif; ?>
        <p>From fresh ingredients to beauty products, you can have any of our African food and products delivered at your doorstep. </p>
        <div class="serv_list">
          <?php

            $taxonomy     = 'product_cat';
            $orderby      = 'name';
            $show_count   = 0;      // 1 for yes, 0 for no
            $pad_counts   = 0;      // 1 for yes, 0 for no
            $hierarchical = 1;      // 1 for yes, 0 for no
            $title        = '';
            $empty        = 0;

            $args = array(
                   'taxonomy'     => $taxonomy,
                   'orderby'      => $orderby,
                   'show_count'   => $show_count,
                   'pad_counts'   => $pad_counts,
                   'hierarchical' => $hierarchical,
                   'title_li'     => $title,
                   'hide_empty'   => $empty
            );
           $all_categories = get_categories( $args );
           ?>
           <ul>
           <?php
           foreach ($all_categories as $cat) {
              if($cat->category_parent == 0) {
                  $category_id = $cat->term_id;
				  $comingsoon = array('31' ,'30','26', '28' );
				  $noimage = 'https://www.ekofarmersmarket.com/wp-content/plugins/woocommerce/assets/images/Locust-beans.png';

				  if (in_array($category_id, $comingsoon)) {
					  // echo '';
					  // echo '<li><a href="javascript:;" class="comingcat">'. $cat->name .'</a><input type="hidden" name="mouseOut" value="'.$cat->name.'"></li>';
					  echo '<li><figure><img src="'.$noimage.'" alt="assortment crunchy snacks" ><figcaption><input type="hidden" name="mouseOut" value="'.$cat->name.'"><a href="" class="comingcat"><span>'. $cat->name .'</span></a></figcaption></figure></li>';

					}
                  elseif($category_id != 18) {
                      // echo $category_id;
											// diria gasugod ang pag iterate para mabutangan image ang category naa sulod sa product page kani duha ka line
											$image = wp_get_attachment_url(get_woocommerce_term_meta($category_id, 'thumbnail_id', true ));
                      echo '<li><figure><img src="'.$image.'" alt="assortment crunchy snacks" ><figcaption><a href="'. get_term_link($cat->slug, 'product_cat') .'"><span>'. $cat->name .'</span></a></figcaption></figure></li>';

                      // echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a></li>';
                  }
              }
          }
          ?>
          </ul>
        </div>
		<?php get_includes('bottom') ?>

		</main>

		<div class="clearfix"></div>
    </div>
	</div>
</div>
<?php if ( is_front_page() ) { get_includes('bottom'); } ?>
<?php get_includes('footer');?>
