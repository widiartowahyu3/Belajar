<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    public function testConfig()
    {
        $firstname = config('contoh.author.first');
        $lastname = config('contoh.author.last');
        $email = config('contoh.email');
        $web = config('contoh.web');

        self::assertEquals($firstname, 'Wahyu');
        self::assertEquals($lastname, 'Widiarto');
        self::assertEquals($email, 'widiartowahyu3@gmail.com');
        self::assertEquals($web, 'coba.com');
    }
}
