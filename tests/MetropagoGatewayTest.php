<?php 
use PHPUnit\Framework\TestCase;
use MetropagoGateway\ACH;
use MetropagoGateway\Address;
use MetropagoGateway\Customer;
use MetropagoGateway\CustomerManager;
use MetropagoGateway\CreditCard;
use MetropagoGateway\MetropagoGateway;
use MetropagoGateway\Transaction;
use MetropagoGateway\TransactionManager;

/**
*  Corresponding Class to test YourClass class
*
*  For each class in your library, there should be a corresponding Unit-Test for it
*  Unit-Tests should be as much as possible independent from other test going on.
*
*  @author yourname
*/
class MetropagoGatewayTest extends TestCase
{
    /**
     * @var
     */
    public $client;

  public function setUp()
  {
      $dotenv = Dotenv\Dotenv::createMutable(__DIR__ . '/../');
      $dotenv->load();
      $this->client = new MetropagoGateway(true,getenv('MERCHANTID'),getenv('TERMINALID'),"","");
  }


  public function testCustom()
  {
      $customer = new ACH();
      $this->assertTrue(is_object($customer));
  }

  public function testCustomerManager()
   {
      $customer = new Address();
      $this->assertTrue(is_object($customer));
   }

   public function testAddCustomer()
   {
       $customer = new Customer();
       $customer->UniqueIdentifier =mt_rand();
       $customer->FirstName = "John";
       $CustManager  = new CustomerManager($this->client);
       $customerResult = $CustManager->AddCustomer($customer);
       $this->assertTrue($customerResult->ResponseDetails->IsSuccess);
   }

   public function testSalerequest()
   {
       $transRequest = new Transaction();
       $transRequest->CustomerData = new Customer();
       $transRequest->CustomerData->CustomerId = "11555";
       $transRequest->CustomerData->CreditCards =array();
       $card = new CreditCard();
       $card->ExpirationDate = "0118";
       $card->Token="ae52e744-4ea6-4ce8-a067-e2ff293eec90";
       $transRequest->CustomerData->CreditCards[] = $card;
       $transRequest->Amount = "1";
       $transRequest->OrderTrackingNumber=rand();
       $TrxManager  = new TransactionManager($this->client);
       $sale_response = $TrxManager->Sale($transRequest);
       $this->assertTrue($sale_response->ResponseDetails->IsSuccess);
   }
}
