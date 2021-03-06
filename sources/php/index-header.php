<?php

/**
 * Globally registers the 'social logos' plugin
 *
 * This ensures plugin using it is on the latest version of Social Logos, and helps to avoid conflicts.
 */

/* !!!


IF YOU ARE EDITING THIS FILE, THEN YOU ARE EDITING A FILE THAT GETS OUTPUT FROM THE SOCIAL LOGOS REPO!

https://github.com/Automattic/social-logos

DO NOT EDIT THIS FILE! 

If you need to edit this file, edit index-header.php and index-footer.php in the Social Logos repo instead
OR if you're looking to change how SVGs get output, you'll need to edit strings in the Gruntfile :)

!!! */


function get_social_logo( $social_logo ) {
	$svg = "";

	switch ( $social_logo ) {
