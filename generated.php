<?php 
class ModelCatalogProduct extends Model{



        public function add($data)
        {

            $this->db->query(" INSERT INTO `".DB_PREFIX."product` SET  `model` = '".$this->db->escape($data['model'])."'  
 ,  `sku` = '".$this->db->escape($data['sku'])."'  
 ,  `upc` = '".$this->db->escape($data['upc'])."'  
 ,  `ean` = '".$this->db->escape($data['ean'])."'  
 ,  `jan` = '".$this->db->escape($data['jan'])."'  
 ,  `isbn` = '".$this->db->escape($data['isbn'])."'  
 ,  `mpn` = '".$this->db->escape($data['mpn'])."'  
 ,  `location` = '".$this->db->escape($data['location'])."'  
 ,  `quantity` = '".(int)$data['quantity']."'  
 ,  `stock_status_id` = '".(int)$data['stock_status_id']."'  
 ,  `image` = '".$this->db->escape($data['image'])."'  
 ,  `manufacturer_id` = '".(int)$data['manufacturer_id']."'  
 ,  `shipping` = '".(int)$data['shipping']."'  
 ,  `price` = '".(float)$data['price']."'  
 ,  `points` = '".(int)$data['points']."'  
 ,  `tax_class_id` = '".(int)$data['tax_class_id']."'  
 ,  `date_available` = '".$this->db->escape($data['date_available'])."'  
 ,  `weight` = '".(float)$data['weight']."'  
 ,  `weight_class_id` = '".(int)$data['weight_class_id']."'  
 ,  `length` = '".(float)$data['length']."'  
 ,  `width` = '".(float)$data['width']."'  
 ,  `height` = '".(float)$data['height']."'  
 ,  `length_class_id` = '".(int)$data['length_class_id']."'  
 ,  `subtract` = '".(int)$data['subtract']."'  
 ,  `minimum` = '".(int)$data['minimum']."'  
 ,  `sort_order` = '".(int)$data['sort_order']."'  
 ,  `status` = '".(int)$data['status']."'  
 ,  `date_added` = '".$this->db->escape($data['date_added'])."'  
 ,  `date_modified` = '".$this->db->escape($data['date_modified'])."'  
 ,  `viewed` = '".(int)$data['viewed']."'  
 ,  `delivery_time` = '".(int)$data['delivery_time']."'  
 ,  `feed` = '".(int)$data['feed']."'  
 ,  `delivery_price` = '".(float)$data['delivery_price']."'  
 ,  `google_merchant` = '".(int)$data['google_merchant']."'  
 " );

            return $this->db->getLastId();
        }

        public function edit($id,$data)
        {
            $this->db->query(" UPDATE `".DB_PREFIX."product` SET  `model` = '".$this->db->escape($data['model'])."'  
 ,  `sku` = '".$this->db->escape($data['sku'])."'  
 ,  `upc` = '".$this->db->escape($data['upc'])."'  
 ,  `ean` = '".$this->db->escape($data['ean'])."'  
 ,  `jan` = '".$this->db->escape($data['jan'])."'  
 ,  `isbn` = '".$this->db->escape($data['isbn'])."'  
 ,  `mpn` = '".$this->db->escape($data['mpn'])."'  
 ,  `location` = '".$this->db->escape($data['location'])."'  
 ,  `quantity` = '".(int)$data['quantity']."'  
 ,  `stock_status_id` = '".(int)$data['stock_status_id']."'  
 ,  `image` = '".$this->db->escape($data['image'])."'  
 ,  `manufacturer_id` = '".(int)$data['manufacturer_id']."'  
 ,  `shipping` = '".(int)$data['shipping']."'  
 ,  `price` = '".(float)$data['price']."'  
 ,  `points` = '".(int)$data['points']."'  
 ,  `tax_class_id` = '".(int)$data['tax_class_id']."'  
 ,  `date_available` = '".$this->db->escape($data['date_available'])."'  
 ,  `weight` = '".(float)$data['weight']."'  
 ,  `weight_class_id` = '".(int)$data['weight_class_id']."'  
 ,  `length` = '".(float)$data['length']."'  
 ,  `width` = '".(float)$data['width']."'  
 ,  `height` = '".(float)$data['height']."'  
 ,  `length_class_id` = '".(int)$data['length_class_id']."'  
 ,  `subtract` = '".(int)$data['subtract']."'  
 ,  `minimum` = '".(int)$data['minimum']."'  
 ,  `sort_order` = '".(int)$data['sort_order']."'  
 ,  `status` = '".(int)$data['status']."'  
 ,  `date_added` = '".$this->db->escape($data['date_added'])."'  
 ,  `date_modified` = '".$this->db->escape($data['date_modified'])."'  
 ,  `viewed` = '".(int)$data['viewed']."'  
 ,  `delivery_time` = '".(int)$data['delivery_time']."'  
 ,  `feed` = '".(int)$data['feed']."'  
 ,  `delivery_price` = '".(float)$data['delivery_price']."'  
 ,  `google_merchant` = '".(int)$data['google_merchant']."'  
 WHERE `product_id` = '".$id."' ");
        }

        public function getProduct($id)
        {
            $result = $this->db->query(" SELECT * FROM `".DB_PREFIX."product`  WHERE `product_id` = '".$id."' ");
            return $result->row;
        }

        public function getProducts()
        {
            $result = $this->db->query(" SELECT * FROM `".DB_PREFIX."product` ");
            return $result->rows;
        }

        public function delete($id)
        {

            $this->db->query("  DELETE FROM `".DB_PREFIX."product`  WHERE `product_id` = '".$id."' ");
        }


}