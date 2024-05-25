<?php

namespace App\Http\Controllers;

use App\Mail\MarkdownRefus;
use Illuminate\Http\Request;
use App\Mail\MarkdownContact;
use App\Mail\MarkdownProposition;
use App\Mail\MarkdownReservation;
use App\Mail\MarkdownConfirmation;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

// Envoi de Mail du client vers le Bayla pour une simple prise de contact dans la vue "contact.blade.php"

    public function Sendcontact(){
        Mail::to('Caroline@test.com')->send(new MarkdownContact);
        return redirect('contact')
            ->with('success', 'Votre message a bien été envoyé, nous reviendrons vers vous dans les meilleurs délais');
    }

// Envoi d'un mail du client vers le Bayla pour une demande de réservation "reservation.blade.php"

    public function Sendreservation(){
        Mail::to('Caroline@test.com')->send(new MarkdownReservation);
        return redirect('reservation')
            ->with('success', 'Votre demande de réservation a bien été prise en compte, notre équipe reviendra vers vous par Mail pour vous confirmer cette dernière');
    }

// Renvoi d'un mail du Bayla vers le client avec 3 choix de réponses en fonction de la situation (markdownconfirmation/markdownrefus/markdownproposition .blade.php)
    //Validation de la réservation
    public function Sendconfirmation(){
        if(isset($_POST['valider'])){
            Mail::to($_POST['email'])->send(new MarkdownConfirmation);
            return redirect('reservation')
            ->with('success', 'Email bien envoyé au client');
        }
    //Refus de la réservation
        elseif(isset($_POST['refuser'])){
            Mail::to($_POST['email'])->send(new MarkdownRefus);
            return redirect('reservation')
            ->with('success', 'Email bien envoyé au client');
        }
    //Refus de la réservation mais avec une proposition d'un nouvel horaire
        else{
        Mail::to($_POST['email'])->send(new MarkdownProposition);
        return redirect('reservation')
        ->with('success', 'Email bien envoyé au client');
        }
    }
}
