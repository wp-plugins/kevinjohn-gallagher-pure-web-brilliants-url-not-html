<?php
/*
	Plugin Name: 			Kevinjohn Gallagher: Pure Web Brilliant's URL not HTML
	Description: 			Don't you hate when WordPress decides that you ALWAYS want it to format your image string for you? 
							What if you want the image url so that you can use CSS in a future compatible way? 
							Now you can.
	Version: 				2.0
	Author: 				Kevinjohn Gallagher
	Author URI: 			http://kevinjohngallagher.com/
	
	Contributors:			kevinjohngallagher, purewebbrilliant 
	Donate link:			http://kevinjohngallagher.com/
	Tags: 					kevinjohn gallagher, pure web brilliant, framework, cms, simple, multisite, images, gravatar, avatar, css
	Requires at least:		3.0
	Tested up to: 			3.4
	Stable tag: 			2.0
*/
/**
 *
 *	Kevinjohn Gallagher: Pure Web Brilliant's URL not HTML
 * ==========================================================
 *
 *	Don't you hate when WordPress decides that you ALWAYS want it to format your image string for you? 
 * 	What if you want the image url so that you can use CSS in a future compatible way? 
 * 	Now you can.
 *
 *
 *	This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 *	General Public License as published by the Free Software Foundation; either version 3 of the License, 
 *	or (at your option) any later version.
 *
 * 	This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
 *	without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 *	See the GNU General Public License (http://www.gnu.org/licenses/gpl-3.0.txt) for more details.
 *
 *	You should have received a copy of the GNU General Public License along with this program.  
 * 	If not, see http://www.gnu.org/licenses/ or http://www.gnu.org/licenses/gpl-3.0.txt
 *
 *
 *	Copyright (C) 2008-2012 Kevinjohn Gallagher / http://www.kevinjohngallagher.com
 *
 *
 *	@package				Pure Web Brilliant
 *	@version 				2.0.1
 *	@author 				Kevinjohn Gallagher <wordpress@kevinjohngallagher.com>
 *	@copyright 				Copyright (c) 2012, Kevinjohn Gallagher
 *	@link 					http://kevinjohngallagher.com
 *	@license 				http://www.gnu.org/licenses/gpl-3.0.txt
 *
 *
 */


	define( '_KEVINJOHN_GALLAGHER___URL_NOT_HTML', '2.0' );



	if (class_exists('kevinjohn_gallagher')) 
	{
		
		
		class	kevinjohn_gallagher___url_not_html 
		extends kevinjohn_gallagher
		{
		
				const PM	=	'_kevinjohn_gallagher___url_not_html';
				var				$instance;
		
		
				public	function	__construct() 
				{
						$this->instance =				&$this;
						$this->uniqueID 				=	self::PM;
						$this->plugin_name				=	"Kevinjohn Gallagher: Pure Web Brilliant's URL not HTML image control";
						add_action( 'init',				array( $this, 'init' ) );
						add_action( 'init',				array( $this, 'init_child' ) );
				}
				
			
				public function init_child() 
				{

				}
				
				
				
				/**
				 *		returns URL of images parsed form html.
				 *		 
				 * 		@param  	string $image_html
				 * 		@return		string
				 */
				public	function	url_not_html( $image_html )
				{
						$exp1						=	explode("src='", $image_html);
						$exp2						=	explode("'", $exp1[1]);
						$image_src					=	$exp2[0];	
						
						return 						$image_src;
				}


				/**
				 *		outputs URL of images parsed form html.
				 *		 
				 * 		@param  	string $image_html
				 */
				public	function	print_url_not_html( $image_html )
				{
						$image_src					=	$this->url_not_html( $image_html );	
						
						echo 						$image_src;
				}
				
		
		}	//	class
		
	
		$kevinjohn_gallagher___url_not_html			=	new kevinjohn_gallagher___url_not_html();
		
	
	} else {
	

			function kevinjohn_gallagher___url_not_html___parent_needed()
			{
					echo	"<div id='message' class='error'>";
					
					echo	"<p>";
					echo	"<strong>Kevinjohn Gallagher: URL not HTML</strong> ";	
					echo	"requires the parent framework to be installed and activated";
					echo	"</p>";
			} 

			add_action('admin_footer', 'kevinjohn_gallagher___url_not_html___parent_needed');	
	
	}

