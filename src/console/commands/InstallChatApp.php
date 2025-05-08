<?php

namespace iCreativez\ChatApp\Console\Commands;

use Illuminate\Console\Command;

class InstallChatApp extends Command
{
    protected $signature = 'chat-app:install';
    protected $description = 'Install the chat application package';

    public function handle()
    {
        $this->info('Installing Chat Application...');

        // Publish assets
        $this->call('vendor:publish', [
            '--tag' => 'chat-app',
        ]);

        // Run migrations
        $this->call('migrate');

        $this->info('Chat Application installed successfully!');
    }
}
