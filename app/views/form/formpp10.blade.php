@extends('index')
@section('content')
<div class="head_sec text-right">
          <p><strong>PP 10</strong></p>
          <p><strong>For Officer</strong></p>
          <p><strong>Date</strong> ..... </p>
          <p><strong>Name</strong> ..... </p>
        </div>
        <h1 class="text-center">Seed Prolong Request for seed transaction form</h1>
        <br>
        <div class="main">

          <div class="row">
            <div class="col-md-2 col-md-offset-10"><p><strong>Date</strong></p></div>
          </div>

         <div class="row">
            <div class="col-md-7"><p><strong>Name</strong></p></div>
            <div class="col-md-2"><p><strong>Age</strong></p></div>
            <div class="col-md-3"><p><strong>Nationality</strong></p></div>
          </div>

          <div class="row">
            <div class="col-md-6"><p><strong>Identification Type</strong></p></div>
            <div class="col-md-4"><p><strong>Identification Number</strong></p></div>
          </div>

        
          <div class="row">
            <div class="col-md-4"><p><strong>Address no</strong></p></div>
            <div class="col-md-2"><p><strong>Moo</strong></p></div>
            <div class="col-md-2"><p><strong>Soi</strong></p></div>
            <div class="col-md-4"><p><strong>Road</strong></p></div>
          </div>

          <div class="row">
            <div class="col-md-4"><p><strong>Tambol</strong></p></div>
            <div class="col-md-4"><p><strong>District</strong></p></div>
            <div class="col-md-4"><p><strong>Province</strong></p></div>
          </div>

          <div class="row">
            <div class="col-md-6"><p><strong>Post code</strong></p></div>
            <div class="col-md-6">
              <p><strong>Phone</strong></p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12"><p><strong>want to prolong the certification of</strong></p></div>
          </div>

          <div class="row">
           <div class="col-md-4 col-md-offset-3">
             <p>
                <div class="radio-inline">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    <span class="bigtext">Collecting Seed</span>
                  </label>
                </div>
                <div class="radio-inline">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    <span class="bigtext">Selling Seed</span>
                  </label>
                </div>
              </p>
              <p>
              <div class="radio-inline">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                  <span class="bigtext">Importing Seed</span>
                </label>
              </div>
              <div class="radio-inline">
                <label>
                  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                  <span class="bigtext">Exporting Seed</span>
                </label>
              </div>
            </p></div>
        </div>

          <div class="row">
            <div class="col-md-6"><p><strong>On behalf of<span class="pull-right">(Enterprenuer or Juristic person)</span></strong></p></div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-4"><p><strong>Company address no</strong></p></div>
            <div class="col-md-2"><p><strong>Moo</strong></p></div>
            <div class="col-md-2"><p><strong>Soi</strong></p></div>
            <div class="col-md-4"><p><strong>Road</strong></p></div>
          </div>

          <div class="row">
            <div class="col-md-4"><p><strong>Tambol</strong></p></div>
            <div class="col-md-4"><p><strong>District</strong></p></div>
            <div class="col-md-4"><p><strong>Province</strong></p></div>
          </div>

          <div class="row">
            <div class="col-md-6"><p><strong>Post code</strong></p></div>
            <div class="col-md-6">
              <p><strong>Phone</strong></p>
            </div>
          </div>

            <div class="row">
            <div class="col-md-4"><p><strong>Storage address no</strong></p></div>
            <div class="col-md-2"><p><strong>Moo</strong></p></div>
            <div class="col-md-2"><p><strong>Soi</strong></p></div>
            <div class="col-md-4"><p><strong>Road</strong></p></div>
          </div>

          <div class="row">
            <div class="col-md-4"><p><strong>Tambol</strong></p></div>
            <div class="col-md-4"><p><strong>District</strong></p></div>
            <div class="col-md-4"><p><strong>Province</strong></p></div>
          </div>

          <div class="row">
            <div class="col-md-6"><p><strong>Post code</strong></p></div>
            <div class="col-md-6">
              <p><strong>Phone</strong></p>
            </div>
          </div>

          <p class="text-right">
          <a href="" class="btn btn-default">Back</a>
          <a href="passing_table.html" class="btn btn-default">Submit</a>
        </p>
@stop