<?php
class Blog extends Controller {

	public function __construct()
    {
        parent::__construct();

        // if(!$this->session->has_userdata('username')) {
        //     redirect('Login');
        // }

    }

	public function index()
	{
		//Model loaded
		$this->call->model('blog_model');
		//Method for saving Blog information
		$result = $this->blog_model->get_all_blogs();

		$data = [
			"all_blogs" => $result
		];
		// same as 
		//$data["all_blogs"] = $result;
		
        $this->call->view("blog_view", $data);
		
	}

    public function view($id)
	{
		//Model loaded
		$this->call->model('blog_model');
		//Method for geting a Blog information
		$data["blog_info"] = $this->blog_model->get_a_blog($id);
        $this->call->view("blog_info_view", $data);
	}

    public function edit($id)
	{
		echo 'This is the page used for both POST & GET ';
        # Edit & View
	}

	public function add()
	{
		
		$this->call->library('form_validation');

		if ($this->form_validation->submitted())
		{
			$this->form_validation
				->name('title')
				->required()
				->name('content')
				->required();

			if ($this->form_validation->run())
			{

				$title = $this->io->post("title");
				$content = $this->io->post("content");

				//Model loaded
				$this->call->model('blog_model');
				//Method for saving Blog information
				$result = $this->blog_model->insert_blog($title, $content);

				if($result)
					redirect("Blog");

			}else{
				echo $this->form_validation->errors() . "<hr>";
			}

		}
		$this->call->view("blog_add_view");
	}

}

