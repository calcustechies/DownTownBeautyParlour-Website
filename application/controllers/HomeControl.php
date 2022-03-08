<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeControl extends CI_Controller
{

    public function index()
    {


        $this->load->model('GalleryModel');
        $data['img'] = $this->GalleryModel->viewGalleryOnIndex();
        print_r($data['img']->result_array(), true);
        //echo "<script>alert($data);</script>";

        $this->load->view('index', $data);
    }


    public function  services()
    {

        $this->load->model('GalleryModel');
        $data['gallery'] = $this->GalleryModel->viewGallery();
        $data['category'] = $this->GalleryModel->viewGalleyCategories();
    
        print_r($data['gallery']->result_array(),true);
        $this->load->view('services', $data);
    }

    //View  gallery  basedon category
    public function viewcategory()
    {
        $category_id = $this->input->post('category_id');
        //echo  $category_id;

        $this->load->model('GalleryModel');
        $data = $this->GalleryModel->category($category_id);

        $result = json_encode($data, true);

        echo  $result;
    }

    //View  Hair Cutting
    public function viewhaircutting()
    {

        $this->load->view('haircutting');
    }

  //View Hair Dyeing 
        public function viewHairDyeing()
        {
    
            $this->load->view('hairdyeing');
        }
 //View  Loreal Spa
         public function viewlorealspa()
         {
     
             $this->load->view('lorealhairspa');
         }
         //view hair colouring 
         public function viewHaircolouring()
         {
     
             $this->load->view('haircolouring');
         }
         //view hair facials
         public function viewFacials()
         {
     
             $this->load->view('facials');
         }
         //View hair bleaching 
         public function viewBleaching()
         {
     
             $this->load->view('bleaching');
         }
         //View pimple treatment
         public function viewPimpleTreatement()
         {
     
             $this->load->view('pimpletreatment');
         }

         //View others
         public function viewothers()
         {
     
             $this->load->view('others');
         }

 
}
