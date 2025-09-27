@extends('layouts.master')

@section('title', 'About')
@section('content')

<div>
    <h1>About</h1>
    <div class="row">
        <div class="col-md-3 col-lg-2">
            <img src="{{ asset('storage/Foto Jas Andhika.jpg') }}" alt="Andhika Bagus Satria" class="img-fluid">
        </div>
        <div class="col-md-9 col-lg-10">
            Aplikasi ini dibuat oleh:
            <table>
                <tr>
                    <td style="width: 70px;">Nama</td>
                    <td>: Andhika Bagus Satria</td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td>: D3-MI PSDKU KOTA KEDIRI</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>: 2331730063</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>: 25 September 2025</td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection
