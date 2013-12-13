@extends('index')
@section('content')
	      
      
      <div class="content">
        <div class="banner">
          <div class="jumbotron">
            <h1>Seed certification</h1>
            <p>Seed request application for Department of Agriculture</p>
            <p><a href="/getstart" class="btn btn-primary btn-lg" role="button">Get Started</a></p>
          </div>
        </div>
        <!-- End banner -->
        <div class="row">
          <div class="col-md-4">
            <div class="thumbnail">
              <div class="caption">
                <h2>Make Easy Request</h2>
                <p>Users make request through our application by clicking request button and follow our method step by step.</p><br>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <div class="caption">
                <h2>Online Status</h2>
                <p>Users can check their request's status through status button, so they will know their current status everytime they view it.</p><br>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail">
              <div class="caption">
                <h2>Accurate Veryfying</h2>
                <p>Seed request veryfying by lab using data in database to compare with data that user sent to lab, if lab deny their request user can view comment from lab.</p>
                </div>
            </div>
          </div>
        </div>
      </div>
@stop