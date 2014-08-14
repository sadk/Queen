<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * cpanel Controller
 * --------------------------------------
 * Author       : $Author$
 * Revision     : $Revision$
 * Date         : $Date$
 * Position     : $HeadURL$
 *
 */

class cpanel extends CI_Controller {
  
  function __construct()
  {
    parent::__construct();
    $this->load->database();
	$this->load->library('session');
	$this->load->library('parser');
	$this -> load -> helper('url');
	$this->load->language(array('cpanel','common'));
  }
  
  public function index()
  {
   $this->parser->parse('cpanel/index',array());
    
  }
  public function group_panel()
  {
     $this->parser->parse('cpanel/group_panel',array());    
  }

  public function group_add($value='')
  {
      
  }
  
  public function group_list($value='')
  {
    $this->parser->parse('cpanel/group_list',array());   
  }
  
  public function group_edit($value='')
  {
      
  }

  public function group_del($value='')
  {
      
  }
  public function clients_list($value='')
  {
      $this->parser->parse('cpanel/clients_list',array());
  }
  
  public function client_panel($value='')
  {
      $this->parser->parse('cpanel/client_panel',array());
  }
  

}