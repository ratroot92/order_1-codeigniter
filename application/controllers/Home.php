<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();

	}

	public function index() {
		$this->load->view("index");

	}

	public function contact() {
		$this->load->view("contact");

	}
	public function about() {
		$this->load->view("about");

	}

	public function product() {
		$this->load->view("product");

	}

	public function service() {
		$this->load->view("service");

	}

	public function careers() {
		$this->load->view("careers");

	}

	public function sitemap() {
		$this->load->view("sitemap");

	}

	public function expertise() {
		$this->load->view("expertise");

	}

	public function flourlist() {
		$this->load->view("flourList");

	}
	public function mixeslist() {
		$this->load->view("mixesList");

	}
	public function experts() {
		$this->load->view("experts");

	}
}
