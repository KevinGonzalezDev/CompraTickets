<?php

namespace App\Http\Controllers;


use App\Http\Controllers;
use Illuminate\Http\Request;

Use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
Use Illuminate\Database\QueryException;
use FilesystemIterator;
Use Illuminate\Support\Facades\File;
Use Illuminate\Support\Facades\Storage;
Use Illuminate\Support\Facades\Response;
Use Illuminate\Http\UploadedFile;
use Barryvdh\DomPDF\Facade as PDF;
use Mail;
use Illuminate\Support\Facades\Config;

class MailController extends Controller{
    
    
    public function index(){
        return view('CalendarPersonal');
    }
    
    public function Notificacion($correo){
        
        $correo['Url'] = "https://tickets.cxsummit.com.co/CompraTickets/public/";
        $correo['UrlRegistro'] = "https://tickets.cxsummit.com.co/CompraTickets/public/RegistroParticipantes/".$correo['idtk'];
        $subject = "Confirmación Compra";
        $for = $correo['destino'];
        Mail::send('mail.notificacion',$correo, function($msj) use($subject,$for){
            $msj->from("soporteprocessplues@gmail.com","Bpro");
            $msj->subject($subject);
            $msj->to($for);
        });
    }
    public function NotificacionBoletas($correo){
        
        $correo['Url'] = "https://tickets.cxsummit.com.co/CompraTickets/public/";
        $correo['UrlRegistro'] = "https://tickets.cxsummit.com.co/CompraTickets/public/Boleta/".$correo['idtk'];
        $subject = "Boleta";
        $for = $correo['destino'];
        Mail::send('mail.notificacionboletas',$correo, function($msj) use($subject,$for){
            $msj->from("soporteprocessplues@gmail.com","Bpro");
            $msj->subject($subject);
            $msj->to($for);
        });
    }
    
    
}
