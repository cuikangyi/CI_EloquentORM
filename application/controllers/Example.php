<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2016/1/15
 * Time: 9:26
 */
class Example extends CI_Controller
{
    public function index(){
        $this->load->model('example_model');

        $example = $this->example_model->findOrFail(1);
        // or Example_model::findOrFail(1);
        echo "<pre>";
        print_r($example->toArray());
        echo "</pre>";
    }
}