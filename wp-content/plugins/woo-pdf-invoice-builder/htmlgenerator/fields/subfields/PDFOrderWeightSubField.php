<?php
namespace rnwcinv\htmlgenerator\fields\subfields;
class PDFOrderWeightSubField extends PDFSubFieldBase {


    public function GetTestFieldValue()
    {
        return "12.5kg";
    }


    public function GetWCFieldName()
    {
        return 'order_weight';
    }

    public function GetRealFieldValue($format='')
    {
        $items=$this->orderValueRetriever->order->get_items();
        $weight=0;
        foreach($items as $currentItem)
        {
            $product=$currentItem->get_product();
            $weight+=\floatval($product->get_weight()*$currentItem->get_quantity());
        }

        return $weight . get_option( 'woocommerce_weight_unit' );
    }

}