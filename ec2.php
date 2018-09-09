<?php
require 'vendor/autoload.php';
use Aws\Ec2\Ec2Client;

$credentials = new Aws\Credentials\Credentials('','');
$ec2Client = new Ec2Client([
    'region' => 'us-east-1',
    'version' => 'latest',
    'profile' => 'default',
    'credentials' => $credentials
]);


$instanceIds = array('');

$result = $ec2Client->stopInstances(array(
        'InstanceIds' => $instanceIds,
    ));

echo $result;
?>

[default]
aws_access_key_id=
aws_secret_access_key=
