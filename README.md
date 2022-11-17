# Simple middleware example
Built with PHP, composer, Laravel 8
A simple demonstration of middleware - how to check particular query values,
i.e. `version=2` in this example.

## Installation

```bash
git clone https://github.com/aldis-sarja/simple-middleware.git
cd simple-middleware
composer install
```

Make a `.env` file copy
```bash
cp .env.example .env
```

and generate API key
```bash
php artisan key:generate
```

# Usage
```bash
php artisan serve
```

Point your browser to address `http://localhost:8000/`
try with `http://localhost:8000/?version=1` and `http://localhost:8000/?version=2`
