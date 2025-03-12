@extends('admin.layouts.layouts')
@section('content')
<div class="pagetitle">
    <h1>Posts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Request</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>
                      Name
                    </th>
                    <th>Email</th>
                    <th>Role</th>
                    {{-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> --}}

                    <th data-type="date" data-format="YYYY/DD/MM">Created At</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role}}</td>

                        <td>{{$user->created_at}}</td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a href="" class="btn btn-primary">Delete</a>
                                <a href="" class="btn btn-primary">Active</a>
                            </div>
                        </td>
                      </tr>
                    @endforeach


                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
  </section>
@endsection
