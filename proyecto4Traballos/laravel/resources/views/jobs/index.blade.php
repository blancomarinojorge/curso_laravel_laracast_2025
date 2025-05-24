<x-layout>
    <div class="space-y-10">
        <section class="text-center flex flex-col gap-8 mt-30">
            <h1 class="font-bold text-4xl">Lets find your next job</h1>
            <form action="">
                <input type="text" placeholder="Web developer..." class="rounded-xl bg-white/10 border-white/30 px-5 py-4 w-full max-w-xl">
            </form>
        </section>

        <section class="mt-20">
            <x-section-heading>Top Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-2 mt-5">
                @foreach($featured as $job)
                    <x-job-card :$job></x-job-card>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-5 flex gap-1 flex-wrap">
                @foreach($tags as $tag)
                    <x-tag :$tag></x-tag>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-5 flex flex-col gap-1">
                @foreach($jobs as $job)
                    <x-job-card-wide :$job></x-job-card-wide>
                @endforeach
            </div>


        </section>
    </div>
</x-layout>
