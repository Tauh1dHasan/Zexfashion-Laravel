@extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                           <h4 style="display: inline" class="float-left">List of all Handi Crafts</h4>
                           <a href="/handi-craft/create" class="btn btn-primary float-right">Upload New</a>
                        </div>

                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Image</th>
                              <th scope="col">Name</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>

                            @foreach ($handiCrafts as $handiCraft)
                                <tr>
                                  <th scope="row">{{ $handiCraft->id }}</th>
                                  <td>
                                      <img width="80px" src="{{ asset('crafts/'. $handiCraft->image) }}" alt="{{ $handiCraft->image }}">
                                  </td>
                                  <td>{{ $handiCraft->title }}</td>
                                  <td>
                                      <form action="/handi-craft/delete/{{ $handiCraft->id }}" method="POST">
                                          @csrf

                                          <input type="submit" name="submit" value="Delete" class="btn btn-danger">
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
    @endsection
