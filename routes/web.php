<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use Illuminate\Support\Arr;
use App\Models\Job;



Route::get('/welcome', function () {
    return view('welcome');
})->name('home');

Route::get('/', function () {
    // $jobs = Job::all();
    // $jobs = Job::with('employer')->paginate(2);
    return view('about');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/h', function () {
    return view('home', ['greeting' => 'Hello, welcome to our website!', 'name' => 'Larry Robaart']);
});


//create jobs route and use jobs array to show jobs
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(5);
    // $jobs = Job::with('employer')->cursorPaginate(5);
    return view('jobs.index', compact('jobs'));
});


// Create Jobs
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::post('/jobs', function () {
    $attributes = request()->validate([
        'title' => 'required|max:50',
        'salary' => 'required|max:20',
        'location' => 'required|max:55',
    ]);

    $job = Job::create($attributes + ['employer_id' => 1]); // Assuming employer_id is 1 for now

    return redirect('/jobs');
});


//clear codely show job by id
Route::get('/jobs/{id}', function ($id) {
    $job = Arr::first(job::all(), fn($job) => $job['id'] == $id);
    return view('jobs.show', ['job' => $job]);
});

Route::get('/akram', function () {
    return ['feoo' => 'bar'];
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});
