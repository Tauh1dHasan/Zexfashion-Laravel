@extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                          
                           <h4 class="float-left" style="display: inline">Upload new item</h4>
                           <a href="/zexadmin" class="btn btn-primary float-right">Go Back</a>
                        </div>

                        <div class="row justify-content-center">
                          <div class="col-md-3"></div>

                          <div class="col-md-6">



                            <form action="/handi-craft/store" method="POST" enctype="multipart/form-data" style="padding-bottom: 25px">
                                @csrf

                              <div class="form-group">
                                <label>Craft Name*</label>
                                <input type="text" class="form-control" placeholder="Enter Your Crafr Name" name="title" required="">
                              </div>

                              <div class="form-group">
                                <label>Upload your Image</label>
                                <input name="Image" type="file" class="form-control-file" required="">
                              </div>

                              <input type="submit" name="submit" value="Submit" class="btn btn-success">

                            </form>





                          </div>

                          <div class="col-md-3"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
