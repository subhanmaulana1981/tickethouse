@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <h1>Buat Tike Laporan baru</h1>
        <form class="create ticket" action="/tickets" method="POST">
            @csrf
            <label for="pelapor">Nama Anda</label>
            <input type="text" id="pelapor" name="pelapor"><br>
            <label for="bidang">Nama Bidang</label>
            <select name="bidang" id="bidang">
                <option value="Administrasi">Administrasi</option>
                <option value="Kesejahteraan">Kesejahteraan</option>
                <option value="Kepegawaian">Kepegawaian</option>
            </select><br>
            <label for="subbidang">Sub-Bidang</label>
            <select name="subbidang" id="subbidang">
                <option value="Administrasi Umum">Administrasi Umum</option>
                <option value="Kesejahteraan Pegawai">Kesejahteraan Pegawai</option>
                <option value="Kepegawaian">Kepegawaian Daerah</option>
            </select><br>
            <fieldset>
            <label for="dokumens">Dokumen terlampir:</label><br>
            <input type="checkbox" name="dokumens[]" value="KTP">KTP<br>
            <input type="checkbox" name="dokumens[]" value="KK">KK<br>
            <input type="checkbox" name="dokumens[]" value="SIM">SIM<br>
            </fieldset>
            <input type="submit" value="Buat tiket baru">
        </form>
    </div>

@endsection