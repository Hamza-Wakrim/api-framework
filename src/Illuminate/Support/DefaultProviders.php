<?php

namespace Illuminate\Support;

class DefaultProviders
{
    /**
     * The current providers.
     *
     * @var array
     */
    protected $providers;

    /**
     * Create a new default provider collection.
     */
    public function __construct(?array $providers = null)
    {
        $this->providers = $providers ?: [
            // Core API providers (optimized for API-only framework)
            \Illuminate\Auth\AuthServiceProvider::class,
            \Illuminate\Broadcasting\BroadcastServiceProvider::class, // Real-time broadcasting (Pusher, etc.)
            \Illuminate\Bus\BusServiceProvider::class,
            \Illuminate\Cache\CacheServiceProvider::class,
            \Illuminate\Concurrency\ConcurrencyServiceProvider::class,
            \Illuminate\Cookie\CookieServiceProvider::class,
            \Illuminate\Database\DatabaseServiceProvider::class,
            \Illuminate\Encryption\EncryptionServiceProvider::class,
            \Illuminate\Filesystem\FilesystemServiceProvider::class,
            \Illuminate\Foundation\Providers\FoundationServiceProvider::class,
            \Illuminate\Hashing\HashServiceProvider::class,
            \Illuminate\Notifications\NotificationServiceProvider::class, // Notifications (Pusher, etc.)
            \Illuminate\Pagination\PaginationServiceProvider::class,
            \Illuminate\Pipeline\PipelineServiceProvider::class,
            \Illuminate\Queue\QueueServiceProvider::class,
            \Illuminate\Redis\RedisServiceProvider::class,
            \Illuminate\Translation\TranslationServiceProvider::class, // Localization (Arabic, etc.)
            \Illuminate\Validation\ValidationServiceProvider::class,
            \Illuminate\Foundation\Providers\ArtisanServiceProvider::class, // Core Artisan commands (key:generate, config:clear, serve, etc.)
            \Illuminate\Database\MigrationServiceProvider::class, // Migration commands (migrate, migrate:status, etc.)
            
            // Optional providers (commented out for API-only - uncomment if needed)
            // \Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class, // Artisan commands (full - includes ArtisanServiceProvider, MigrationServiceProvider, ComposerServiceProvider)
            // \Illuminate\Mail\MailServiceProvider::class, // Email sending
            // \Illuminate\Auth\Passwords\PasswordResetServiceProvider::class, // Password reset
            // \Illuminate\Session\SessionServiceProvider::class, // Session (stateless API typically doesn't need)
            // \Illuminate\View\ViewServiceProvider::class, // Blade templates (not needed for API)
        ];
    }

    /**
     * Merge the given providers into the provider collection.
     *
     * @param  array  $providers
     * @return static
     */
    public function merge(array $providers)
    {
        $this->providers = array_merge($this->providers, $providers);

        return new static($this->providers);
    }

    /**
     * Replace the given providers with other providers.
     *
     * @param  array  $replacements
     * @return static
     */
    public function replace(array $replacements)
    {
        $current = new Collection($this->providers);

        foreach ($replacements as $from => $to) {
            $key = $current->search($from);

            $current = is_int($key) ? $current->replace([$key => $to]) : $current;
        }

        return new static($current->values()->toArray());
    }

    /**
     * Disable the given providers.
     *
     * @param  array  $providers
     * @return static
     */
    public function except(array $providers)
    {
        return new static((new Collection($this->providers))
            ->reject(fn ($p) => in_array($p, $providers))
            ->values()
            ->toArray());
    }

    /**
     * Convert the provider collection to an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->providers;
    }
}
