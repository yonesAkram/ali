<x-layout>
    <x-slot:heading>
        <h1 class="text-xl font-bold">Create Job Page</h1>
        <a href="/jobs" class="text-blue-500 hover:underline">Back to Jobs Listing</a>

    </x-slot:heading>

    <form method="POST" action="/jobs" class="mt-10 space-y-10">
        @csrf

        <div class="space-y-12">
            <!-- Header -->
            <div class="border-b border-gray-100/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-100">
                    Create a New Job
                </h2>
                <p class="mt-1 text-sm leading-6 text-gray-100">
                    We Just Need a Handful of Information to Get Started.
                </p>
                <!-- Grid -->
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <!-- Username -->
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-100">
                            Username
                        </label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-100">
                                <input type="text" name="title" id="title"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-100 placeholder:text-gray-100 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Shift Leader">
                            </div>
                        </div>
                    </div>
                    <!-- Salary -->
                    <div class="sm:col-span-4">
                        <label for="Salary" class="block text-sm font-medium leading-6 text-gray-100">
                            Salary
                        </label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-100">
                                <input type="text" name="salary" id="salary"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-100 placeholder:text-gray-100 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="$60,000 Per Year">
                            </div>
                        </div>
                    </div>
                    <!-- Location -->
                    <div class="sm:col-span-4">
                        <label for="location" class="block text-sm font-medium leading-6 text-gray-100">
                            Location
                        </label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-indigo-100">
                                <input type="text" name="location" id="location"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-100 placeholder:text-gray-100 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Remote, New York, NY">
                            </div>
                        </div>
                        <!-- Buttons -->
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="button" class="text-sm font-semibold leading-6 text-gray-500">
                                Cancel
                            </button>
                            <button type="submit"
                                class="rounded-md bg-indigo-300 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-900">
                                Save
                            </button>
                        </div>

                    </div>
    </form>

</x-layout>
