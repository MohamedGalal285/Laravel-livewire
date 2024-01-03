<?php

namespace App\Providers;

use App\Models\Product;
use App\Repositories\Products\Eloquent\ProductEloquentRepository;
use App\Repositories\Products\ProductRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ProductRepository::class, function () {
            return new ProductEloquentRepository(new Product());
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
