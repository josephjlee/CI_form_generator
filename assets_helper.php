<?php
/**
 * Created by PhpStorm.
 * User: davy
 * Date: 6/12/2018
 * Time: 10:24 AM
 */
 if ( ! defined('BASEPATH')) exit('No direct script access
allowed');

function customizable_login_form_generator($info_array)
{

    ?>
    <html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    </head>

    <body>


<?php    return '


<div class="container">
    <form action="'.$info_array['f_f_action'].'" method="'.$info_array['f_f_method'].'">
        <div class="form-group">
            <label for="'.$info_array['f_f_id1'].'">Username:</label>
            <input type="email" class="form-control" name="'.$info_array['f_f_name1'].'" id="'.$info_array['f_f_id1'].'" aria-describedby="emailHelp" placeholder="'.$info_array['f_f_placeholder1'].'">
            <small id="emailHelp" class="form-text text-muted">Make sure it\'s a valid email.</small>
        </div>
        <div class="form-group">
            <label for="'.$info_array['s_f_id2'].'">Password:</label>
            <input type="password" name="'.$info_array['s_f_name2'].'" class="form-control" id="'.$info_array['s_f_id2'].'" placeholder="'.$info_array['s_f_placeholder2'].'">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<?php
';

?>

    </body>
    </html>
<?php

}
