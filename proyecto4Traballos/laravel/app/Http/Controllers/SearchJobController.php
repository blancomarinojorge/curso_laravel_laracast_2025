<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class SearchJobController extends Controller
{
    public function __invoke(Request $request){
        $jobs = Job::query()->where('title', 'LIKE', '%'.$request->get('q').'%')->get();
        return view('jobs.results', ['jobs' => $jobs]);
    }

    public function searchByTag(Request $request, Tag $tag){
        return view('jobs.results', [
            'jobs' => $tag->jobs()->get(),
        ]);
    }
}
