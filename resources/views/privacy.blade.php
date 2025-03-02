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
    <h2 class="text-center fw-bold">Privacy Policy</h2>
    <div class="card shadow-sm">
        <h5 class="fw-bold">1. Data protection</h5>
        <p>In accordance with the Federal Data Protection Act (FADP) and the General Data Protection Regulation (GDPR), we are committed to protecting your personal data.
        </p>

        <h5 class="fw-bold mt-4">2. Data collected</h5>
        <p>We collect the following data: identification information (name, first name, email), contact details, connection and usage data, as well as information relating to published advertisements.
        </p>

        <h5 class="fw-bold mt-4">3. Use of data</h5>
        <p>Your data is used to manage your account and your advertisements, facilitate connections between users, improve our services and comply with our legal obligations.
        </p>

        <h5 class="fw-bold mt-4">4. Data retention</h5>
        <p>Your data is kept for as long as necessary for the purposes pursued, in accordance with legal requirements. You can request their deletion at any time.
        </p>
        <h5 class="fw-bold mt-4">5. User rights</h5>
<p>In accordance with the LPD, you have the following rights: the right to access your data, the right to rectification, the right to erasure, the right to object to processing, as well as the right to data portability.</p>

<h5 class="fw-bold mt-4">6. Security</h5>
<p>
    We implement appropriate technical and organizational measures to protect your data against unauthorized access, modification, disclosure or destruction.</p>
    <h5 class="fw-bold mt-4">7. Contact</h5>
<p>
    For any questions regarding the protection of your data, you can contact our data protection officer at: info@keyhome24.com.</p>
    </div>
</div>
@endsection
