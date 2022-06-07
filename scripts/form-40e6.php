<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => ''
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Nome',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Nome\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Mensagem',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Mensagem\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('34e52f3334260d5d879bf91c73900f30');
    $processor->process($form);

    ?>