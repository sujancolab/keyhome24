@extends('admin.layouts.layouts')
@section('content')
<div class="pagetitle">
    <h1>Posts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Posts</li>
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
                      Type
                    </th>
                    <th>Category</th>
                    <th>Property Type</th>
                    {{-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> --}}
                    <th>Price</th>
                    <th>Surface Area</th>
                    <th>Rooms</th>
                    <th>Bathroom</th>
                    <th>Floor</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Created At</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->ad_type}}</td>
                        <td>{{$post->category}}</td>
                        <td>{{$post->property_type}}</td>
                        <td>{{$post->price}}</td>
                        <td>{{$post->surface_area}}</td>
                        <td>{{$post->rooms}}</td>
                        <td>{{$post->bathrooms}}</td>
                        <td>{{$post->floor}}</td>
                        <td>{{$post->created_at}}</td>
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
