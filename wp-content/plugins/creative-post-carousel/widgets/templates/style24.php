<div class="bwdbpc_blogPost_5 bwdbpc_blogPost_list_24 bwdbpc-slider-common <?php echo esc_attr($settings['bwdbpc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdbpc-blogpost-custom-id'] ); ?>">
    <?php require 'bwdbpc-variable.php' ; ?>
    <div class="bwdbpc-owl bwdbpc-owl-carousel bwdbpc-owl-theme">
    <?php $wp_query = new \WP_Query( $bwdbpc_args );
    if($wp_query->have_posts()) :
        while($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="col-bwdbpc">
            <div class="bwdbpc_blog_box">
                <?php if('yes' === $bwdbpc_image_swtcher){ /* <div>*/ $this->bwdbpc_post_thumbnail_with_css(); } else{?><div class="bwdbpc_blog_image bwdbpc_image_overly_b bwdbpc_image_overly_a"><?php } ?></div>
                <div class="bwdbpc_blog_bottom_part">
                    <div class="bwdbpc_category_option <?php echo $bwdbpc_cont_align; ?>">
                        <?php if($bwdbpc_yes_value === $bwdbpc_categories_swtcher){ ?>
                        <?php if('show_main_cat' === $bwdbpc_cat_show_status){ ?>
                        <div class="bwdbpc_category bwdbpc-all-meta-extra"> 
                            <?php $categories = get_the_category();
                            if ( ! empty( $categories ) ) {
                                echo '<ul class="post-categories"><li><a href="'. get_permalink() .'">'.esc_html( $categories[0]->name ).'</a></li></ul>';
                            } ?>
                        </div> 
                        <?php } elseif('show_multiple_cat' === $bwdbpc_cat_show_status){
                        ?><div class="bwdbpc_category bwdbpc-all-meta-extra"> <?php the_category(); ?></div> <?php
                            } 
                        } ?>
                    </div>
                    <?php if($bwdbpc_yes_value === $bwdbpc_title_swtcher){ ?>
                    <div class="bwdbpc_blog_title <?php echo $bwdbpc_cont_align; ?>">
                        <a href="<?php the_permalink(); ?>" ><<?php echo $bwdbpc_title_tags; ?> class="bwdbpc_title"><?php the_title(); ?></<?php echo $bwdbpc_title_tags; ?>></a>
                    </div>
                    <?php } ?>
                    <div class="bwdbpc_blog_meta <?php echo $bwdbpc_cont_align; ?>">
                        <?php if($bwdbpc_yes_value === $bwdbpc_author_swtcher){ ?>
                        <div class="bwdbpc_blog_user bwdbpc-all-meta">
                        <?php if('icon' === $bwdbpc_author_indicator){ ?>
                            <i class="bwdbpc_icons <?php echo $settings['bwdbpc_author_icon']['value']; ?>"></i>
                        <?php } elseif('gravatar' === $bwdbpc_author_indicator){ ?>
                            <?php
                            echo get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = '', $args = array( 'class' => 'wt-author-img' ) ); 
                            } ?>
                            <?php echo get_the_author_meta( 'nickname' ); ?>
                        </div>
                        <?php } ?>
                        <?php if($bwdbpc_yes_value === $bwdbpc_date_swtcher){ ?>
                        <div class="bwdbpc_blog_date bwdbpc-all-meta">
                        <?php if('show' === $bwdbpc_taxo_icon){ ?><i class="bwdbpc_icons far fa-calendar-alt"></i><?php } echo get_the_date($bwdbpc_blog_date_format); ?>
                        </div>
                        <?php } ?>
                        <?php if($bwdbpc_yes_value === $bwdbpc_tags_swtcher){ ?>
                        <div class="bwdbpc_blog_tag bwdbpc-all-meta"> <?php the_tags(); ?> </div>
                        <?php } ?>
                        <?php if($bwdbpc_yes_value === $bwdbpc_comments_swtcher){ ?>
                        <div class="bwdbpc_blog_comment bwdbpc-all-meta">
                            <?php if('show' === $bwdbpc_taxo_icon){ ?><i class="bwdbpc_icons fas fa-comments"></i><?php } if(!have_comments()){ echo esc_html__('Comment (', 'bwd-blog-post') . get_comments_number().')'; } ?>
                        </div><?php } ?>
                    </div>
                    <?php if($bwdbpc_yes_value === $bwdbpc_description_swtcher){ ?>
                    <div class="bwdbpc_blog_description <?php echo $bwdbpc_cont_align; ?>">
                        <div class="bwdbpc_desce"><?php echo wp_trim_words(get_the_content(), $bwdbpc_post_description_words, $bwdbpc_blog_word_trim_indi); ?></div>
                    </div>
                    <?php } ?>
                    <?php if($bwdbpc_yes_value === $settings['bwdbpc_button_show_switcher']){ ?>
                    <div class="bwdbpc_blog_bttn <?php echo $bwdbpc_cont_align; ?>">
                        <a class="bwdbpc_button" href="<?php the_permalink(); ?>" <?php if($bwdbpc_yes_value === $settings['bwdbpc_button_open_switcher']){ ?>target="_blank" <?php } ?>><?php if('icon' === $bwdbpc_button_types){ ?><i class="bwdbpc_icons <?php echo $settings['bwdbpc_blog_button_icon']['value']; ?>"></i><?php } elseif('text_icon' === $bwdbpc_button_types){/* */ if('left' === $bwdbpc_button_icon_align){ ?><i class="bwdbpc_icons bwdbpc_icons_left <?php echo $settings['bwdbpc_button_indicator_icon']['value']; ?>"></i><?php } echo esc_html__($settings['bwdbpc_blog_button_title']);  if('right' === $bwdbpc_button_icon_align){ ?><i class="bwdbpc_icons bwdbpc_icons_right <?php echo $settings['bwdbpc_button_indicator_icon']['value']; ?>"></i><?php } } ?></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>