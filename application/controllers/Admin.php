<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
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
    if($this->Data->add_values('record_table',$data))
       {
          // return redirect('Admin/contact');
          echo true;
         }  
        else
        {
        echo false ;
         }
    }

    public function contact()
    {
         $this->load->view('pages/header');
        $this->load->view('pages/contact');
        $this->load->view('pages/footer');
    }
   public function send() {
        $this->load->library('email');
        
        $from = "vaishalivk48@gmail.com";

        $to = $this->input->post('vaishalivk48@gmail.com');  //getting to from form
        $subject = "Application for Programmer Registration by -".$this->input->post('fname'); //getting from form
        $message = $this->input->post('comment'); // getting message from form

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }


}
?>
