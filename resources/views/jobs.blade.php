<x-layout>
    <h1>Jobs Listing</h1>
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
    </div>
</x-layout>

{{-- <li class="border p-4 mb-4">
            <h2 class="text-xl font-bold">{{ $job['title'] }}</h2>
            <p class="text-gray-600 ">Location: {{ $job['location'] }}</p>
            @if (isset($job['salary']))
                <p class="text-gray-600">Salary: {{ $job['salary'] }}</p>
            @else
                <p class="text-gray-600">Salary: Not Disclosed</p>
            @endif
        </li> --}}
