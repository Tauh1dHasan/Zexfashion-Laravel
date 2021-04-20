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

                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>
                                  <form action="post">
                                      @CSRF
                                      <input type="submit" value="Delete" class="btn btn-danger">
                                  </form>
                              </td>
                            </tr>
                            
                          </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    @endsection
