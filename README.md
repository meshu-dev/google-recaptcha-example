# Google Recaptcha Example

A prototype app of a simple website form which uses Google reCAPTCHA v3.

Google documentation: [reCaptcha V3](https://developers.google.com/recaptcha/docs/v3)

## Prerequisites

App was developed with PHP 8.1.9, installed via [chocolatey](https://chocolatey.org).

Both Google site and secret keys are required in order to use reCaptcha V3.

- Go to [Google reCAPTCHA Admin](https://www.google.com/recaptcha/admin)
- Login in via a Google account
- Add a new site
- Site and secret keys are generated

## Setup

Install dependancies.

```
composer install
```

Copy .env-example to .env and add in both Google keys

```
cp .env-example .env
```

Use PHP web server to run app.

```
php -S localhost:8000
```
