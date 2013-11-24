@extends('index')
@section('content')

<div class="head_sec text-right"> <p><strong>PP 2 </strong></p> </div>
<h1 class="text-center">Seed Passing Request Form</h1><br>
<div class="main">
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
    <div class="col-md-6"><p><strong>From district</strong></p></div>
    <div class="col-md-6"><p><strong>Province</strong></p></div>
  </div>
  <div class="row">
      <div class="col-md-4"><p><strong>Address no</strong></p></div>
      <div class="col-md-2"><p><strong>Moo</strong></p></div>
      <div class="col-md-2"><p><strong>Soi</strong></p></div>
      <div class="col-md-4"><p><strong>Road</strong></p></div>
  </div>

  <div class="row">
    <div class="col-md-4"><p><strong>SubDistrict</strong></p></div>
    <div class="col-md-4"><p><strong>District</strong></p></div>
    <div class="col-md-4"><p><strong>Province</strong></p></div>
  </div>

  <div class="row">
      <div class="col-md-6"><p><strong>Post code</strong></p></div>
      <div class="col-md-6"><p><strong>Phone</strong></p></div>
  </div>

  <div class="row">
    <div class="col-md-12"><p><strong>want to request passing certificate on behalf of</strong></p></div>
  </div>

  <div class="row">
    <div class="col-md-12"><p><strong>driven by</strong></p></div>
  </div>

  <div class="row">
    <div class="col-md-4"><p><strong>Company address no.</strong></p></div>
    <div class="col-md-2"><p><strong>Moo</strong></p></div>
    <div class="col-md-2"><p><strong>Soi</strong></p></div>
    <div class="col-md-4"><p><strong>Road</strong></p></div>
  </div>

  <div class="row">
    <div class="col-md-4"><p><strong>SubDistrict</strong></p></div>
    <div class="col-md-4"><p><strong>District</strong></p></div>
    <div class="col-md-4"><p><strong>Province</strong></p></div>
  </div>

  <div class="row">
    <div class="col-md-6"><p><strong>Post code</strong></p></div>
    <div class="col-md-6"><p><strong>Phone</strong></p></div>
  </div>

  <div class="row">
    <div class="col-md-8"><p><strong>By bringing seed from city</strong></p></div>
    <div class="col-md-4"><p><strong>country</strong></p></div>
  </div>

  <div class="row">
    <div class="col-md-8"><p><strong>pass through (checkpoint)</strong></p></div>
    <div class="col-md-4"><p><strong>by (vehicle)</strong></p></div>
  </div>

  <div class="row">
    <div class="col-md-4"><p><strong>to (city)</strong></p></div>
    <div class="col-md-4"><p><strong>(country)</strong></p></div>
    <div class="col-md-4"><p><strong>Road</strong></p></div>
  </div>

          
  <div class="row">
    <div class="col-md-12"><p><strong>Transporting and collecting seed location</strong></p></div>
  </div>

  <div class="row">
    <div class="col-md-12"><p><strong>.....</strong></p></div>
  </div>

  <div class="row">
    <div class="col-md-5"><p><strong>Time duration for passing seed<span class="pull-right">Day</span></strong></p></div>
  </div>
           
  </div>

  <div class="row">
      <div class="col-md-12">
        @if(Requests::find($pp2->requestID)->status == 'Waiting')
          {{ Form::open(["action" => ["PP2Controller@createCertificatePP2", $pp2->id]]) }}
              {{ Form::submit('Verify', ["class" => "btn btn-success"])}}
          {{ Form::close() }}
        <button data-toggle="modal" href="#denySignup" type="button" class="btn btn-danger">Deny</button>
          <!-- Modal -->
          <div class="modal fade" id="denySignup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
               <!--  <div class="modal-header">
                 -->  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <br>
                  <h4 class="modal-title">Comment :</h4>
                <!-- </div> -->
                <div class="modal-body">
                    {{ Form::open(["action" => ["PP2Controller@denyRequestPP2", $pp2->id]]) }}
                      {{ Form::textarea('comment', null, ["rows" => "5", "cols" => "80"]) }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      {{ Form::submit('Submit', ["class" => "btn btn-primary"])}}  
                  {{ Form::close() }}

                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        @endif
      </div>
    </div>

@stop
