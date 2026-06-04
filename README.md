# Aurigma Customer's Canvas SDK - Rendering Service API Client
======================================================

This module is a PHP API client for Rendering Service API which is a part of [**Customer's Canvas**](https://customerscanvas.com) web-to-print system. It is supposed that you are familiar with its services and understand how to use its APIs. To learn more about Customer's Canvas and its services, refer the [Getting Started section of its documentation](https://customerscanvas.com/dev/getting-started/intro.html).

## Pre-requisites

To be able to use this package, you need to meet the following requirements: 

* You must have an account at Customer's Canvas.

For other platforms, see the [Backend services](https://customerscanvas.com/dev/getting-started/about-backend-services.html) article in Customer's Canvas documentation. 

## Installation

```
composer require aurigma/rendering-service-api-client
```

### Requirements

PHP 7.4 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "aurigma/rendering-service-api-client": "*@dev"
  }
}
```

Then run `composer install`

## Getting Started

Please follow the [installation procedure](#installation).

Receive an access token through your backend as explained in the [documentation](https://customerscanvas.com/dev/getting-started/about-backend-services.html#authorization) and deliver it to your app. 

Then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');

// Configure OAuth2 access token for authorization: OAuth2ClientCredentials
$config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Aurigma\RenderingService\Api\BuildInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->buildInfoGetInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildInfoApi->buildInfoGetInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

 ## Author
 
 Aurigma Inc <info@aurigma.com> (https://customerscanvas.com)