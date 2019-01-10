<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 08/08/2018
 * Time: 12:10
 */


function valueForm($nom) {
    if (!empty($_POST[$nom])) {
        return $_POST[$nom];
    }
}


function errorField($field, $errors, $marginBottom = false) {
    $data = [
        'classMessage' => 'invalid-feedback',
        'className'   => '',
        'message'      => ''
    ];

    if (isset($_POST[$field]) && empty($_POST[$field])) {
        $data['className'] = 'is-invalid';

        $contentMessage = '<div class="text-left ';
        $contentMessage .= $data['classMessage'];
        $contentMessage .= '">';
        $contentMessage .= $errors[$field];
        $contentMessage .= '</div>';

        $data['message'] = $contentMessage;

        if ($marginBottom) {
            $data['message'] .= '<br />';
        }

        /*$data['message']   = '<div class="' . $data['classMessage'] . '">' . $errors[$field] . '</div>';*/
    }

    return $data;
}


function alert($errors, $alert) {
    $status = false;
    $notif = '';
    $success = false;

    foreach ($errors as $key => $value) {
        if (isset($_POST[$key]) && empty($_POST[$key])) {
            $status = true;
            break;
        }
    }

    if (isset($_POST[$key])) {
        $close =  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

        if ($status) {
            $notif = '<div class="alert alert-danger text-left alert-dismissible fade show" role="alert">' . $close . $alert['error'] . '</div>';
        }
        else {
            $notif = '<div class="alert alert-success text-left alert-dismissible fade show" role="alert">' . $close . $alert['success'] . '</div>';
            $success = true;
        }
    }

    $results = [
        'notif'   => $notif,
        'success' => $success
    ];

    return $results;
}
