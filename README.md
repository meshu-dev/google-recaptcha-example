# Google Recaptcha Example

A prototype app of a form submission which uses Google reCAPTCHA v3.

Reference: [reCaptcha V3](https://developers.google.com/recaptcha/docs/v3).

## Prerequisites

The example app I created was developed with PHP 8.1.9 which was installed via [chocolatey](https://chocolatey.org).

A Google Site key and secret key are both required in order to use reCaptcha V3.

- Go to [Google reCAPTCHA Admin](https://www.google.com/recaptcha/admin).
- Login in via a Google account.
- Create a site, after creation the site and secret keys will be available for you.

## Setup

Install dependancies.

```
composer install
```

Copy .env-example to .env and add in site and secret keys

```
cp .env-example .env
```

Use PHP web server to run app.

```
php -S localhost:8000
```
