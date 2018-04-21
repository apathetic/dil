<?
/**
* @author stresslimit 
* @package 
* @since 
* 
* description: this file creates the various custom fields we need
*
*/

/* -> usage Instructions
-------------------------------------*/
/*
* full list of examples here: http://svn.wp-plugins.org/custom-metadata/trunk/custom_metadata_examples.
*
*			  x_add_metadata_group('group-1', 'post', array('label' => 'Group'));
* 			x_add_metadata_field('editor_1', array('page'), array('group' => 'slider_options', 'label' => 'Editor1', 'field_type' => 'tinymce' ));
*
* 			Possible args:
*
*			$args = array( 
*			    'group' => '' // The slug of group the field should be added to. This needs to be registered with x_add_metadata_group first.
*			    'field_type' => 'text' // The type of field; possible values: text, checkbox, radio, select, tinymce, upload, textarea
*			    'label' => '' // Label for the field
*			    'description' => '' // Description of the field, displayed below the input
*			    'values' => array() // Values for select and radio buttons. Associative array
*			    'display_callback' => '' // Callback to custom render the field
*			    'sanitize_callback' => '' // Callback to sanitize data before it's saved
*			    'display_column' => false // Add the field to the columns when viewing all posts
*			    'display_column_callback' => '' // Callback to render output for the custom column
*			    'required_cap' => '' // The cap required to view and edit the field
*	  			'multiple' => [true or false]
*
*/

if (function_exists('x_add_metadata_group')) : // let's not get ourselves locked out of the site

  /* -> register the fields
  -------------------------------------*/


  add_action( 'admin_init', 'stress_custom_fields');
  function stress_custom_fields() {
  
  }

  /* -> custom callback
  -------------------------------------*/



endif;