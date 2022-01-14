<?php

// here is the code you need to add inside the functions.php 
function page_url($template_path){
    $url = null;
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => $template_path
    ));
    if(isset($pages[0])) {
        $url = get_page_link($pages[0]->ID);
    }
    return $url;
}

// how you able to display the value 
// 1. you should call the function and type the path of your template where you created.
page_url('template-pages/template-ebook.php');

// 2. this value should be return the page url if you set or use this template yet.
// not forget to echo the function

?>
