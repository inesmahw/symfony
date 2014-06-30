<?php

namespace ZIMZIM\Test;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ZimzimWebTestCase extends WebTestCase
{
    public $users = array(
        'SuperAdmin' => array(
            'PHP_AUTH_USER' => 'admin',
            'PHP_AUTH_PW' => 'password'
        )
    );
    public $router;

    public function setUp(){
        parent::setUp();
    }
}