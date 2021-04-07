<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
      // $response = $this->get('/');
      // $response->assertStatus(200);

      //fwrite(STDOUT, app()->environment());

     // fwrite(STDOUT, env('APP_ENV'));
      //fwrite(STDOUT, env('CACHE_DRIVER'));

      print_r($_ENV);

    } 
}
