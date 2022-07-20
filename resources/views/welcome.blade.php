@extends('layouts.layout')

@section('content')
    <div text-align="center">
        <img src="/img/customer-service.png" alt="ticket house logo" width="50%">
        <h1>Ticket House</h1>
        <h3>Best ticket handling in town</h3>    
    </div>
    <div>
        <a href="/tickets/create">Buat tiket-laporan baru</a>
    </div>

    <!-- Referensi https://laravel.com/docs/9.x/responses -->
    @if (session('konfirmasi'))
        <div class="alert alert-success">
            {{ session('konfirmasi') }}
        </div>
    @endif  
@endsection