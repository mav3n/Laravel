<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Message
 *
 * @author mav3n
 */
class Message extends Eloquent {
    //put your code here
    protected $table="messages";
    public $timestamps=false;
    protected $fillable=['name','email','subject','message','datetime'];
    
    public static $rules = array(
            'name'=>'required|min:2',
            'email'=>'required|min:12|Email',
            'subject'=>'required|min:5',
            'message'=>'required|min:8'
        );
    
    public static function validate($data){
        return Validator::make($data,static::$rules);
    }
    
    protected $hidden = array('password', 'remember_token');
}

?>
