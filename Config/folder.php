<?php

function base_url(){
    return sprintf(
      "%s://%s%s",
      isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
      $_SERVER['SERVER_NAME'],
      $NAMA_FOLDER = '/Project-KP/Hire-karyawan/',
    );
  }

function login(){
    return base_url()."Login/";
}

function admin(){
    return base_url()."Admin/";
}

function home(){
    return base_url()."Home/";
}

// folder assets
function assets(){
    return base_url().'Assets/' ;
}

// folder assets
function admin_assets(){
    return base_url().'Assets/Admin/' ;
}

// follder admin css
function admin_css(){
    return assets().'Admin/dist/css/';
}

//folder admin javascript
function admin_js(){
    return assets().'Admin/dist/js/';
}

// folder admin plugins
function admin_plugins(){
    return assets().'Admin/plugins/';
}

// folder home assets
function home_assets(){
    return assets().'Home/';
}

// folder home css
function home_css(){
    return assets().'Home/assets/css/';
}

// folder home javascript
function home_js(){
    return assets().'Home/assets/js/';
}

// folder home img
function home_img(){
    return assets().'Home/assets/img';
}

// folder home img
function home_vendor(){
    return assets().'Home/vendor/';
}

?>