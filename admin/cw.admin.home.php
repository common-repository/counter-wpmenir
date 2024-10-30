<?php

function cw_admin_home(){

  if (!current_user_can('manage_options'))  {
    wp_die( __('You do not have sufficient permissions to access this page.') );
  }

  // Call the Global Scope Variable
  global $plugin_data_information;
  // print_r($plugin_data_information);
  ?>
  <div class="mother-of-base">


    <div class="header-of-mother">

      <div class="right">
        Counter WordPress
      </div>

      <div class="left">
        <div>
          Ver. <?php echo $plugin_data_information['Version'] . ' '. ChannelVersion; ?>
          <span class="prudly">
            proudly dedicated to: <a href="https://en.wikipedia.org/wiki/Lotfi_A._Zadeh">Lotfi A. Zadeh</a>
          </span>
        </div>
      </div>
    </div>
    <div class="tabs">
      <ul class="tab-links">
        <li class="active"><a href="#tab-Analytics"><?php echo __('Analytics', 'counter-wpmenir'); ?></a></li>
        <li><a href="#tab-About"><?php echo __('About' ,'counter-wpmenir') ?></a></li>
        <li>  </li>
        <!-- <li> <?php submit_button(); ?> </li> -->
      </ul>









      <div class="tab-content">

        <div id="tab-Analytics" class="tab active" style="text-align: center;">

          <div class="box box-inline">
            <?php echo __('Features is coming.','counter-wpmenir'); ?>
          </div>
        </div>


        <div id="tab-About" class="tab">

          <div class="about-us">
            <div class="description">
              <?php echo __('Combining from beauty and efficiency to Analyze your Site.','counter-wpmenir'); ?> <br>
              <b><?php echo __('Author', 'counter-wpmenir'); ?>: </b> <a href="https://wpmen.ir"> WPMEN ( Sadegh Mahdilou ) </a> <br>
              <b><?php echo __('Version', 'counter-wpmenir'); ?>: </b> <?php echo $plugin_data_information['Version']; ?> <br>
            </div>


            <div class="description">
              <strong>Old Version:</strong>
              <br>
              Dont Worry About the old version. old version also is working yet. for using the old version please dont taka any chagne and if you want to use the old version its enough to use the shortcode in your theme file.

              <div>
                HOW TO USE <br>
                Use this shortcode for show and counting. <br>
                do_shortcode(‘[Counter_wpmen_3333]’) <br>
                you must use echo for show this shortcode. <br>
              </div>
            </div>



          </div>

        </div>
      </div>
    </div>
    <div class="copyright">
      <?php echo __('Created With','counter-wpmenir'); ?> <span class="love"> &#10084; </span> <?php echo __('By','counter-wpmenir'); ?> <a href="https://wpmen.ir"> WPMEN </a>
    </div>


  </div>
  <?php
}
