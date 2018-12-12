<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send_mail(Request $request)
    {
    	// $validatedData = $this->validate($request,[
		   //      //'from' => 'required|email',
		   //      'name' => 'min:3',
		   //      'email' => 'required|email',
		   //      'msg' => 'min:10',
		   //      // 'attach_file' => 'mimes:jpeg,png,jpg,gif,svg,txt,pdf,ppt,docs,doc,xls',
		   //  	]);
    	// $data = array(
     //        'to' => $request->to,
     //        'subject' => $request->subject,
     //        'bodyMessage' => $request->message,
     //        'attach_file' => $request->attach_file,
     //    );
    	//$data['from'] =>'rockertuhin9669@gmail.com';
        $data = array();
    	$data['name'] = $request->name;
    	$data['email'] = $request->email;
    	// $data['subject'] = $request->subject;
    	$data['bodyMessage'] = $request->msg;
    	// $data['attach_file'] = $request->file('attach_file');
    	$check = Mail::send('email_contact', $data, function($message) use($data)
    	{
    		//$message->from($data['from']);
    		$message->to('rockertuhin96@gmail.com');
    		// $message->subject($data['subject']);
    	// 	$message->attach($data['attach_file']->getRealPath(),array(
    	// 		 'as' => $data['attach_file']->getClientOriginalName(),
    	// 		'mime' => $data['attach_file']->getMimeType(),
    	// 		)
    	// );
    	});
        if($check)
        {
            $notification = array(
                'message' => 'Your mail send Successfully!',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        }
        else
        {
          $notification = array(
                'message' => 'Your mail send Successfully!',
                'alert-type' => 'success',
            );
            return Redirect()->back()->with($notification);
        }
    }
}
