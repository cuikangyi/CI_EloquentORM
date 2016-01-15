<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 2016/1/15
 * Time: 9:28
 */
use Illuminate\Database\Eloquent\Model as Eloquent;

class Example_model extends Eloquent
{
    protected $table = 'example';

    protected $primaryKey = 'id';

    public $timestamps = false;
}