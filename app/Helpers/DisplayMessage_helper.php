<?php

function DisplayError($errors)
{   
    if (isset($errors) && !empty($errors) && is_array($errors) && count($errors) > 0) {
        foreach ($errors as $error) {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
            echo $error;
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
        }
    }
}