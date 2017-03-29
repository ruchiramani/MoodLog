<?php

namespace Tests\Feature;
use Tests\TestCase;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegistrationTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSignUp()
    {
      $rand = rand();
      $this->visit('/register')
          ->type('ruchi', 'name')
          ->type('ruchi' .$rand.'@in.com', 'email')
          ->type('qwerty', 'password')
          ->type('qwerty', 'password_confirmation')
          ->press('Register')
          ->seePageIs('/');
    }

    public function testSignIn()
    {
      $this->visit('/')
      ->type('ruchi@in.com','email')
      ->type('qwerty','password')
      ->press('Login')
      ->seePageIs('/');
    }


}
