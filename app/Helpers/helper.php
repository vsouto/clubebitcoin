<?php
/**
 * Created by PhpStorm.
 * User: Victor Souto
 * Date: 04/10/2017
 * Time: 12:35
 */

function getTags($tags) {

    $result = '';

    $explode = explode(',',$tags);

    foreach ($explode as $tag) {
        $result .= '<a href="#" rel="tag">' . $tag . '</a>,';
    }

    return $result;
}

function isActive( $param ){

    return true;
}

function getCategoryColor() {

    return '';
}