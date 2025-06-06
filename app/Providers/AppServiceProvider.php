<?php

namespace App\Providers;

use App\Contract\Auth\UserAuthContract;
use App\Contract\AuthContract;
use App\Contract\BaseContract;
use App\Contract\Master\ClassRoomContract;
use App\Contract\Master\CourseContract;
use App\Contract\Master\ModuleContract;
use App\Contract\Master\QuestionContract;
use App\Contract\Master\UserContract;
use App\Contract\Setting\LevelContract;
use App\Contract\Setting\SettingContract;
use App\Service\Auth\UserAuthService;
use App\Service\AuthService;
use App\Service\BaseService;
use App\Service\Master\ClassRoomService;
use App\Service\Master\CourseService;
use App\Service\Master\ModuleService;
use App\Service\Master\QuestionService;
use App\Service\Master\UserService;
use App\Service\Setting\LevelService;
use App\Service\Setting\SettingService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthContract::class, AuthService::class);
        $this->app->bind(BaseContract::class, BaseService::class);

        $this->app->bind(UserAuthContract::class, UserAuthService::class);

        $this->app->bind(SettingContract::class, SettingService::class);
        // $this->app->bind(LevelContract::class, LevelService::class);

        $this->app->bind(ClassRoomContract::class, ClassRoomService::class);
        $this->app->bind(ModuleContract::class, ModuleService::class);
        $this->app->bind(CourseContract::class, CourseService::class);
        $this->app->bind(QuestionContract::class, QuestionService::class);
        $this->app->bind(UserContract::class, UserService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
