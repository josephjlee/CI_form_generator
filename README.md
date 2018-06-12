# CI_form_generator
This is a form generator helper for CodeIgniter to insert into your helpers folder and load into your project to generate beautiful forms automatically without writing many codes. 

Installation:

copy the assets_helper.php file in your helpers' folder then load it in your page's function
example:
public function my_function()
{
$this->load->helper('assets');
}

Then go into the view that you want to edit and echo out the function 'customizable_login_form_generator' and give it an array to edit the values of the form's fields

example in the view file:

<?php

$tableau=['f_f_method'=>'get','f_f_action'=>'action',
        'f_f_id1'=>'id1','f_f_placeholder1'=>'ph1','f_f_name1'=>'n1',
        's_f_id2'=>'id2','s_f_placeholder2'=>'ph2','s_f_name2'=>'n2'];

echo customizable_login_form_generator($tableau);


?>

And there you go now you can enjoy a fgood looking login form designed with bootstrap!!!!!
