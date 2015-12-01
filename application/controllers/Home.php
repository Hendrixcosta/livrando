<?php


defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @author Hendrix
 */
class Home extends CI_Controller  {

    public function index() {

        
        $data['titulo'] = 'Livrando Bookstore';
        $this->load->view('header', $data);

        $this->load->library('livrofactory');
        $data = array('livros' => $this->livrofactory->getRandon());
        $this->load->view('exibirlivros', $data);
        

        $data['categorias'] =  $this->livrofactory->getCategorias();
        $this->load->view('caixadeNavegacao', $data);
        
        $this->load->view('footer');

    }

}
