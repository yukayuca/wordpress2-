<?php 
// behind the scenes' file 
function wordpress2_files() {
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'); 
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
    wp_enqueue_script('main-wordpress2-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true); 
    //wp_enqueue_syle('university_main_styles', get_stylesheet_uri()); 
    
    //ここではfunctionはまだ機能していないの
    //call actionするときはかっこが必要
}
add_action('wp_enqueue_scripts','wordpress2_files');

function wordpress2_features(){

    add_theme_support('title-tag'); 
}
add_action('after_setup_theme', 'wordpress2_features'); 
// add_action('a'(いつのname),'b'(name));   
//functionを動かすために必要
// wordpress2_filesの後は()はいらないことに注意。名前をwordpressに伝えるだけなので。
?>

