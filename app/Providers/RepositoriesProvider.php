<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Repositories\Categories\CategoryRepository;
use App\Repositories\Categories\Eloquent\CategoryEloquentRepository;
use App\Repositories\Products\Eloquent\ProductEloquentRepository;
use App\Repositories\Products\ProductRepository;
use App\Repositories\SubCategories\Eloquent\SubCategoryEloquentRepository;
use App\Repositories\SubCategories\SubCategoryRepository;
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
        $this->app->bind(CategoryRepository::class, function () {
            return new CategoryEloquentRepository(new Category());
        });
        $this->app->bind(SubCategoryRepository::class, function () {
            return new SubCategoryEloquentRepository(new SubCategory());
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
