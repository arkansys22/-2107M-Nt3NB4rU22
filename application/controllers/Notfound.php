<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Notfound extends CI_Controller {


		public function index()
		{

			$this->load->view('fronts/404/v404');
		}

	}
