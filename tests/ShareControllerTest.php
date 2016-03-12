<?php

use App\Share;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ShareControllerTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @group share
     */
    public function it_validates_share()
    {
        $this->json('POST', '/shares', [

        ])->seeJsonStructure(['name', 'message', 'locale']);

        $this->assertResponseStatus(422);
    }

    /**
     * @test
     */
    public function it_redirects_shares_index()
    {
        $this->get('/shares');

        $this->assertRedirectedToRoute('homepage');
    }

    /**
     * @test
     */
    public function it_saves_share()
    {
        $this->json('POST', '/shares', [
            'name' => 'Paul',
            'message' => 'I heard you were stuck at home studying :(',
            'locale' => 'en',
        ])->seeJsonStructure(['url']);

        $this->assertResponseStatus(200);

        $this->seeInDatabase('shares', [
            'name' => 'Paul',
            'message' => 'I heard you were stuck at home studying :(',
            'locale' => 'en',
        ]);
    }

    /**
     * @test
     */
    public function it_bails_when_looking_for_nonexistant_share()
    {
        $this->get('/9');

        $this->assertResponseStatus(404);
    }

    /**
     * @test
     */
    public function it_passes_share_to_view()
    {
        $share = factory(Share::class)->create();

        $this->get("/{$share->id}");

        $this->assertResponseStatus(200);

        $this->assertViewHas(['share' => $share->fresh()]);
    }

    /**
     * @test
     */
    public function it_sets_locale_to_mt()
    {
        $share = factory(Share::class)->create([
            'locale' => 'mt'
        ]);

        $this->visit("/{$share->id}");

        $this->assertEquals('mt', app()->getLocale());
    }

    /**
     * @test
     */
    public function it_sets_locale_to_en()
    {
        $share = factory(Share::class)->create([
            'locale' => 'en'
        ]);

        $this->visit("/{$share->id}");

        $this->assertEquals('en', app()->getLocale());
    }

    /**
     * @test
     */
    public function it_displays_share()
    {
        $share = factory(Share::class)->create();

        $this->visit("/{$share->id}")
            ->see(trans('stalko.salutation', ['name' => $share->name]))
            ->see($share->message);
    }
}
