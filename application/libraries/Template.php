<?php
/**
 * Created by PhpStorm.
 * User: marlon
 * Date: 14/04/19
 * Time: 20:30
 */
class Template {
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function set_header($data = [])
    {
        $default = [];

        $default = array_merge($default, $data);

        return $this->CI->load->view("template/header", $data, true);
    }

    public function set_navbar($data = [])
    {
        $default = [];

        $default = array_merge($default, $data);

        return $this->CI->load->view("template/navbar", $data, true);
    }

    public function set_heading($data = [])
    {
        $default = [];

        $default = array_merge($default, $data);

        return $this->CI->load->view("template/heading", $data, true);
    }

    public function set_script($data = [])
    {
        $default = [];

        $default = array_merge($default, $data);

        return $this->CI->load->view("template/script", $data, true);
    }

    public function set_footer($data = [])
    {
        $default = [];

        $default = array_merge($default, $data);

        return $this->CI->load->view("template/footer", $data, true);
    }


}