<x-layout>
    <h1>Jobs Page</h1>

    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}">
                <strong> {{ $job['title'] }}:</strong> pays {{ $job['salary'] }} per Year .
            </a>
        </li>
    @endforeach

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
