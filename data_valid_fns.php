<?php
function filled_out($form_vars)
{
    // test that each variable has a value
    foreach ($form_vars as $key => $value)
    {
        if (!isset($key) || ($value == ''))
            return false;
    }
    return true;
}

function valid_email($address)
{
    // check an email address is possibly valid
    //if (ereg('^[a-zA-Z0-9 \._\-]+@([a-zA-Z0-9][a-zA-Z0-9\-]*\.)+[a-zA-Z]+$', $address))
    if(filter_var($address, FILTER_VALIDATE_EMAIL))
        return true;
    else 
        return false;
}