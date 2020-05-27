<?php
/**
 * Created by PhpStorm.
 * User: smp
 * Date: 6/08/18
 * Time: 11:29 AM
 */

namespace MetropagoGateway;

class DateRangeFilter
{
    public $Date1 = null;
    public $Date2 = null;
    public $Operation = "";

    public function ClearFilter()
    {
        $this->Date1= null;
        $this->Date2 = null;
        $this->Operation = "";
    }
    public function GreaterThan($date)
    {
        $this->ClearFilter();
        $this->Date1= $date;
        $this->Operation = "GREATER_THAN";
    }
    public function LessThan($date)
    {
        $this->ClearFilter();
        $this->Date1= $date;
        $this->Operation = "LESS_THAN";
    }
    public function EqualTo($date)
    {
        $this->ClearFilter();
        $this->Date1= $date;
        $this->Operation = "EQUAL_TO";
    }
    public function BETWEEN($dateFrom, $dateTo)
    {
        $this->ClearFilter();
        $this->Date1= $dateFrom;
        $this->Date2= $dateTo;
        $this->Operation = "BETWEEN";
    }
}