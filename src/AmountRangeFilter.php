<?php

/**
 * ParameterFilter short summary.
 * Parameter Filter model
 *
 * ParameterFilter description.
 * File contains following three type of filter classes
 * -AmountRangeFilter
 * -DateRangeFilter
 * -TextFilter
 * 
 * All filter classes contains helping methods for the class operations.
 *
 * @version 1.0
 * @author Raza
 */

namespace MetropagoGateway;

class AmountRangeFilter
{
    public $Amount1 = 0;
    public $Amount2 = 0;
    public $Operation = "";

    public function ClearFilter()
    {
        $this->Amount1= 0;
        $this->Amount2 = 0;
        $this->Operation = "";
    }
    public function GreaterThan($amount)
    {
        $this->ClearFilter();
        $this->Amount1= $amount;
        $this->Operation = "GREATER_THAN";
    }
    public function LessThan($amount)
    {
        $this->ClearFilter();
        $this->Amount1= $amount;
        $this->Operation = "LESS_THAN";
    }
    public function EqualTo($amount)
    {
        $this->ClearFilter();
        $this->Amount1= $amount;
        $this->Operation = "EQUAL_TO";
    }
    public function BETWEEN($amountFrom, $amountTo)
    {
        $this->ClearFilter();
        $this->Amount1= $amountFrom;
        $this->Amount2= $amountTo;
        $this->Operation = "BETWEEN";
    }
}