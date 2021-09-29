<?

use GuzzleHttp\Client;
require 'vendor/autoload.php'

$client = new Client([
  'base_url' => 'http://httpbin.org'
]);

echo $response = $client->request('GET', 'ip');

echo "<pre>";
print_r(get_class_methods($response));
echo "</pre>";