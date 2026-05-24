<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\IBaseRepository;
use Illuminate\Support\ServiceProvider;
//vpx_imports
use App\Repositories\Admin\Customer\Crud\ICustomerCrudRepository;
use App\Repositories\Admin\Customer\Crud\CustomerCrudRepository;
use App\Repositories\Admin\Hrm\User\Policy\IAdminUserPolicyRepository;
use App\Repositories\Admin\Hrm\User\Policy\AdminUserPolicyRepository;
use App\Repositories\Admin\Hrm\User\UserRole\Crud\IAdminUserRoleCrudRepository;
use App\Repositories\Admin\Hrm\User\UserRole\Crud\AdminUserRoleCrudRepository;
use App\Repositories\Admin\Hrm\User\Crud\IAdminUserCrudRepository;
use App\Repositories\Admin\Hrm\User\Crud\AdminUserCrudRepository;
class RepositoryServiceProvider extends ServiceProvider
{
        /**
         * Register any application services.
         */
        public function register(): void
        {
            $this->app->bind(abstract: IBaseRepository::class, concrete: BaseRepository::class);
            //vpx_attach
            $this->app->bind(abstract: ICustomerCrudRepository::class, concrete: CustomerCrudRepository::class);
            $this->app->bind(abstract: IAdminUserPolicyRepository::class, concrete: AdminUserPolicyRepository::class);
            $this->app->bind(abstract: IAdminUserRoleCrudRepository::class, concrete: AdminUserRoleCrudRepository::class);
            $this->app->bind(abstract: IAdminUserCrudRepository::class, concrete: AdminUserCrudRepository::class);
        }
}
