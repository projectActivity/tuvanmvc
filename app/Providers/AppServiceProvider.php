<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\Resource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Resource::withoutWrapping();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\ArticleType\ArticleTypeRepositoryInterface',
            'App\Repositories\ArticleType\ArticleTypeEloquentRepository'
        );

        $this->app->bind(
            'App\Repositories\Category\CategoryRepositoryInterface',
            'App\Repositories\Category\CategoryEloquentRepository'
        );

        $this->app->bind(
            'App\Repositories\User\UserRepositoryInterface',
            'App\Repositories\User\UserEloquentRepository'
        );

        $this->app->bind(
            'App\Repositories\Education\EducationRepositoryInterface',
            'App\Repositories\Education\EducationEloquentRepository'
        );
        
        $this->app->bind(
            'App\Repositories\Position\PositionRepositoryInterface',
            'App\Repositories\Position\PositionEloquentRepository'
        );

        $this->app->bind(
            'App\Repositories\Tag\TagRepositoryInterface',
            'App\Repositories\Tag\TagEloquentRepository'
        );

        $this->app->bind(
            'App\Repositories\Slide\SlideRepositoryInterface',
            'App\Repositories\Slide\SlideEloquentRepository'
        );

        $this->app->bind(
            'App\Repositories\Service\ServiceRepositoryInterface',
            'App\Repositories\Service\ServiceEloquentRepository'
        );
    }
}
