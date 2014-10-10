<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 首页控制器
 */
class Index_controller extends CI_Controller {

	/**
	 * [index 首页]
	 */
	public function index()
	{
		$this->load->view("header/index_header");
		$this->load->view("user/user_bar");
		$this->load->view("header");
		$this->load->view("index_slider");
		$this->load->view("footer");
		$this->load->view("user/login_modal");
	}
	/**
	 * [login 登录] 
	 */
	public function login()
	{
		header("Content-type:text/heml;charset=utf-8");

		if($_POST["username"] == "张春阳")
		{
			if($_POST["password"] == "123456")
			{
				echo "恭喜登录成功";
			}
			else
			{
				echo "对不起，您的账号或密码不对,请重新输入";
			}
		}
		else
		{
			echo "对不起，你的账号或密码不对，请重新输入";
		}
	}	
}
