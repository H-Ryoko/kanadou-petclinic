<?php 
  function custom_excerpt_length( $length ) {
       return 100;	//表示したい文字数
  }	
  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
?>