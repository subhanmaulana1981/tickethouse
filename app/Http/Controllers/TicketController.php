<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    // Show all ticket list
    public function index() {

        // $tickets = Ticket::all();
        // $tickets = Ticket::orderBy('pelapor', 'desc')->get();
        // $tickets = Ticket::orderBy('pelapor')->get();
        // $tickets = Ticket::where('bidang', 'sekretariat')->get();
        $tickets = Ticket::latest()->get();

        // json
        // $tickets = [
        //     ['bidang' => 'sekretariat', 'subbidang' => 'sekretariat umum', 'pelapor' => 'burhanudin'],
        //     ['bidang' => 'sekretariat', 'subbidang' => 'sekretariat khusus', 'pelapor' => 'ahmad'],
        //     ['bidang' => 'pengendalian', 'subbidang' => 'pengendalian disiplin', 'pelapor' => 'budi']
        // ];    
        
        return view('ticket.index', [
            'tickets' => $tickets
        ]);        
    }

    // Show ticket detail with id parameter
    public function show($id) {

        $ticket = Ticket::findOrFail($id);
        return view('ticket.show', ['ticket' => $ticket]); 
    }

    public function destroy($id) {

        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        // Notifikasi penyelesaian
        $pesan = "Tiket nomor $id selesai diTangani.";
        return redirect('/tickets')->with('selesai', $pesan);
    }

    // Form to create a ticket
    public function create() {

        return view('ticket.create');
    }    

    // Save | store data to the db
    public function store() {

        /* error_log(request('pelapor'));
        error_log(request('bidang'));
        error_log(request('subbidang')); */

        $ticket = new Ticket();

        $ticket->bidang     = request('bidang');
        $ticket->subbidang  = request('subbidang');
        $ticket->pelapor    = request('pelapor');
        $ticket->dokumens   = request('dokumens');
        
        // Save to db
        $ticket->save();

        // Test in log
        // error_log($ticket);

        // $user = User::create(array('name' => 'John'));

        /* Ticket::create([
            'bidang' => 'administrasi',
            'subbidang' => 'administrasi umum',
            'pelapor' => 'amelia',
        ]); */

        // dump($ticket);

        // Referensi https://laravel.com/docs/9.x/responses
        return redirect('/')->with('konfirmasi', 'Terima kasih, tiket akan segera kami tangani');
    }
    
}
