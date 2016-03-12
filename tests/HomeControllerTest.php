<?php

use App\Share;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeControllerTest extends TestCase
{
    use DatabaseMigrations;
    
    /**
     * @test
     */
    public function it_passes_the_default_share_to_homepage()
    {
        $share = Share::getDefaultShare();

        $this->get("/");

        $this->assertResponseStatus(200);

        $this->assertViewHas(['share' => $share]);
    }
}
