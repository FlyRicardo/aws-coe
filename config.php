<?php
/**
 * Created by PhpStorm.
 * User: FlyRicardo
 * Date: 10/2/15
 * Time: 7:13 PM
 */

require 'vendor/autoload.php';
use Aws\Common\Enum\Region;
use Aws\DynamoDb\Enum\Type;

$bucket = 'userprofilebucket';  #Replace with your Bucket name
$tableName = "usr_reg"; #Replace with your Database table name
$config = array(
    'key' => 'AKIAIAOXUM3LINAPDZOQ',
    'secret' => 'M4VcicgczCgujkdzlpbuGWL36ZtE5PnyiqGN5PUb',
//    'profile' => 'default', // Use this way, when the script is running on EC2 instace
    'region' => 'us-west-2'
//    'region' => Region::US_EAST_2 #replace with your desired region
);

/** APPROACH FOR AUTHENTICATION **/

/** Approach 1 **/
//$client = DynamoDbClient::factory(array(
//    'credentials' => Credentials::fromIni('default', '/Users/FlyRicardo/.aws/credentials.ini')
//));
//$s3 = S3Client::factory(array(
//    'credentials' => Credentials::fromIni('default', '/Users/FlyRicardo/.aws/credentials.ini')
//));

/** Approach 2 **/
//$provider = CredentialProvider::defaultProvider();
//$client = DynamoDbClient::factory(array(
//    'credentials' => $provider,
//    'region'  => 'us-west-2'
//));
//
//$s3 = S3Client::factory(array(
//    'credentials' => $provider,
//    'region'  => 'us-west-2'
//));


/** Approach 4 **/
//$client = DynamoDbClient::factory(array(
//    'profile' => 'default',
//    'region'  => 'us-west-2'
//));
//$s3 = S3Client::factory(array(
//    'profile' => 'default',
//    'region'  => 'us-west-2'
//));


/** Approach 5 **/
//$client = DynamoDbClient::factory(array(
//    'version' => 'latest',
//    'region'  => 'us-west-2',
//    'credentials' => array(
//        'key'    => 'AKIAIAOXUM3LINAPDZOQ',
//        'secret' => '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',
//    )
//));

//$s3 = S3Client::factory(array(
//    'version' => 'latest',
//    'region'  => 'us-west-2',
//    'credentials' => array(
//        'key'    => 'AKIAIAOXUM3LINAPDZOQ',
//        'secret' => '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',
//    )
//));

?>