<?php

class ApplicationController extends BaseController {

    public static $name = 'application';
    public static $group = 'application';

    /****************************************************************************/

    ## Routing rules of module
    public static function returnRoutes($prefix = null) {

        Route::group(array(), function() {

            Route::any('/ajax/request-call', array('as' => 'ajax.request-call', 'uses' => __CLASS__.'@postRequestCall'));
            Route::any('/ajax/send-message/{mail}', array('as' => 'ajax.send-message', 'uses' => __CLASS__.'@postSendMessage'));
            Route::any('/ajax/architects-competition', array('as' => 'ajax.architects-competition', 'uses' => __CLASS__.'@postArchitectsCompetition'));
        });
    }


    /****************************************************************************/


	public function __construct(){
        #
	}


    public function postRequestCall() {

        #
    }


    public function postSendMessage($template) {

        $json_request = array('status'=>FALSE, 'responseText'=>'');
        try{
            Mail::send('emails.'.$template,Input::except(['_token']),function($message){
                $message->from(Config::get('mail.from.address'),Config::get('mail.from.name'));
                $message->to(Config::get('mail.feedback.address'))->subject('Grapheme.ru');
            });
            $json_request['status'] = TRUE;
            $json_request['responseText'] = 'Сообщение отправлено.';
        }catch (Exception $e){
            return Response::json($json_request, 500);
        }
        return Response::json($json_request, 200);
    }


    public function postArchitectsCompetition() {

        #
    }

}