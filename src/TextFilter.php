<?php
/**
 * Created by PhpStorm.
 * User: smp
 * Date: 6/08/18
 * Time: 11:28 AM
 */

namespace MetropagoGateway;

class TextFilter
{
    public $Text = "";
    public $Operation = "";

    public function ClearFilter()
    {
        $this->Text= "";
        $this->Operation = "";
    }
    public function StartsWith($text)
    {
        $this->ClearFilter();
        $this->Text= $text;
        $this->Operation = "STARTS_WITH";
    }
    public function EndsWith($text)
    {
        $this->ClearFilter();
        $this->Text= $text;
        $this->Operation = "ENDS_WITH";
    }
    public function Is($text)
    {
        $this->ClearFilter();
        $this->Text= $text;
        $this->Operation = "IS";
    }
}