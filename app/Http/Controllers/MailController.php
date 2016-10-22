<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function sendMail()
    {
        $transport = \Swift_SmtpTransport::newInstance('mail2.carlocorinto.com', 587)
            ->setUsername('contacto@carlocorinto.com')
            ->setPassword('con2901')
        ;

        /*
        You could alternatively use a different transport such as Sendmail or Mail:

        // Sendmail
        $transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

        // Mail
        $transport = Swift_MailTransport::newInstance();
        */

// Create the Mailer using your created Transport
        $mailer = \Swift_Mailer::newInstance($transport);

// Create a message
        $message = \Swift_Message::newInstance('Wonderful Subject')
            ->setFrom(array('john@doe.com' => 'John Doe'))
            ->setTo(array('patolin00755@hotmail.com'))
            ->setBody('Here is the message itself');

        return $message;
    }
}
