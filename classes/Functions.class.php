<?php
	class Functions{

		/**
		 * 
		 * It is use to redirect to the url provided
		 * Para : url string
		 * Output : redirected to the url
		 * 
		 */
		public static function redirect($url){
			header("Location: ".$url);
		}
	}
?>