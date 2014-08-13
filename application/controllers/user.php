<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * user Controller
 * --------------------------------------
 * Author       : $Author$
 * Revision     : $Revision$
 * Date         : $Date$
 * Position     : $HeadURL$
 *
 */

class user extends CI_Controller {
  
  function __construct()
  {
    parent::__construct();
    $this->load->database();
	$this->load->library('session');
	$this->load->library('parser');
	$this -> load -> helper('url');
	$this->load->language(array('user'));
  }
  public function signup()
  {
      
  }
  public function login()
  {
  	//是否删除Install.php
  	//判断是否多次尝试密码。
    if ($this->input->post()) {
    	//是否需要等待（重复）
    	//检验用户名 密码长度
    	//查询密码并对比
    	//密码正确时重置lastact_time
    	//设置用户session
    	//gc.in.php?
    	Header("Location:"."./cpanel.php");
    	exit;
    	//假如有出错信息。记录ip
    }
	$this->parser->parse('user/login',array());
  }
  
  public function change($value='')
  {
      
  }
  public function logout()
  {
      
  }
}
