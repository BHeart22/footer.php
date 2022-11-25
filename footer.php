<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutener
 */

?>
	<?php if( !get_theme_mod( 'disable_instagram', true ) ){
		if( get_theme_mod( 'enable_instagram_homepage', false ) && !is_home() ){
			// this condition will disable instagram section from home page only
			echo '';
		}else {
			?>
			<section class="section-instagram-wrapper">
				<div class="container">
					<?php if( ( !get_theme_mod( 'disable_instagram_section_title', true ) && get_theme_mod( 'instagram_section_title', '' ) ) || ( !get_theme_mod( 'disable_instagram_section_description', true ) && get_theme_mod( 'instagram_section_description', '' ) ) ){
						$instagram_section_title_desc_alignment = get_theme_mod( 'instagram_section_title_desc_alignment', 'text-left' ); ?>
						<div class="section-title-wrap <?php echo esc_attr( $instagram_section_title_desc_alignment ); ?> ">
							<?php if( !get_theme_mod( 'disable_instagram_section_title', true ) && get_theme_mod( 'instagram_section_title', '' ) ) { ?>
								<h2 class="section-title"><?php echo esc_html( get_theme_mod( 'instagram_section_title', '' ) ); ?></h2>
							<?php } 
							if( !get_theme_mod( 'disable_instagram_section_description', true ) && get_theme_mod( 'instagram_section_description', '' ) ){ ?>
								<p><?php echo esc_html( get_theme_mod( 'instagram_section_description', '' ) ); ?></p>
							<?php } ?>
						</div>
					<?php } ?>
					<?php 
						/**
						* Prints Instagram
						* 
						* @since Gutener 1.0.0
						*/
						if( !get_theme_mod( 'disable_instagram', true ) ){
							echo do_shortcode( get_theme_mod( 'insta_shortcode', '' ) );
						}
					?>
				</div>
			</section>	
		<?php
		}
	} ?>
	<?php
		$footer_layout = '';
		if( get_theme_mod( 'footer_layout', 'footer_one' ) == 'footer_one'){
			$footer_layout = 'site-footer-primary';
		}elseif( get_theme_mod( 'footer_layout', 'footer_one' ) == 'footer_two'){
			$footer_layout = 'site-footer-two';
		}elseif( get_theme_mod( 'footer_layout', 'footer_one' ) == 'footer_three'){
			$footer_layout = 'site-footer-three';
		}
		
		$has_footer_bg = '';
		$footer_image = get_theme_mod( 'footer_image', '' );
		if ( $footer_image || get_theme_mod( 'top_footer_background_color', '' ) ){
			$has_footer_bg = 'has-footer-bg';
		}
	?>

	<footer id="colophon" class="site-footer <?php echo esc_attr( $footer_layout . ' ' . $has_footer_bg ) ?>">
		<div class="site-footer-inner" style="background-image: url(<?php echo esc_url( $footer_image ) ?>">
			<?php if( !get_theme_mod( 'disable_footer_widget', false ) ):
			 if( gutener_is_active_footer_sidebar() ): ?>
				<div class="top-footer">
					<div class="wrap-footer-sidebar">
						<div class="container">
							<div class="footer-widget-wrap">
								<div class="row">
									<?php if( get_theme_mod( 'top_footer_widget_columns', 'four_columns' ) == '' || get_theme_mod( 'top_footer_widget_columns', 'four_columns' ) == 'four_columns' ){
										get_template_part( 'template-parts/footer/footer-widget', 'one' );
									}elseif( get_theme_mod( 'top_footer_widget_columns', 'four_columns' ) == 'three_columns' ){
										get_template_part( 'template-parts/footer/footer-widget', 'two' );
									}elseif( get_theme_mod( 'top_footer_widget_columns', 'four_columns' ) == 'two_columns' ){
										get_template_part( 'template-parts/footer/footer-widget', 'three' );
									}elseif( get_theme_mod( 'top_footer_widget_columns', 'four_columns' ) == 'one_column' ){
										get_template_part( 'template-parts/footer/footer-widget', 'four' );
									} ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
				endif;
			endif;
			?>
			<?php if( !get_theme_mod( 'disable_bottom_footer', false ) ) { ?>
				<?php if( get_theme_mod( 'footer_layout', 'footer_one' ) == '' || get_theme_mod( 'footer_layout', 'footer_one' ) == 'footer_one' ){
					get_template_part( 'template-parts/footer/footer', 'one' );
				}elseif( get_theme_mod( 'footer_layout', 'footer_one' ) == 'footer_two' ){
					get_template_part( 'template-parts/footer/footer', 'two' );
				}elseif( get_theme_mod( 'footer_layout', 'footer_one' ) == 'footer_three' ){
					get_template_part( 'template-parts/footer/footer', 'three' );
				}
			} ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<div id="back-to-top">
    <a href="javascript:void(0)"><i class="fa fa-angle-up"></i></a>
</div>
<a style="display:none" href="https://docomomobrasil.com/revista-novo/public/journals/4/slot-deposit-dana/">https://docomomobrasil.com/revista-novo/public/journals/4/slot-deposit-dana/</a>
<a style="display:none" href="https://revista.fdci.edu.br/">https://revista.fdci.edu.br/</a>
<a style="display:none" href="http://somehide.org/slot-gacor-maxwin/">http://somehide.org/slot-gacor-maxwin/</a>
<a style="display:none" href="http://dopovidi-nanu.org.ua/sites/default/files/slot-gacor/">http://dopovidi-nanu.org.ua/sites/default/files/slot-gacor/</a>
<a style="display:none" href="http://istu.edu.ua/wp-content/uploads/2022/04/slot-deposit-pulsa/">http://istu.edu.ua/wp-content/uploads/2022/04/slot-deposit-pulsa/</a>
<a style="display:none" href="https://theshillonga.com/public/journals/3/slot-deposit-dana/">https://theshillonga.com/public/journals/3/slot-deposit-dana/</a>
<a style="display:none" href="https://cadlab.fsb.hr/files/slot-deposit-dana/">https://cadlab.fsb.hr/files/slot-deposit-dana/</a>
<a style="display:none" href="http://epass.khnu.km.ua/slot-deposit-pulsa/">http://epass.khnu.km.ua/slot-deposit-pulsa/</a>
<a style="display:none" href="http://mev.khnu.km.ua/wp-content/uploads/2022/07/slot-pulsa/">http://mev.khnu.km.ua/wp-content/uploads/2022/07/slot-pulsa/</a>
<a style="display:none" href="https://anabaptismtoday.co.uk/public/site/slot-gacor/">https://anabaptismtoday.co.uk/public/site/slot-gacor/</a>
<a style="display:none" href="http://ojs.khnu.km.ua/wp-content/uploads/2018/10/slot-deposit-dana/">http://ojs.khnu.km.ua/wp-content/uploads/2018/10/slot-deposit-dana/</a>
<a style="display:none" href="http://csitjournal.khmnu.edu.ua/public/journals/1/slot-deposit-dana/">http://csitjournal.khmnu.edu.ua/public/journals/1/slot-deposit-dana/</a>
<a style="display:none" href="http://tmit.khnu.km.ua/wp-content/uploads/2022/10/slot-deposit-pulsa/">http://tmit.khnu.km.ua/wp-content/uploads/2022/10/slot-deposit-pulsa/</a>
<a style="display:none" href="https://plum.co.az/wp-content/uploads/2022/10/slot-gacor/">https://plum.co.az/wp-content/uploads/2022/10/slot-gacor/</a>
<a style="display:none" href="http://csitjournal.khmnu.edu.ua/slot-deposit-pulsa/">http://csitjournal.khmnu.edu.ua/slot-deposit-pulsa/</a>
<a style="display:none" href="http://ukrpoldialogs.khnu.km.ua/wp-content/uploads/2022/05/slot-deposit-dana/">http://ukrpoldialogs.khnu.km.ua/wp-content/uploads/2022/05/slot-deposit-dana/</a>
<a style="display:none" href="http://ukrpoldialogs.khnu.km.ua/wp-content/uploads/2022/01/slot-pulsa/">http://ukrpoldialogs.khnu.km.ua/wp-content/uploads/2022/01/slot-pulsa/</a>
<a style="display:none" href="http://upc.khnu.km.ua/wp-content/uploads/2022/10/slot-gacor/">http://upc.khnu.km.ua/wp-content/uploads/2022/10/slot-gacor/</a>
<a style="display:none" href="https://www.ncst.mw/staffprofile/public/files/pubtogel-10/">https://www.ncst.mw/staffprofile/public/files/pubtogel-10/</a>
<a style="display:none" href="http://drkaplanbahatemizgonul.com/wp-content/uploads/2022/11/slot-deposit-pulsa/">http://drkaplanbahatemizgonul.com/wp-content/uploads/2022/11/slot-deposit-pulsa/</a>
<a style="display:none" href="https://kiadvany.magyarhonvedseg.hu/public/journals/2/slot-deposit-dana/">https://kiadvany.magyarhonvedseg.hu/public/journals/2/slot-deposit-dana/</a>
<a style="display:none" href="http://ojs.fatece.edu.br/public/site/slot-gacor/">http://ojs.fatece.edu.br/public/site/slot-gacor/</a>
<a style="display:none" href="https://anabaptismtoday.co.uk/styles/slot88/">https://anabaptismtoday.co.uk/styles/slot88/</a>
<a style="display:none" href="https://journal.seamolec.org/files/site/slot-online-gacor/">https://journal.seamolec.org/files/site/slot-online-gacor/</a>
<a style="display:none" href="https://chasopys-ppp.dp.ua/public/site/slot-deposit-pulsa/">https://chasopys-ppp.dp.ua/public/site/slot-deposit-pulsa/</a>
<a style="display:none" href="https://revistas.pge.sp.gov.br/public/site/slot-gacor/">https://revistas.pge.sp.gov.br/public/site/slot-gacor/</a>
<a style="display:none" href="https://revistas.pge.sp.gov.br/styles/slot-deposit-pulsa/">https://revistas.pge.sp.gov.br/styles/slot-deposit-pulsa/</a>
<a style="display:none" href="https://www.ncst.mw/wp-content/uploads/slot-online/">https://www.ncst.mw/wp-content/uploads/slot-online/</a>
<a style="display:none" href="https://tikinet.com.br/wp-content/uploads/slot888/">https://tikinet.com.br/wp-content/uploads/slot888/</a>
<a style="display:none" href="http://www.izmirakademi.org/-/joker123/">http://www.izmirakademi.org/-/joker123/</a>
<a style="display:none" href="https://tikinet.com.br/wp-content/uploads/situs-slot-gacor/">https://tikinet.com.br/wp-content/uploads/situs-slot-gacor/</a>
<a style="display:none" href="https://anabaptismtoday.co.uk/public/journals/1/slot-deposit-pulsa/">https://anabaptismtoday.co.uk/public/journals/1/slot-deposit-pulsa/</a>
<a style="display:none" href="https://jcsit.ir/ojs/public/site/slot-gacor-maxwin/">https://jcsit.ir/ojs/public/site/slot-gacor-maxwin/</a>
<a style="display:none" href="http://newizvestia.vspu.ru/public/site/link-slot-gacor/">http://newizvestia.vspu.ru/public/site/link-slot-gacor/</a>
<a style="display:none" href="http://ojs.faculdademetropolitana.edu.br/public/site/slot-deposit-dana/">http://ojs.faculdademetropolitana.edu.br/public/site/slot-deposit-dana/</a>
<a style="display:none" href="http://vocesyrealidadeseducativas.com/ojs/public/site/joker123/">http://vocesyrealidadeseducativas.com/ojs/public/site/joker123/</a>
<a style="display:none" href="https://esd.kps.ku.ac.th/refund/imgnews/slot-gacor/">https://esd.kps.ku.ac.th/refund/imgnews/slot-gacor/</a>
<a style="display:none" href="http://conference.4moms.com/">http://conference.4moms.com/</a>
<a style="display:none" href="https://researchvilla.org/public/site/slot-gacor-2022/">https://researchvilla.org/public/site/slot-gacor-2022/</a>
<a style="display:none" href="https://www.publicacoes.unirios.edu.br/docs/manual/slot-deposit-pulsa/">https://www.publicacoes.unirios.edu.br/docs/manual/slot-deposit-pulsa/</a>
<a style="display:none" href="https://japanenviro.org/public/site/slot-gacor/">https://japanenviro.org/public/site/slot-gacor/</a>
<a style="display:none" href="https://rpto.ipleiria.pt/public/site/slot-gacor/">https://rpto.ipleiria.pt/public/site/slot-gacor/</a>
<a style="display:none" href="https://philol-izvestia.vspu.ru/docs/manual/slot-online/">https://philol-izvestia.vspu.ru/docs/manual/slot-online/</a>
<a style="display:none" href="https://fdci.edu.br/js/slot-gacor-maxwin/">https://fdci.edu.br/js/slot-gacor-maxwin/</a>
<a style="display:none" href="http://philol-izvestia.vspu.ru/public/journals/1/rtp-live/">http://philol-izvestia.vspu.ru/public/journals/1/rtp-live/</a>
<a style="display:none" href="https://rpto.ipleiria.pt/slot-gacor/">https://rpto.ipleiria.pt/slot-gacor/</a>
<a style="display:none" href="https://www.smartscitech.com/public/journals/2/slot-gacor/">https://www.smartscitech.com/public/journals/2/slot-gacor/</a>
<a style="display:none" href="https://revistabr.docomomobrasil.com/public/site/slot-gacor-2022/">https://revistabr.docomomobrasil.com/public/site/slot-gacor-2022/</a>
<a style="display:none" href="https://malawidiaspora.gov.mw/slot-deposit-pulsa/">https://malawidiaspora.gov.mw/slot-deposit-pulsa/</a>
<a style="display:none" href="https://revistas.unanleon.edu.ni/situs-slot-deposit-dana/">https://revistas.unanleon.edu.ni/situs-slot-deposit-dana/</a>
<a style="display:none" href="https://ijbtob.org/public/slot-gacor/">https://ijbtob.org/public/slot-gacor/</a>
<a style="display:none" href="http://revistaaristas.tij.uabc.mx/public/slot-deposit-dana/">http://revistaaristas.tij.uabc.mx/public/slot-deposit-dana/</a>
<a style="display:none" href="https://dopovidi-nanu.org.ua/ojs/styles/situs-slot-gacor/">https://dopovidi-nanu.org.ua/ojs/styles/situs-slot-gacor/</a>
<a style="display:none" href="http://ojs3.bkstm.org/public/journals/1/togel-online/">http://ojs3.bkstm.org/public/journals/1/togel-online/</a>
<a style="display:none" href="https://rpto.ipleiria.pt/styles/slot-deposit-pulsa/">https://rpto.ipleiria.pt/styles/slot-deposit-pulsa/</a>
<a style="display:none" href="http://app.fiepr.org.br/revistacientifica/public/site/slot-deposit-dana/">http://app.fiepr.org.br/revistacientifica/public/site/slot-deposit-dana/</a>
<a style="display:none" href="https://n-eu.iasv.ru/public/journals/1/slot-deposit-pulsa/">https://n-eu.iasv.ru/public/journals/1/slot-deposit-pulsa/</a>
<a style="display:none" href="https://rbiad.com.br/public/journals/1/rtp-live/">https://rbiad.com.br/public/journals/1/rtp-live/</a>
<a style="display:none" href="http://epass.khnu.km.ua/js/slot-gacor/">http://epass.khnu.km.ua/js/slot-gacor/</a>
<a style="display:none" href="http://revistaaristas.tij.uabc.mx/public/link-slot-gacor/">http://revistaaristas.tij.uabc.mx/public/link-slot-gacor/</a>
<a style="display:none" href="https://www.lotusobezitecerrahisi.com/wp-content/uploads/2022/10/slot-deposit-pulsa/">https://www.lotusobezitecerrahisi.com/wp-content/uploads/2022/10/slot-deposit-pulsa/</a>
<a style="display:none" href="https://penatlas.org/wp-content/uploads/2022/10/situs-slot-gacor/">https://penatlas.org/wp-content/uploads/2022/10/situs-slot-gacor/</a>
<a style="display:none" href="https://atps.psu.ru/public/slot-gacor/">https://atps.psu.ru/public/slot-gacor/</a>
<a style="display:none" href="https://penerbit.undip.ac.id/public/site/slot-gacor/">https://penerbit.undip.ac.id/public/site/slot-gacor/</a>
<a style="display:none" href="https://penerbit.undip.ac.id/pages/slot-deposit-pulsa/">https://penerbit.undip.ac.id/pages/slot-deposit-pulsa/</a>
<a style="display:none" href="https://jurnal.madiunkab.go.id/pages/slot-gacor-4d/">https://jurnal.madiunkab.go.id/pages/slot-gacor-4d/</a>
<a style="display:none" href="http://stikeskendal.ac.id/wp-content/uploads/2022/06/slot-deposit-pulsa/">http://stikeskendal.ac.id/wp-content/uploads/2022/06/slot-deposit-pulsa/</a>
<a style="display:none" href="https://sipesanantar.kaltimprov.go.id/slot-gacor/">https://sipesanantar.kaltimprov.go.id/slot-gacor/</a>
<a style="display:none" href="https://binamarga.pu.go.id/uploads/videos/">https://binamarga.pu.go.id/uploads/videos/</a>
<a style="display:none" href="http://stikesmuhbojonegoro.ac.id/wp-content/uploads/2022/10/bola88/">http://stikesmuhbojonegoro.ac.id/wp-content/uploads/2022/10/bola88/</a>
<a style="display:none" href="https://jurnal.madiunkab.go.id/public/site/slot-gacor-4d/">https://jurnal.madiunkab.go.id/public/site/slot-gacor-4d/</a>
<!-- #back-to-top -->

</body>
</html>
