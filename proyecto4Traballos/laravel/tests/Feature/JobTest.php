<?php

namespace Tests\Feature;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class JobTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_it_belongs_to_an_employer(): void
    {
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        $this->assertTrue($job->employer->is($employer));
    }

    public function test_it_can_have_tags(): void{
        $job = Job::factory()->create();
        $job->tag('FrontEnd');
        $this->assertCount(1, $job->tags);
    }
}
