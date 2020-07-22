<?php
if ( ! class_exists( 'Erc' ) ) {
	class Tl {
	
		private const tl_version = 1;
	
		public function __construct() {
			$this->titleTag();
			$this->tlScript();
			$this->widgets();
			$this->listPostThumbnail();
			$this->listPostExcerpt();
			$this->support();
		}
	
		private function titleTag(){
			add_action('after_setup_theme', function(){
				add_theme_support('title-tag');
			});
		}
		private function tlScript(){
			wp_enqueue_style( 'tl-style', get_template_directory_uri() . '/style.css', array(), $this->tl_version = 1);
			wp_enqueue_script( 'tl-script', get_template_directory_uri() . '/js/script.js', array(), $this->tl_version = 1, true );
		}
	
		private function widgets(){
		
			if ( function_exists('register_sidebar') ){
				//Código para o widget.
				register_sidebar(array(
					'name' => __( 'Widgets para a pagina inicial' ),
					'id' => 'conteudo',
					'description' => __( 'Area de widget primeira fileira da pagina inicial' ),
					'before_widget' => '<li id="%1$s" class="%2$s">',
					'after_widget' => '</li>',
					'before_title' => '<h3>',
					'after_title' => '</h3>',
				));
		    }
		}
		
		private function listPostThumbnail(){
			set_post_thumbnail_size(352,380,true);
		}

		private function listPostExcerpt(){
			add_filter("excerpt_length", function($length){
				return 40;
			});
		}

		private function support(){
			add_theme_support('post-thumbnails');
		}

	}
}
	
$tl = new Tl();