<?php
if (function_exists('register_sidebar')) {
 
register_sidebar(array(
'name' => 'Widgetized Area',
'id'   => 'widgetized-area',
'description'   => 'This is a widgetized area.',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget'  => '</div>',
'before_title'  => '<h4>',
'after_title'   => '</h4>'
));
 
}

?>