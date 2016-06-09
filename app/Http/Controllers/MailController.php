<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MailController extends Controller
{

    public function sendForm(Request $request){
        $data = $request->request->all();
        if($this->sendMessage($data)){
            return response()->json(['success'=>"true"]);
        }else{
            return response()->json(['success'=>"false"]);
        }
    }

    private function sendMessage(array $data){
        $mailer = new \PHPMailer();

        $mailer->isSMTP();
        $mailer->SMTPAuth = true;
        $mailer->Host = env('MAIL_HOST');
        $mailer->Username = env('MAIL_USERNAME');
        $mailer->Password = env('MAIL_PASSWORD');
        $mailer->SMTPSecure = env('MAIL_ENCRYPTION');
        $mailer->Port = env('MAIL_PORT');

        $mailer->setFrom('soluciones@prodequa.com','PRODEQUA');
        $mailer->addAddress('soluciones@prodequa.com','PRODEQUA');

        $mailer->isHTML();

        $mailer->Subject = '[FORMULARIO PROCESOS] Nuevo formulario llenado';
        $mailer->Body = "
            <!DOCTYPE html>
                <head>
                    <meta charset=\"utf-8\">
                </head>
                <body>
                    <p>
                        <b>Nombre: </b> ".$data['nombre']."<br>
                        <b>Mail: </b>".$data['email']."<br>
                    </p>
                </body>
            </html>
        ";

        $mailer->AltBody = "Hola";

        return $mailer->send();
    }

    
}
