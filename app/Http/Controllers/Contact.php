<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\footer;
use Redirect;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Contact extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Contact",
            "postFooter" => footer::all()
        ];
        //dd($data);
        return view('contact', $data);
    }
    
    public function sendwa(Request $request)
    {
        //dd($request);
        //dd($request->nohp);
        $url = "https://wa.me/6281255223365?text= Perkenalkan, saya " .$request->name. ", " .$request->message;//str_replace(' ', '%20', request('txt')) . str_replace(' ', '%20', request('check'));
        return Redirect::away($url);
    }

    function showContactForm(){
        $data = [
            "title" => "Contact",
            "postFooter" => footer::all()
        ];
        //dd($data);
        return view('contact', $data);
        //return view('contact-form');
    }

    function sendMail(Request $request){
        
        $subject = "Contact dari " . $request->input('name');
        $name = $request->input('name');
        $emailAddress = $request->input('email');
        $message = $request->input('message');

        $emailAdmin = "info@matengsarimakmur.com";

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            // Pengaturan Server
           // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; // or 587                                // TCP port to connect to
            $mail->Username = "nontonfilm177@gmail.com";
            $mail->Password = "cjbxqznopmcfuudc";

            // Siapa yang mengirim email
            //$mail->setFrom("jayadiakhmad17@gmail.com", "Nama Pengirim");
            $mail->setFrom($emailAdmin);

            // Siapa yang akan menerima email
            $mail->addAddress($emailAdmin, $name);
            // $mail->addAddress('ellen@example.com');               // Name is optional

            // ke siapa akan kita balas emailnya
            $mail->addReplyTo($emailAddress, $name);
            
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name


            //Content
            $fullbody = "Email ini dikirim dari alamat : " .$emailAddress. " || " .$message;
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $fullbody;
            $mail->AltBody = $fullbody;

            $mail->send();

            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            // return view('contact-form');
            $data = [
                "title" => "Contact",
                "postFooter" => footer::all()
            ];
            //dd($data);
            return view('contact', $data);

        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }
    
}
