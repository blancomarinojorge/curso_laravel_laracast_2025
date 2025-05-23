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
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-5 flex gap-1 flex-wrap">
                <x-tag>job1</x-tag>
                <x-tag>job1</x-tag>
                <x-tag>job1</x-tag>
                <x-tag>job1</x-tag>
                <x-tag>job1</x-tag>
                <x-tag>job1</x-tag>
                <x-tag>job1</x-tag>
                <x-tag>job1</x-tag>
                <x-tag>job1</x-tag>
                <x-tag>job1</x-tag>
                <x-tag>job1</x-tag>
                <x-tag>job1</x-tag>
                <x-tag>job1</x-tag>
                <x-tag>job1</x-tag>
                <x-tag>job1</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-5 flex flex-col gap-1">
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
            </div>


        </section>
    </div>
</x-layout>
