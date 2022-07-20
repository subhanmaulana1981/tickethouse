@extends('layouts.app')

@section('content')

    <!-- Route Parameter -->
    <div class="ticket-details">
        
        <h1>Ticket No: {{ $ticket->id }}</h1>

        <p>Pelapor: {{ $ticket->pelapor }}</p>
        <p>Bidang: {{ $ticket->bidang }}</p>
        <p>SubBidang: {{ $ticket->subbidang }}</p>
        <p>Dokumen persyaratan:</p>
        <ul>
            @foreach($ticket->dokumens as $dokumen)
                <li>{{ $dokumen }}</li>
            @endforeach
        </ul>
        <form action="/tickets/{{ $ticket->id }}" method="POST">
            @csrf
            @method("DELETE")
            <button>Selesaikan tiket laporan</button>
        </form>

    </div>

    <br>
    <a href='/tickets'>Kembali ke daftar tiket</a>
@endsection