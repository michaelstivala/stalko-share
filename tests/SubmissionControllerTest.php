<?php

use App\Submission;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SubmissionControllerTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @test
     */
    public function it_validates_submission()
    {
        $this->json('POST', '/submissions', [

        ])->seeJsonStructure(['name', 'message', 'locale']);

        $this->assertResponseStatus(422);
    }

    /**
     * @test
     */
    public function it_redirects_submissions_index()
    {
        $this->get('/submissions');

        $this->assertRedirectedToRoute('homepage');
    }

    /**
     * @test
     */
    public function it_saves_submission()
    {
        $this->json('POST', '/submissions', [
            'name' => 'Paul',
            'message' => 'I heard you were stuck at home studying :(',
            'locale' => 'en',
        ])->seeJsonStructure(['url']);

        $this->assertResponseStatus(200);

        $this->seeInDatabase('submissions', [
            'name' => 'Paul',
            'message' => 'I heard you were stuck at home studying :(',
            'locale' => 'en',
        ]);
    }

    /**
     * @test
     */
    public function it_bails_when_looking_for_nonexistant_submission()
    {
        $this->get('/9');

        $this->assertResponseStatus(404);
    }

    /**
     * @test
     */
    public function it_passes_submission_to_view()
    {
        $submission = factory(Submission::class)->create();

        $this->get("/{$submission->id}");

        $this->assertResponseStatus(200);

        $this->assertViewHas(['submission' => $submission->fresh()]);
    }

    /**
     * @test
     */
    public function it_sets_locale_to_mt()
    {
        $submission = factory(Submission::class)->create([
            'locale' => 'mt'
        ]);

        $this->visit("/{$submission->id}");

        $this->assertEquals('mt', app()->getLocale());
    }

    /**
     * @test
     */
    public function it_sets_locale_to_en()
    {
        $submission = factory(Submission::class)->create([
            'locale' => 'en'
        ]);

        $this->visit("/{$submission->id}");

        $this->assertEquals('en', app()->getLocale());
    }

    /**
     * @test
     */
    public function it_displays_submission()
    {
        $submission = factory(Submission::class)->create();

        $this->visit("/{$submission->id}")
            ->see(trans('stalko.salutation', ['name' => $submission->name]))
            ->see($submission->message);
    }
}
