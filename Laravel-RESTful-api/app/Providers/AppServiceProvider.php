<?php
namespace App\Providers;
use App\Http\Repositories\CustomerRepository;
//use App\Repositories\CustomerRepository;
use App\Http\Repositories\Impl\CustomerRepositoryImpl;
use App\Http\Service\CustomerService;
use App\Http\Service\Impl\CustomerServiceImpl;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            CustomerRepository::class,
            CustomerRepositoryImpl::class
        );
        $this->app->singleton(
            CustomerService::class,
            CustomerServiceImpl::class
        );
    }
}
