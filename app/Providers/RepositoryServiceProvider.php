<?php

namespace App\Providers;

use App\Repositories\StatusRepository;
use App\Repositories\IStatusRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bind the interface to an implementation repository class
     */
    public function register()
    {
        $this->app->bind(
            IStatusRepository::class,
            StatusRepository::class
        );
    }
}