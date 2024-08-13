<?php
if(empty($_POST)){
    echo"it is an empty post";
}

else
{
$Name = $_POST['name'];
$Email = $_POST['email'];
$Mobile = $_POST['mobile'];
$Price = $_POST['price'];
include 'instamojo.php';

$api = new Instamojo\Instamojo('test_d501cbd5955d74cb9aefe4a56f5', 'test_c963105cce979b75e95ab5e3723','https://test.instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
        'purpose' => 'WEB DEVELOPMENT',
    'amount' => "$Price",
    'phone' => "$Mobile",
    'buyer_name' => "$Name",
    'redirect_url' => 'http://localhost/dbms_final/thank_you.php',
    'send_email' => false,
    'webhook' => '',
    'send_sms' => false,
    'email' => "$Email",
    'allow_repeated_payments' => false
        ));
    //print_r($response);

    $pay_ulr = $response['longurl'];
    
    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

/*$decode = json_decode($response);

$success = $decode -> success;
if ($success == true)
{

$paymentURL = $decode->payment_request->longurl;

// SQL DATA ENTRY


header("Location:$paymentURL");
exit();

}
else{ echo"$response"; echo"Contact the developer's email ID tv.agathiya@gmail.com with screenshot for technical support";}*/
}

?>
 