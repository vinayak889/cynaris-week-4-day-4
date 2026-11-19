# Week 4 - Day 4: Testing & Debugging

Source-only examples for Laravel feature testing and debugging. These files are examples to adapt to your Laravel application's routes, models, and database schema; they are not a complete Laravel installation.

## Covered
- PHPUnit feature-test examples: homepage, registration, login, CRUD create, CRUD delete
- Debugging with `dd()`, `dump()`, and Laravel logs
- Logging reference and Debugbar notes
- Debugging session documentation (`docs/debug_log.md`)

## Run in a Laravel project
Copy the tests into a Laravel project and adapt route names, model/table fields, and expected responses to your application. Then run:
```bash
php artisan test
```

Debugbar installation/setup and any test database configuration require a working Laravel project and Composer dependencies. Do not commit real credentials.
