<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MoviesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function the_main_page_show_correct()
    {

        $response=$this->get(route('movies.index'));
        $response->assertSuccessful();

    }
}
