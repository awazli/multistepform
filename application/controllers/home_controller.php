 <?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_controller extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();	
		
		$SITE_FOLDER_NAME_GLOB='edusystem_demo';		
		if(isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT']!="" && $_SERVER['SERVER_PORT']!=80)
		{
			$SITE_URL='http://' . $_SERVER['SERVER_NAME'] .':'.$_SERVER['SERVER_PORT'].'/'.$SITE_FOLDER_NAME_GLOB.'/app/webroot/files/';
		}
		else
		{		
			$SITE_URL='http://' . $_SERVER['SERVER_NAME'] . '/'.$SITE_FOLDER_NAME_GLOB.'/app/webroot/files/';
		}
		//$this->session->set_userdata('url','http://localhost/edusystem_killol/app/webroot/files/');
		$this->session->set_userdata('url',$SITE_URL);
		//$this->head();
		
	}
	function head()
	{
		//$this->db->where('ABOUT_ID','1');
		//$query = $this->db->get('front_about_us');
		//$data['$abt'] = $query->row();
	
		$this->load->view('header',$data);
	}
	function footer()
	{
		
		//$this->load->view('footer',$data);
	}
	function index()
	{
		$this->db->limit(7);
		$this->db->order_by('gCode', 'DESC');
		$query = $this->db->get('front_gallerygroup');
		$data['gallery'] = $query->result();
		
		$this->db->limit(4);
		$query1 = $this->db->get('front_facility');
		$data['facility'] = $query1->result();

        $this->db->limit(4);
		$this->db->where('ROLE_ID','4');
		$query2 = $this->db->get('users');
		$data['user'] = $query2->result();

		$this->db->limit(5);
		$query3 = $this->db->get('front_slider');
		$data['slider'] = $query3->result();

		$this->db->limit(4);
		$query4 = $this->db->get('front_activities');
		$data['activity'] = $query4->result();
		
		/*$this->db->limit(6);
		$this->db->where('STATUS',1);
		$this->db->order_by('SORT_ORDER');
		$query20 = $this->db->get('front_services');
		$data['service'] = $query20->result();*/

		/*$this->db->limit(10);
		$query5 = $this->db->get('front_top_student');
		$data['student'] = $query5->result();*/

		$this->load->view('index',$data);
	}
	function about()
	{
		$query1 = $this->db->get('front_about_us');
		$data['aboutUs'] = $query1->row();

        $this->db->limit(4);
		$this->db->where('ROLE_ID','4');
		$query2 = $this->db->get('users');
		$data['user'] = $query2->result();

		$this->load->view('about',$data);
	}
	function Services()
	{
		$this->db->where('STATUS',1);
        $q1 = $this->db->get('front_services');
		$total_row = $q1->num_rows();
		
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$per_page = 5;
		$url = site_url('home_controller/Services/');
		$r = 0;
		$link=$this->pagination($url,$total_row,$per_page,$page,$r);
		
		$this->db->limit($per_page,$page);
		$this->db->where('STATUS',1);
		$this->db->order_by('SORT_ORDER');
		$query2 = $this->db->get('front_services');
		$data['service'] = $query2->result();
		$data['links']=$link;
		
		$this->load->view('services', $data);
	}

	function Gallery()
	{   
		$q1 = $this->db->get('album');
		$total_row =  $q1->num_rows();

		$per_page = 4;
		$url = site_url('home_controller/Gallery/');
		
		$link=$this->pagination($url,$total_row,$per_page,$this->uri->segment(3));
		
		$this->db->limit($per_page,$this->uri->segment(3));
		$query = $this->db->get('album');
		$data['gallery'] = $query->result();
		$data['links']=$link;
		

		$this->load->view('gallery', $data);
	}
	function gallery_details($id)
	{
		$this->db->where('ALBUM_ID',$id);
        $q1 = $this->db->get('gallery');
		$total_row =  $q1->num_rows();
		
		//$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$per_page = 8;
		$url = site_url('home_controller/gallery_details/'.$id.'/');
		$r = 1;
		$link=$this->pagination($url,$total_row,$per_page,$page,$r);
		
		$this->db->limit($per_page,$page);
		$this->db->where('ALBUM_ID',$id);
		$query1 = $this->db->get('gallery');
		$data['image_list'] = $query1->result();
		$data['links']=$link;
		
		$this->load->view('gallery_details',$data);
	}
	function School()
	{
		$query1 = $this->db->get('front_about_us');
		$data['aboutUs'] = $query1->row();

        $this->db->limit(4);
		$this->db->where('ROLE_ID','4');
		$query2 = $this->db->get('users');
		$data['user'] = $query2->result();

		$this->load->view('schools', $data);
	}
	function College()
	{
		$this->load->view('collage');
	}
	function Philosophy()
	{
		$query1 = $this->db->get('front_philosophy');
		$data['philosop'] = $query1->row();

		$this->load->view('philosophy',$data);
	}
	function ContactUs()
	{
		if($this->input->post('submit'))
		{
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$msg = $this->input->post('message');
			$status = '1';
			$date = date('Y-m-d H:i:s');

			$insert = array('Name'=>$name, 'Email'=>$email, 'Subject'=>$subject, 'Message'=>$msg, 'Status'=>$status, 'Created_date'=>$date, 'Modify_date'=>$date);

			$this->db->insert('front_contactus',$insert);
			
			echo '<script>alert("Thank you for Inquiry.......");</script>';
		}
		
		$query1 = $this->db->get('front_about_us');
		$data['aboutUs'] = $query1->row();
		
		$this->load->view('contact',$data);
	}

	function admission_inquiry()
	{
		if($this->input->post('submit'))
		{
			$name = $this->input->post('name');
			$age = $this->input->post('age');
			$class = $this->input->post('class');
			$medium = $this->input->post('medium');
			$contact = $this->input->post('contact');
			$email = $this->input->post('email');
			$desc = $this->input->post('Desc');
			$cdate = date('Y-m-d H:i:s');
			$INQ_STATUS = 0;

			$insert = array('STUDENT_NAME'=>$name, 'AGE'=>$age, 'CLASS_ID'=>$class,
						'MEDIUM_ID'=>$medium, 'PHONE_NO'=>$contact, 
						'EMAIL'=>$email, 'ADDRESS'=>$desc, 
						'INQ_STATUS'=>$INQ_STATUS, 'created'=>$cdate);

			$this->db->insert('app_admission',$insert);

			echo '<script>alert("Thank you For Admission Inquiry .......");</script>';
		}
		$this->db->limit(4);
		$query = $this->db->get('front_facility');
		$data['facility'] = $query->result();

		$this->db->limit(5);
		$this->db->order_by('Course_ID', 'ASC');
		$query1 = $this->db->get('front_course');
		$data['course1'] = $query1->result();

		$this->db->limit(6);
		$this->db->order_by('Course_ID', 'DESC');
		$query2 = $this->db->get('front_course');
		$data['course2'] = $query2->result();
		
		$this->db->where('STATUS',1);
		$query3 = $this->db->get('academic_class');
		$data['class'] = $query3->result();
		
		$this->db->where('STATUS',1);
		$query4 = $this->db->get('medium');
		$data['medium'] = $query4->result();
		
		$this->load->view('admission_inquiry', $data);
	}
	
	function faq()
	{
		$this->db->limit(6);
		$this->db->order_by('Course_ID', 'DESC');
		$query2 = $this->db->get('front_course');
		$data['course2'] = $query2->result();

		$this->load->view('faq', $data);
	}
	function staff()
	{
        $this->db->limit(4);
		$this->db->where('ROLE_ID','4');
		$query2 = $this->db->get('users');
		$data['user'] = $query2->result();


		$this->load->view('staff',$data);
	}
	function staff_details($id)
	{
		$this->db->where('ROLE_ID',$id);
        $q1 = $this->db->get('users');
		$total_row =  $q1->num_rows();
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$per_page = 18;
		$url = site_url('home_controller/staff_details/'.$id.'/');
		$r = 1;
		$link=$this->pagination($url,$total_row,$per_page,$page,$r);
		
		$this->db->limit($per_page,$page);
		$this->db->where('ROLE_ID',$id);
		$query2 = $this->db->get('users');
		$data['user'] = $query2->result();
		
		$data['links']=$link;
		
		
		$this->load->view('staff_details',$data);
	}
	
	function news()
	{
		$q1 = $this->db->get('news');
		$total_row =  $q1->num_rows();
		
		
		$per_page = 5;
		$url = site_url('home_controller/news/');
		
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$r = 0;
		$link=$this->pagination($url,$total_row,$per_page,$page,$r);
		
		$this->db->limit($per_page,$page);
		$this->db->order_by('END_DATE');
		$query2 = $this->db->get('news');
		$data['news'] = $query2->result();
		$data['links']=$link;

		$this->load->view('news', $data);
	}

	function news_details($id)
	{
		
		$this->db->where('NEWS_ID',$id);
		$query2 = $this->db->get('news');
		$data['news'] = $query2->row();
		
		$this->load->view('news_details', $data);
	}
	
	function pagination($url,$tot_row,$per_page,$seg,$r){
			
			$this->load->library('pagination');
			if($r == 0){
				
			}else{
				$config['uri_segment'] = 4;
			}
			
			$config['base_url'] = $url;
			$config['total_rows'] = $tot_row;
			$config['per_page'] = $per_page;
			$config['next_link'] = 'Next';
			$config['prev_link'] = 'Previous';
			
			/*print_r($config);
			die*/
			$this->pagination->initialize($config); 
			
			return $this->pagination->create_links();				 		
	}

	// function about_intro()
	// {
		// $this->load->view('Introduction');
	// }
	// function about_history()
	// {
		// $this->load->view('History');
	// }
	// function ourstaff()
	// {
		// $this->db->limit(4);
		// $this->db->where('ROLE_ID','4');
		// $query2 = $this->db->get('users');
		// $data['user'] = $query2->result();

		// $this->load->view('our-staffs',$data);
	// }
}
?>


