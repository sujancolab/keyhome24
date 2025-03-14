@extends('layouts.layout')
@section('content')
    <style>
        /* .container {
               max-width: 800px;
               margin-top: 50px;
           }*/
        .card {
            padding: 20px;
            border-radius: 10px;
        }
    </style>
    <div class="container" style="max-width: 800px; margin-top:50px; margin-bottom:50px;">
        <h2 class="text-center fw-bold">Mentions Légales</h2>
        <div class="card shadow-sm">
            {{-- <h5 class="fw-bold">1. Informations légales</h5>
            <p>Keyhome24 GmbH <br>
                CHE-XXX.XXX.XXX <br>
                Dürrenmatt 6 <br>
                4123 Allschwil <br>
                Suisse
            </p>

            <h5 class="fw-bold mt-4">2. Contact</h5>
            <p>
                Téléphone : +41 XX XXX XX XX <br>
                Email : <a href="mailto:info@keyhome24.ch">info@keyhome24.ch</a> <br>
                Site web : <a href="https://www.keyhome24.com" target="_blank">www.keyhome24.com</a>
            </p>

            <h5 class="fw-bold mt-4">3. Responsabilité éditoriale</h5>
            <p>Directeur de la publication et responsable éditorial : Bekjiri Nderim</p>

            <h5 class="fw-bold mt-4">4. Hébergement</h5>
            <p>
                IONOS SARL <br>
                7, place de la Gare <br>
                BP 70109 <br>
                57201 SARREGUEMINES
            </p>

            <h5 class="fw-bold mt-4">5. Autorités de surveillance</h5>
            <p>
                FINMA - Autorité fédérale de surveillance des marchés financiers <br>
                Laupenstrasse 27 <br>
                3003 Berne <br>
                Suisse
            </p>

            <h5 class="fw-bold mt-4">6. Propriété intellectuelle</h5>
            <p>L’ensemble du contenu de ce site est protégé par le droit d’auteur selon la législation suisse. Toute
                reproduction ou utilisation non autorisée est interdite.</p> --}}

            {{__t('Text_Legal_Notices')}}
        </div>
    </div>
@endsection
