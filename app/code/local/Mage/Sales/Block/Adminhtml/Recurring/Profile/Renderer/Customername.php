<?php
class Mage_Sales_Block_Adminhtml_Recurring_Profile_Renderer_Customername extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
	public function render(Varien_Object $row)
	{
	
		$value =  $row->getData($this->getColumn()->getIndex());
		
		$value = unserialize($value);
		
		$customer_name = $value['customer_firstname'] . ' ' . $value['customer_lastname'];

		return $customer_name;
	
	}
}
?>