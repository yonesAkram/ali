<x-layout>
    <h1 class="text-xl font-bold">Job Page</h1>

    @if ($job)
        <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
        <p>Location: {{ $job['location'] }}</p>
        <p>Salary: {{ $job['salary'] }}</p>
    @else
        <p class="text-red-600">Job not found.</p>
    @endif
</x-layout>
