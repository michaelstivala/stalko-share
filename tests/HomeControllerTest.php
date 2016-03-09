<?php

use App\Submission;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeControllerTest extends TestCase
{
    use DatabaseMigrations;
    
    /**
     * @test
     */
    public function it_passes_the_default_submission_to_homepage()
    {
        $submission = Submission::getDefaultSubmission();

        $this->get("/");

        $this->assertResponseStatus(200);

        $this->assertViewHas(['submission' => $submission]);
    }
}
