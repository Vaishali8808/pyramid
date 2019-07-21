<?php
class Admin extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('email');

    }
public function index()
{   
    $this->load->view('pages/header');
    $this->load->view('pages/home');
    $this->load->view('pages/footer');
}
public function blog()
{
    $this->load->view('pages/header');
$this->load->view('pages/blog');
$this->load->view('pages/footer');
}
public function contact()
    {
            $this->load->view('pages/header');
        $this->load->view('pages/contact');
        $this->load->view('pages/footer');
    }
public function about()
{
    $this->load->view('pages/header');
    $this->load->view('pages/about');
    $this->load->view('pages/footer');
}
public function insert()
{
    $fname=$this->input->post('fname'); 
    $lname=$this->input->post('lname');
    $email=$this->input->post('email');
    $cno=$this->input->post('contactno');
    $cmt=$this->input->post('comment');
    $data=[
        'fname'=>$fname,
        'lname'=>$lname,
        'email'=>$email,
        'contactno'=>$cno,
        'comment'=>$cmt
    ];
    $this->load->model('Data');
    if($this->Data->add_values('record_table',$data));
       {
           return redirect('Admin/contact');
        }
           


}
}
?>


<!-- 
$this->load->library('email');

$this->email->from('your@example.com', 'Your Name');
$this->email->to('someone@example.com');
$this->email->cc('another@another-example.com');
$this->email->bcc('them@their-example.com');

$this->email->subject('Email Test');
$this->email->message('Testing the email class.');

$this->email->send(); -->