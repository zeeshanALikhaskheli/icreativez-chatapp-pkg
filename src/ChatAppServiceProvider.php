<?php

namespace iCreativez\ChatApp;

use Illuminate\Support\ServiceProvider;
// use iCreativez\ChatApp\Console\Commands\InstallChatApp;
use iCreativez\ChatApp\Console\Commands\InstallChatApp;

class ChatAppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/chat.php', 'chat');
        
        // Register commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallChatApp::class,
            ]);
        }
        $this->commands([
            InstallChatApp::class,
        ]);
    }

    public function boot()
    {
        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        
        // Load views
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'chat-app');
        
        // Register Livewire components
        if (class_exists(\Livewire\Livewire::class)) {
            \Livewire\Livewire::component('chat-app::chat-component', \iCreativez\ChatApp\Livewire\ChatComponent::class);
        }
        
        // Publish assets
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/config/chat.php' => config_path('chat.php'),
                __DIR__ . '/resources/views' => base_path('resources/views/vendor/chat-app'),
                __DIR__ . '/resources/css' => public_path('vendor/chat-app/css'),
                __DIR__ . '/resources/js' => public_path('vendor/chat-app/js'),
            ], 'chat-app');
            
            // Publish migrations
            $this->publishes([
                __DIR__ . '/database/migrations' => database_path('migrations'),
            ], 'chat-app-migrations');
        }
    }
}