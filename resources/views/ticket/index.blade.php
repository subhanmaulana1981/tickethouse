@extends('layouts.app')

@section('content')
    <!-- Judul -->
    <h1>Daftar Pelaporan Tiket</h1>
    <a href="/tickets/create">Buat ticket laporan</a>
    <br>

    <div class="wrapper">
        <ul class="ticket-index">
            @foreach($tickets as $ticket)
                <li class="ticket-item">
                    <img src="/img/tickets.png" alt="ticket-icon">
                    <a href="/tickets/{{ $ticket->id }}">
                        No. Tiket: {{ $ticket->id }}, 
                        Pelapor: {{ $ticket->pelapor }}, 
                        Bidang: {{ $ticket->bidang }}, 
                        SubBidang: {{ $ticket->subbidang }}
                    </a>
                </li>
            @endforeach
        </ul>

    </div>

    <!-- Referensi https://laravel.com/docs/9.x/responses -->
    @if (session('selesai'))
        <div class="alert alert-success">
            {{ session('selesai') }}
        </div>
    @endif  

@endsection