<?php

function get_form(){
    return array(
        array(
            'title'=> 'Update',
            'url' => base_url('/update'),
        ),
        array(
            'title'=> 'Create',
            'url' => base_url('/create'),
        ),
    );
}