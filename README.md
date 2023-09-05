## About Drop Kicks

This is a small demo for adding and editing items in a shopping cart using Livewire

## Installation

Installation should be fairly standard regardless of your running environment.  Clone the repo, then once inside run the following commands one at a time:

```sh
composer install
npm install
npm run build
```

This should cover the basics.  Then, to configure the application run:
```sh
cp .example.env .env
php artisan key:generate
php artisan storage:link
php artisan migrate --seed
```

There is a folder of images at /product-images.  Copy this folder to `/storage/app/public/` as this is where the code will look for pictures

## Usage

A user account named "Sneakerhead" comes pre-seeded.  The login credentials are:
- email: yo@drop-kicks.test
- password: change-me

However you may register for brand new account at anytime, or refresh and reseed using:
```sh
php artisan migrate --seed
```
There is not much by way of content, though products are located on the product page.

### Known Issues
A handful of things were left out for various reasons.  Things such as validation, unit tests (though in it's present form, it's quite a small footprint so there isn't too much to test), roles and permissions, full checkout process etc that I may add at a later date.

