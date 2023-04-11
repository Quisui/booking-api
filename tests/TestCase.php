<?php

namespace Tests;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp(): void
    {
        parent::setUp();

        // Migrate and seed the testing database
        Artisan::call('migrate:fresh', ['--env' => 'testing']);
        Artisan::call('db:seed', ['--env' => 'testing']);
    }
}
