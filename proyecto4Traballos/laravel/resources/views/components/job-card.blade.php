@props(['job'])
<x-card class="flex flex-col text-center">
    <div class="self-start">{{ $job->employer->name }}</div>
    <div class="my-10">
        <h3 class="group-hover/card:text-blue-800 transition-colors duration-300 text-xl font-bold">
            {{ $job->title }}
        </h3>
        <div class="mt-4">{{ $job->schedule }} - {{ $job->salary }}</div>
    </div>
    <div class="flex flex-row justify-between my-auto">
        <div class="flex flex-row space-x-3 items-end">
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small">Job1</x-tag>
            @endforeach
        </div>
        <div><x-job-photo :width="42"></x-job-photo></div>
    </div>
</x-card>
