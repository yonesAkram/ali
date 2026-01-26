<x-layout>
    <h1>Jobs Listing</h1>

    <a href="/jobs/create" class="text-blue-500 hover:underline ml-4">Create New Job</a>

    <div class="space-y-2 ">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" block="job-link"
                class=" hover:underline block px-4 py-5 border-b color-gray-200 rounded lg">
                <div class="font-bold text-lg text-blue-600">
                    {{ $job->employer->name }}
                </div>
                <div>
                    {{ $job['title'] }}: <br>Pays: {{ $job['salary'] }} per Year .
                </div>
                <div class="text-sm text-gray-300 text-red-500"> Located in {{ $job['location'] }} </div>
            </a>
        @endforeach
        <div class="mt-4">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
