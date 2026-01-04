<x-layout>
    <h1 class="text-xl font-bold">Job Page</h1>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

    <p>Location: {{ $job['location'] }}</p>
    <p>Salary: {{ $job['salary'] }}</p>

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
