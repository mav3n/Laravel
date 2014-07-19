<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MainController
 *
 * @author mav3n
 */
class MainController extends BaseController {
    
    public function index(){
        return View::make('my.home')->with('title','Sahil Chhabra');
    }
    
    public function sendMsg(){
        $validator=Message::validate(Input::all());
        if($validator->fails()){
            return Redirect::to('home')->withErrors($validator)->withInput();
        }else{
            Message::create(array(
               'name'=>Input::get('name'),
               'email'=>Input::get('email'),
                'subject'=>Input::get('subject'),
                'message'=>Input::get('message'),
                'datetime'=> date('Y:m:d H:m:s')
            ));
            $contactName = Input::get('name');
            $contactEmail = Input::get('email');
            $contactMessage = Input::get('message');
            $data = array('name'=>$contactName, 'email'=>$contactEmail, 'msg'=>$contactMessage);
            Mail::send('my.mail', $data, function($message) use ($contactEmail, $contactName)
            {   
                $message->from($contactEmail, $contactName);
                $message->to('sahil2921@gmail.com', 'Sahil')->subject(Input::get('subject'));
            });
            
            return Redirect::to('home')->with('message','Message sent Successfully!');
        }
    }
    
}

?>
