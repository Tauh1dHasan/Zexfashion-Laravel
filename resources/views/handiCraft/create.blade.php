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

                        <form>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Craft Name*</label>
                            <input type="text" class="form-control" placeholder="Enter Your Crafr Name">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlFile1">Upload your Image</label>
                            <input type="file" class="form-control-file">
                          </div>

                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    @endsection
