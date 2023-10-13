# Laravel Sitemap Generator

In most cases sitemap generation command is copy-pasted between projects, so
here it is just packed.

## Installation

```bash
composer require ezitisitis/laravel-sitemap-generator
```

## Usage

Use as Artisan command:

```bash
php artisan sitemap:generate
```

or set it in to `App\Console\Kernel`:

```php
protected function schedule(Schedule $schedule): void
{
    $schedule->command('sitemap:generate')->daily();
}
```
