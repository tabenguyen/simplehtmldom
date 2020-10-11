<?php
namespace Tabenguyen\Simplehtmldom;

require 'simplehtmldom' . DIRECTORY_SEPARATOR . 'simple_html_dom.php';

class HtmlDomParser {

    /**
     * Call file_get_html
     */
	static public function file_get_html() {
		return call_user_func_array ( '\simplehtmldom\file_get_html' , func_get_args() );
    }

    /**
     * Call str_get_html
     */
	static public function str_get_html() {
		return call_user_func_array ( '\simplehtmldom\str_get_html' , func_get_args() );
	}
}