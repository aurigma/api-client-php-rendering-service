<?php
require_once __DIR__.'/../../vendor/autoload.php';

use Jumbojett\OpenIDConnectClient;
use GuzzleHttp\ClientInterface;
use Aurigma\RenderingService\HeaderSelector;
use Aurigma\RenderingService\Configuration;
use Aurigma\RenderingService\Api\RenderingJobsApi;

$oidc = new OpenIDConnectClient('BACK_OFFICE_URL', 'CLIENT_ID', 'CLIENT_SECRET');
$oidc->providerConfigParam(array('token_endpoint'=> 'BACK_OFFICE_URL'.'/connect/token'));

// this assumes success (to validate check if the access_token property is there and a valid JWT) :
$accessToken = $oidc->requestClientCredentialsToken()->access_token;

$client = new GuzzleHttp\Client([
    // Base URI is used with relative requests
    'base_uri' => 'API_URL',
    // You can set any number of default request options.
    'timeout'  => 30.0,
]);
$selector = new HeaderSelector();
$config = new Configuration();
$config->setAccessToken($accessToken);
$config->setHost('API_URL');


$renderingJobsApi = new RenderingJobsApi($client, $config, $selector);
$response1 = $renderingJobsApi->renderingJobsGetAll(null, null, null, null, 1, null);
print_r($response1);

echo 'Done! ';
?>