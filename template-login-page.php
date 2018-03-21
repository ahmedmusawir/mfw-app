<?php
/**
 * Template Name: Login Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moose_Framework_2
 */

get_header(); ?>



<div class="wp_login_form">
<div class="form_heading"> Login Form </div>

<?php
$args = array(
'redirect' => home_url(),
'id_username' => 'user',
'id_password' => 'pass',
)
;?>

<?php wp_login_form( $args ); ?>

</div>

<style>

.wp_login_form{
border: 1px solid rgb(162, 46, 51);
width: 400px;
height: 350px;
border-radius: 5px;
margin-left: 35%;
}

.form_heading{
width: 380px;
height: 42px;
background-color: rgb(162, 46, 51);
color: #fff;
padding-top: 15px;
padding-left: 20px;
font-size: 20px;
}

form{
margin-left: 50px;
}

label{
clear:both;
margin-right: 200px;
}

.input{
height: 35px;
width: 270px;
border: 1px solid rgb(201, 201, 201);
background-color: rgb(238, 235, 236);
radius-border: 3px;
}

#wp-submit{
height: 35px;
width: 90px;
border: 1px rgb(162, 46, 51);
background-color: rgb(162, 46, 51);
border-radius: 3px;
color: #fff;
}

.error-msg{
color: red;
margin-left: 35%;
position: relative;
}

</style>

<?php
get_footer();
























