# Debugging Log

## Example issue
A page returned an unexpected HTTP status or a CRUD request failed.

## Debugging steps
1. Reproduce the issue consistently.
2. Check the browser Network tab and Laravel route definitions.
3. Inspect a value temporarily with `dump($value)` or `dd($value)`.
4. Check `storage/logs/laravel.log` for exception details.
5. Fix the cause and rerun relevant feature tests.
6. Remove temporary debug statements before committing.

## Logging example
```php
use Illuminate\Support\Facades\Log;

Log::info('Debugging request', ['route' => request()->path()]);
Log::error('Request failed', ['message' => $exception->getMessage()]);
```

## Notes
- `dump()` prints a value and continues execution.
- `dd()` dumps a value and stops execution; use it temporarily.
- Laravel logs are typically written to `storage/logs/laravel.log`.
- Debug output should not be exposed in production (`APP_DEBUG=false`).
- Debugbar can help inspect queries, request timing, and memory usage in local development only; do not enable it publicly in production.
