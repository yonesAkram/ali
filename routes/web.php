<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use Illuminate\Support\Arr;

Route::get('/welcome', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/', function () {
    return view('home', ['greeting' => 'Hello, welcome to our website!', 'name' => 'Larry Robaart']);
});
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            ['id' => '1', 'title' => 'Frontend Developer',   'salary' => '$50.000',  'location' => 'New York, NY'],
            ['id' => '2', 'title' => 'Backend Developer',    'salary' => '$78.000',  'location' => 'San Francisco, CA'],
            ['id' => '3', 'title' => 'Full Stack Developer', 'salary' => '$952.300', 'location' => 'Remote']
        ]
    ]);
});
Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        ['id' => '1', 'title' => 'Frontend Developer',   'salary' => '$50.000',  'location' => 'New York, NY'],
        ['id' => '2', 'title' => 'Backend Developer',    'salary' => '$78.000',  'location' => 'San Francisco, CA'],
        ['id' => '3', 'title' => 'Full Stack Developer', 'salary' => '$952.300', 'location' => 'Remote']
    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    abort_if(!$job, 404);

    return view('job', ['job' => $job]);
})->where('id', '[0-9]+');

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
