<?php

require_once ('vendor/autoload.php');

use MetropagoGateway\MetropagoGateway;
use Saulmoralespa\MetropagoGateway\CustomerManager;
use Saulmoralespa\Metropagogateway\Customer;
use Saulmoralespa\Metropagogateway\Address;

$Gateway = new  MetropagoGateway("SANDBOX","100177","100177001","","");
$CustManager  = new CustomerManager($Gateway);

#Creating Customer With Unique Identification
$customer = new Customer();
$customer->CustomerId = "0";

$customer->Company = "Sigma123";
$customer->Email = "customer@sigmaprocessing.net";
$customer->Fax = "50712345678";
$customer->FirstName = "John";
$customer->LastName = "Smith";
$customer->Phone = "50712345679";
$customer->UniqueIdentifier = mt_rand() . "121";
$customer->Website = "http://www.sigmaprocessing.net";
#Adding Extra detail to Customer Model
$customer->CustomFields = array();
$customer->CustomFields["Profession"] = "Software Developer";
#Adding Shipping Address to Customer Model;
$customer->ShippingAddress = array();
$ShippingAddress = new Address();
$ShippingAddress->AddressId = "0";
$ShippingAddress->AddressLine1 = "Collin Road";
$ShippingAddress->AddressLine2 = "Suite XYZ";
$ShippingAddress->City = "PA";
$ShippingAddress->CountryName = "PA";
$ShippingAddress->SubDivision = "XYZ";
$ShippingAddress->State = "PA";
$ShippingAddress->ZipCode = "123456";
$customer->ShippingAddress[] =$ShippingAddress;
#Adding Billing Address to Customer Model;
$customer->BillingAddress = array();
$BillingAddress =new  Address();
$BillingAddress->AddressId = "0";
$BillingAddress->AddressLine1 = "Collin Road";
$BillingAddress->AddressLine2 = "Suite XYZ";
$BillingAddress->City = "PA";
$BillingAddress->CountryName = "PA";
$BillingAddress->SubDivision = "XYZ";
$BillingAddress->State = "PA";
$BillingAddress->ZipCode = "123456";
$customer->BillingAddress[] =$BillingAddress;

echo "\r<br/>* Create Customer *<br/>";

$customerRe = $CustManager->UpdateCustomer($customer);

if($customerRe->ResponseDetails->IsSuccess === true)
{
    echo "New Customer added successfully<br/>";
}
else
{
    echo $customerRe->ResponseDetails->ResponseSummary. '<br/>';
}
