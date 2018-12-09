<?php 
use PHPUnit\Framework\TestCase;
use Saulmoralespa\Metropagogateway\ACH;
use Saulmoralespa\MetropagoGateway\Address;

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
  * Just check if the YourClass has no syntax error 
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
  public function testIsThereAnySyntaxError()
  {
	$var = new \MetropagoGateway\MetropagoGateway(true,"100177","100177001","","");
	$this->assertTrue(is_object($var));
	unset($var);
  }


  public function testCustom()
  {
      $customer = new \MetropagoGateway\ACH();
      $this->assertTrue(is_object($customer));
      unset($customer);
  }

    public function testCustomerManager()
    {
        $customer = new \MetropagoGateway\Address();
        $this->assertTrue(is_object($customer));
        unset($customer);
    }
}
