<?php
/*
Plugin Name: Displet Auto Select Authors During Import
Plugin URI: http://displet.com/wordpress-plugins/displet-auto-select-authors-during-import
Description: Automatically selects the author (based on name) when importing WordPress content if the author already exists.
Version: 1.0
Author: Displet
Author URI: http://displet.com/
*/

/*  Copyright 2013

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function displet_auto_select_authors_during_import_enqueue() {
    wp_enqueue_script('displet-auto-select-authors-script', plugins_url('displet-auto-select-authors-during-import.js', __FILE__), array('jquery'));
}
add_action('admin_enqueue_scripts', 'displet_auto_select_authors_during_import_enqueue');

?>
