<?php
class Mage_Sales_Block_Adminhtml_Recurring_Profile_Renderer_Additional extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
//		$last_bill = date("Y-m-d H:i:s", $value['last_bill']);
//		$next_cycle = date("Y-m-d H:i:s", $value['next_cycle']);
        $billed_count = $row->getData('billed_count');
        $failure_count = $row->getData('bill_failed_later');


        $html = '';
        $html .= "<table width=\"100%\" border=\"0\" cellspacing=\"3\" cellpadding=\"3\">";
        $html .= "  <tr>";
        $html .= "    <td width=\"9%\">billed_count</td>";
        $html .= "    <td width=\"91%\">".$billed_count."</td>";
        $html .= "  </tr>";
        $html .= "  <tr>";
        $html .= "    <td>failure_count</td>";
        $html .= "    <td>".$failure_count."</td>";
        $html .= "  </tr>";
        $html .= "</table>";


        return $html;

    }
}
?>