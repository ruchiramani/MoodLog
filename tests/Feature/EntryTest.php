<?php

namespace Tests\Feature;
use Tests\TestCase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EntryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testEntryNewPage()
    {
      $this->visit('/')
      ->type('ruchi@in.com','email')
      ->type('qwerty','password')
      ->press('Login')
      ->click('new-entry')
      ->seePageIs('/entries/create');
    }
    public function testEntryIndexPage()
    {
      $this->visit('/')
      ->type('ruchi@in.com','email')
      ->type('qwerty','password')
      ->press('Login')
      ->click('all-entries')
      ->seePageIs('/entries');
    }
    public function testCreateNewEntry()
    {
      $this->visit('/')
      ->type('ruchi@in.com','email')
      ->type('qwerty','password')
      ->press('Login')
      ->click('new-entry')
      ->visit('/entries/create')
      ->check('1')
      ->check('2')
      ->check('3')
      ->press('Submit')
      ->see('what did you eat for breakfast today');

    }
    public function testEntryShowPage()
    {
      $this->visit('/')
      ->type('ruchi@in.com','email')
      ->type('qwerty','password')
      ->press('Login')
      ->click('all-entries')
      ->seePageIs('/entries')
      ->click('entry-1')
      ->see('what did you eat for breakfast today');

    }

}
