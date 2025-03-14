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
        <h2 class="text-center fw-bold">General Conditions of Use</h2>
        <div class="card shadow-sm">
            {{__t('Text_Terms&Condition')}}
            {{-- <h5 class="fw-bold">1. General provisions</h5>
            <p>These terms and conditions govern the use of the Keyhome24 platform, accessible at
                <a href="https://www.keyhome24.com" target="_blank">www.keyhome24.com</a>.
                By accessing our platform, you agree to be bound by these terms. Otherwise, please leave our page.
            </p>

            <h5 class="fw-bold mt-4">2. Services offered</h5>
            <p>Keyhome24 is a platform that connects buyers, sellers, tenants, and lessors of real estate in Switzerland.
                We are not a real estate agency and do not intervene in transactions.
            </p>

            <h5 class="fw-bold mt-4">3. User Obligations</h5>
            <p>Users agree to provide accurate and up-to-date information, to comply with current Swiss legislation,
                not to publish illegal or misleading content, and to respect the rights of other users.
            </p>

            <h5 class="fw-bold mt-4">4. Data protection</h5>
            <p>In accordance with the Federal Data Protection Act (FADP), we are committed to protecting your personal data.
                For more information, see our <a href="#">privacy policy</a>.
            </p>
            <h5 class="fw-bold mt-4">5. Liability</h5>
            <p>Keyhome24 assumes no responsibility for the content posted by users and for transactions between the parties.
                Users are solely responsible for their actions on the platform.</p>

            <h5 class="fw-bold mt-4">6. Applicable law and legal venue</h5>
            <p>
                These conditions are subject to Swiss law. Any dispute will be subject to the exclusive jurisdiction of the
                courts of the canton of Basel-Landschaft, subject to an appeal to the Federal Court.</p> --}}
        </div>
    </div>
@endsection
