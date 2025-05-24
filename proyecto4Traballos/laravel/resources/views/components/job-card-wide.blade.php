@props(['job'])
<x-card class="flex flex-row space-x-5">
    <div class="mb-5">
        <x-job-photo></x-job-photo>
    </div>

    <div class="flex grow-1 flex-col gap-1">
        <div class="text-xs font-bold text-white/70">{{ $job->employer->name }}</div>
        <h3 class="group-hover/card:text-blue-800 transition-colors duration-300 text-xl font-bold">
            {{ $job->title }}
        </h3>
        <div class="mt-auto text-s text-white/70">{{ $job->schedule }} - {{ $job->salary }}</div>
    </div>
    <div class="flex flex-col justify-between items-end">
        <div class="space-x-1.5">
            <x-tag size="small">Remote</x-tag>
            <x-tag size="small">22h</x-tag>
        </div>
        <div class="flex flex-row gap-1">
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small"></x-tag>
            @endforeach
        </div>
    </div>
</x-card>
