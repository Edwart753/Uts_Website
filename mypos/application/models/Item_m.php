<?php defined('BASEPATH') OR exit('No direct script access allowed');

class item_m extends CI_Model {

    public function get($id=null){

        $this->db->select('p_item.*, p_category.name as category_name, p_unit.name as unit_name');
        $this->db->from('p_item');
        $this->db->join('p_category', 'p_category.category_id = p_item.category_id');
        $this->db->join('p_unit', 'p_unit.unit_id = p_item.unit_id');
        if($id !=null){
            $this->db->where('item_id', $id);
        }
        $query = $this->db->get();
        return $query;
         
    }


    public function add($post){
        $params = [
            'barcode' => $post['barcode'],
            'name' => $post['product_name'],
            'category_id' => $post['category'],
            'unit_id' => $post['unit'],
            'price' => $post['price'],
        ];
        $this->db->insert('p_item', $params);
    }


    public function del($id)
	{
		$this->db->where('item_id', $id);
		$this->db->delete('p_item');
	}
    
    function update_stock_in($data){
        $qty = $data['qty'];
        $id = $data['item_id'];
        $sql = "UPDATE p_item SET stock = stock + '$qty' WHERE item_id = '$id'";
        $this->db->query($sql);
    }

    function update_stock_out($data){
        $qty = $data['qty'];
        $id = $data['item_id'];
        $sql = "UPDATE p_item SET stock = stock - '$qty' WHERE item_id = '$id'";
        $this->db->query($sql);
    }
}