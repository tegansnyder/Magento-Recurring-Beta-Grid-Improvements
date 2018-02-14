<?php
class Mage_Sales_Block_Adminhtml_Recurring_Profile_Renderer_Nextcycle extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {

        $value =  $row->getData($this->getColumn()->getIndex());

        //$last_bill = date("Y-m-d H:i:s", $value['last_bill']);
        $next_cycle = date("M d, Y H:i:s", strtotime($value));


        return $next_cycle;

    }
}
?>