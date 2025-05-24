<x-layout>
    <x-page-heading>Job Results</x-page-heading>

    <div class="mt-5 flex flex-col gap-1">
        @foreach($jobs as $job)
            <x-job-card-wide :$job></x-job-card-wide>
        @endforeach
    </div>
</x-layout>
