
<p align="center">
<a href="https://github.com/Hamza-Wakrim/api-framework/actions"><img src="https://github.com/Hamza-Wakrim/api-framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/hamza-wakrim/api-framework"><img src="https://img.shields.io/packagist/dt/hamza-wakrim/api-framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/hamza-wakrim/api-framework"><img src="https://img.shields.io/packagist/v/hamza-wakrim/api-framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/hamza-wakrim/api-framework"><img src="https://img.shields.io/packagist/l/hamza-wakrim/api-framework" alt="License"></a>
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
- **Minimal Console support** - Artisan commands can be enabled if needed

See [API_OPTIMIZATION.md](API_OPTIMIZATION.md) for detailed information about all optimizations.
