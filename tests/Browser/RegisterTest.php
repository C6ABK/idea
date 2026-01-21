<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

// it('registers a user', function() {
//     visit('/register')
//         ->fill('name', 'John Doe')
//         ->fill('email', 'jdoe@gmail.com')
//         ->fill('password', 'password123')
//         ->click('Create Account')
//         ->assertPathIs('/');

//     $this->assertAuthenticated();

//     expect(Auth::user()->toArray())->toMatchArray([
//         'name' => 'John Doe',
//         'email' => 'jdoe@gmail.com',
//     ]
// });

// it('requires a valid email', function() {
//     visit('/register')
//         ->fill('name', 'John Doe')
//         ->fill('email', 'John123')
//         ->fill('password', 'password123')
//         ->click('Create Account')
//         ->assertPathIs('/register');
// });