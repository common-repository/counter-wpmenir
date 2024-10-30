<?php
defined('CWSECURITY') or die;

/**
*   Class Name: CWCORE
*   Description: Main Core of Counter WordPress, we called CWCORE
*
*   Author: Sadegh Mahdilou
*   @since 0.2.1
*   @version 0.2.0
*   @copyright 2020
*/
class CWCORE
{

  function __construct()
  {
    self::init_files();
    add_action('admin_menu',array($this,'RegisterAdminMenu') );
    add_action('admin_init',array($this,'wp_enqueue'));
    // add_action('wp_enqueue_scripts', array($this,'wp_enqueue') );
  }


  private static function init_files(){
    require_once(Plugin_URI.'/admin/cw.admin.home.php');
    // echo Pluign_URI;

    // include install file
    require_once(Plugin_URI.'/admin/cw.install.php');

  }

  public function wp_enqueue(){
    wp_register_style( 'randompostscss', PLUGIN_URL . 'admin/master.css' );
    wp_enqueue_style( 'randompostscss');

    wp_enqueue_script('jquery');
    wp_enqueue_script ( 'main', PLUGIN_URL . 'admin/master.js');

  }


  /**
  *   Function Name: RegisterAdminMenu
  *   Description: Register a new admin menu
  *
  *   Author: Sadegh Mahdilou
  *   Author URI: https://wpmen.ir/
  *   @since 0.2.1
  *   @copyright 2020
  */
  function RegisterAdminMenu(){

    add_menu_page(
      __( 'Counter WordPress', 'counter-wpmenir' ),
      __( '<small>Counter WordPress</small>', 'counter-wpmenir' ),
      'manage_options',
      'CW',
      // 'RegisterAdminMenu_submenu_page_callback',
      'cw_admin_home',
      // plugins_url( 'inc/img/icon.png', __FILE__ ),
      '',
      7
    );
  }
}

$newObject = new CWCORE;
