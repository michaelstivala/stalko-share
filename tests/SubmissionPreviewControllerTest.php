<?php

use App\Submission;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SubmissionPreviewControllerTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @test
     */
    public function it_validates_preview()
    {
        $this->json("POST", "/submission-previews", [

        ])->seeJsonStructure(['locale', 'name', 'message']);
    }

    /**
     * @test
     */
    public function it_generates_preview()
    {
        $this->json("POST", "/submission-previews", [
            'locale' => 'en',
            'name' => 'Mike',
            'message' => 'I heard you liked music.'
        ])
            ->seeJsonStructure(['preview'])
            ->see(trans('stalko.salutation', ['name' => 'Mike']))
            ->see('I heard you liked music.');
    }

    /**
     * @test
     */
    public function it_generates_preview_in_maltese()
    {
        $this->json("POST", "/submission-previews", [
            'locale' => 'mt',
            'name' => 'Mike',
            'message' => 'I heard you liked music.'
        ])
            ->seeJsonStructure(['preview']);

        app()->setLocale('mt');
        
        $this->see(trans('stalko.salutation', ['name' => 'Mike']))
            ->see('I heard you liked music.');
    }
}
