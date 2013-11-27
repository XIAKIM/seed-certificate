@extends('index')
@section('content')
<div class="head_sec">
<div class="col-md-6 text-left"> <p><strong>PP11 </strong></p> </div>
<div class="col-md-6 text-right"> <p><strong> Request No. {{$pp11->requestID}} </p></div>
</div>
<h1 class="text-center">Seed substitute certification for seed transaction request form</h1>
<br>

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
  <div class="col-md-6"><p><strong>Post code</strong> {{ $description->userAddressPostalCode }}</p></div>
  <div class="col-md-6">
    <p><strong>Phone</strong> {{ $description->telNumber }}</p>
  </div>
</div>

<div class="row">
  <div class="col-md-12"><p><strong>to take care of the company on behalf of</strong> {{ $pp11->companyName }} <strong>that are allowed to</strong> PP{{ $pp11->substituteType }}</p></div>
</div>

<div class="row">
  <div class="col-md-12"><p><strong>by following the certification number</strong> {{ $certificate->id }}</p></div>
</div>

<div class="row">
  <div class="col-md-12"><p><strong>Reason for request substitute certification is because</strong></p></div>
</div>

<div class="row">
  <div class="col-md-12"><p>{{ $pp11->reason }}</p></div>
</div>

  <div class="row">
      <div class="col-md-12">
        @if(Requests::find($pp11->requestID)->status == 'Waiting')
          {{ Form::open(["action" => ["PP11Controller@substituteCertificate", $pp11->id]]) }}
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
                    {{ Form::open(["action" => ["PP11Controller@denyRequestPP11", $pp11->id]]) }}
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