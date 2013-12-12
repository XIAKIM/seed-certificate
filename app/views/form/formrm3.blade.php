@extends('index')
@section('content')
<div class="head_sec text-right">
  <p><strong>RM 3</strong></p>

</div>
<h1 class="text-center">Seed Analysis Request Form</h1>
<br>


<div class="main">
  <div class="row">
    <div class="col-md-7"><p><strong>Name</strong> {{ $description->name }} {{ $description->lastName }}</p></div>
    <div class="col-md-2"><p><strong>Age</strong> {{ $description->age }}</p></div>
    <div class="col-md-3"><p><strong>Nationality</strong> {{ $description->nationality }}</p></div>
  </div>

  <div class="row">
    <div class="col-md-6"><p><strong>Identification Type</strong> {{ $description->identificationType }}</p></div>
    <div class="col-md-4"><p><strong>Identification Number</strong> {{ $description->identificationNumber }}</p></div>
  </div>

  <div class="row">
    <div class="col-md-6"><p><strong>From district</strong> {{ $description->issuedDistrict }}</p></div>
    <div class="col-md-6"><p><strong>Province</strong> {{ $description->issuedProvince }}</p></div>
  </div>

  <div class="row">
    <div class="col-md-4"><p><strong>Address no</strong> {{ $description->userAddressNo }}</p></div>
    <div class="col-md-2"><p><strong>Moo</strong> {{ $description->userAddressMoo }}</p></div>
    <div class="col-md-2"><p><strong>Soi</strong> {{ $description->userAddressSoi }}</p></div>
    <div class="col-md-4"><p><strong>Road</strong> {{ $description->userAddressRoad }}</p></div>
  </div>

  <div class="row">
    <div class="col-md-4"><p><strong>Tambol</strong> {{ $description->userAddressSubDistrict }}</p></div>
    <div class="col-md-4"><p><strong>District</strong> {{ $description->userAddressDistrict }}</p></div>
    <div class="col-md-4"><p><strong>Province</strong> {{ $description->userAddressProvince }}</p></div>
  </div>

  <div class="row">
    <div class="col-md-6"><p><strong>Post code</strong> {{ $description->PostalCode }}</p></div>
    <div class="col-md-6">
      <p><strong>Phone</strong> {{ $description->telNumber }}</p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12"><p><strong>Want to request seed analysis certification in</strong> {{ $rm3->commonName }} <strong>by</strong> {{ $rm3->testType }}</p></div>
  </div>

  <div class="row">
    <div class="col-md-12"><p><strong>Verification date</strong> {{ $rm3->created_at }}</p></div>
  </div>
</div>

<div class="row">
      <div class="col-md-12">
        @if(Requests::find($rm3->requestID)->status == 'Waiting')
          {{ Form::open(["action" => ["RM3Controller@verifyRequestRM3", $rm3->id]]) }}
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
                    {{ Form::open(["action" => ["RM3Controller@denyRequestRM3", $rm3->id]]) }}
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