@extends('admin.layouts.layouts')
@section('content')

<div class="pagetitle">
    <h1>Translations</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
        <li class="breadcrumb-item active">Translations</li>
      </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Manage Translations</h5>

                    <!-- Add Translation Form -->
                    <form method="POST" action="{{ route('translations.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="key" class="form-control" placeholder="Translation Key" required>
                            </div>
                            <div class="col-md-3">
                                <select name="locale" class="form-control" required>
                                    <option value="en">English</option>
                                    <option value="fr">French</option>
                                    <option value="de">German</option>
                                    <option value="it">Italian</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="value" class="form-control" placeholder="Translation Value" required>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </form>
                    <hr>

                    <!-- Translations Table -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Key</th>
                                <th>Locale</th>
                                <th>Translation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($translations as $translation)
                            <tr>
                                <td>{{ $translation->key }}</td>
                                <td>{{ $translation->locale }}</td>
                                <td>{{ $translation->value }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm edit-translation" data-id="{{ $translation->id }}" data-key="{{ $translation->key }}" data-locale="{{ $translation->locale }}" data-value="{{ $translation->value }}">Edit</button>
                                    <form method="POST" action="{{ route('translations.destroy', $translation->id) }}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Edit Translation Modal -->
<div class="modal fade" id="editTranslationModal" tabindex="-1" aria-labelledby="editTranslationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="" id="editTranslationForm">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Translation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="_method" value="POST">
                <input type="hidden" name="id" id="edit-translation-id">
                <div class="mb-3">
                    <label>Key</label>
                    <input type="text" name="key" id="edit-translation-key" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Locale</label>
                    <select name="locale" id="edit-translation-locale" class="form-control" required>
                        <option value="en">English</option>
                        <option value="fr">French</option>
                        <option value="es">Spanish</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Translation</label>
                    <input type="text" name="value" id="edit-translation-value" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </form>
  </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.edit-translation').forEach(button => {
            button.addEventListener('click', function () {
                let id = this.dataset.id;
                let key = this.dataset.key;
                let locale = this.dataset.locale;
                let value = this.dataset.value;

                document.getElementById('edit-translation-id').value = id;
                document.getElementById('edit-translation-key').value = key;
                document.getElementById('edit-translation-locale').value = locale;
                document.getElementById('edit-translation-value').value = value;

                let form = document.getElementById('editTranslationForm');
                form.action = `/admin/translations/${id}`;
                form.querySelector('input[name="_method"]').value = 'POST';

                new bootstrap.Modal(document.getElementById('editTranslationModal')).show();
            });
        });
    });
</script>

@endsection
