<?php
// app/Providers/TemplateServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\TemplateManager;
use App\Contracts\Template;

class TemplateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(Template::class, TemplateManager::class);
    }
}