<?php
class Pictures extends CI_Controller {

        public function __construct(){
                parent::__construct();
                $this->load->model('pictures_model');
                $this->load->helper('url_helper');
        }

                 public function index($tags = "mariners")
        {
                $data['pictures'] = $this->pictures_model->get_pics($tags);
                //$data['pics'] = $response->photos->photo;
                //$this->load->view('templates/header', $data);
                $this->load->view('pictures/index', $data);
              
                //we reuse the data items here: header, data/meat of the page, and footer
                //$this->load->view('templates/header', $data);
                //$this->load->view('pictures/index', $data);
                //$this->load->view('templates/footer', $data);
        }

        public function view($slug = NULL)
{
        $data['pics'] = $this->pictures_model->get_pics($slug);

        /*if (empty($data['pics']))
        {
                show_404();
        }
        *///else {

        //$data['title'] = $data['news_item']['title'];

        //$this->load->view('templates/header', $data);
        $this->load->view('pictures/view', $data);
        //$this->load->view('templates/footer');
    }
}

    
