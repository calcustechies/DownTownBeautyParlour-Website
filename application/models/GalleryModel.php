<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GalleryModel extends CI_Model
{

    public function viewGallery()
    {
        //$data="hai";
        $data = $this->db->query('SELECT * FROM add_faucets INNER JOIN gallery_category
        ON gallery_category.id = add_faucets.category_id;');
        return $data;
    }

    public function category($category_id)
    {
        //$data="hai";
        $data = $this->db->query('SELECT * FROM add_faucets WHERE category_id="' . $category_id . '"');

        return $data->result_array();
    }

    public function viewGalleryOnIndex()
    {
        //$data="hai";
        $data = $this->db->query('SELECT * FROM add_faucets LIMIT 0,4');
        return $data;
    }

    public function viewGalleyCategories()
    {
        //$data="hai";
        $data = $this->db->query('SELECT * FROM gallery_category');
        return $data;
    }
}
