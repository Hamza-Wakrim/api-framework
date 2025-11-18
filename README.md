<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
<a href="https://insights.linuxfoundation.org/project/laravel-framework"><img src="https://insights.linuxfoundation.org/api/badge/health-score?project=laravel-framework" alt="Health score"></a>
</p>

## About This Framework

> **Note:** This is a **customized, optimized version** of the Laravel framework specifically designed for **API-only applications**. This is a private framework for internal company use and should not be published publicly.

This framework is based on Laravel but has been optimized for API-only use by:
- Removing unnecessary service providers (View, Broadcasting, Mail, Session, etc.)
- Optimizing dependencies (removed view/mail related packages)
- Streamlining middleware for stateless API requests
- Reducing memory footprint and improving boot time

### Key Features (Optimized for APIs):
- [Simple, fast routing engine](https://laravel.com/docs/routing) - Perfect for REST APIs
- [Powerful dependency injection container](https://laravel.com/docs/container)
- Multiple back-ends for [cache](https://laravel.com/docs/cache) storage
- Database agnostic [schema migrations](https://laravel.com/docs/migrations)
- [Robust background job processing](https://laravel.com/docs/queues)
- Optimized middleware stack for stateless requests
- Reduced memory footprint and faster boot times

### What's Different?
- **No Blade templates** - Removed view engine (not needed for JSON APIs)
- **No Session by default** - Stateless API design
- **No Mail by default** - Can be enabled if needed
- **No Broadcasting by default** - Can be enabled if needed
- **Minimal Console support** - Artisan commands can be enabled if needed

See [API_OPTIMIZATION.md](API_OPTIMIZATION.md) for detailed information about all optimizations.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains thousands of video tutorials covering a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

Please review [our security policy](https://github.com/laravel/framework/security/policy) on how to report security vulnerabilities.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](LICENSE.md).
