<?php
class Admin extends CI_Controller
{
public function index()
{
    $this->load->helper('url');
    $this->load->view('pages/header.php');
    $this->load->view('pages/home.php');
    $this->load->view('pages/footer.php');
}
public function blog()
{
    $this->load->helper('url');
    $this->load->view('pages/header.php');
$this->load->view('pages/blog.php');
$this->load->view('pages/footer.php');
}
public function contact()
    {
        $this->load->helper('url');
        $this->load->view('pages/header.php');
        $this->load->view('pages/contact.php');
        $this->load->view('pages/footer.php');
    }
public function about()
{
    $this->load->helper('url');
    $this->load->view('pages/header.php');
    $this->load->view('pages/about.php');
    $this->load->view('pages/footer.php');
}
}
?>