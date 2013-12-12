@extends('index')
@section('content')

<div class="page-header">
  <h1>PP9 Request</h1>
</div>

{{ Form::open(["route" => "/saverequestrpp8", "role" => "form" , "class"=>"form-horizontal"]) }}
  <div class="form-group">
    <label for="speciesType" class="col-sm-2 control-label">Species Type</label>
    <div class="col-sm-10">
      {{ Form::text("speciesType", null, ["class" => "form-control", "id" => "speciesType"]) }}
    </div>
  </div>
  <div class="form-group">
    <label for="speciesName" class="col-sm-2 control-label">Species Name</label>
    <div class="col-sm-10">
      {{ Form::text("speciesName", null, ["class" => "form-control", "id" => "speciesName"]) }}
    </div>
  </div>
  <div class="form-group">
    <label for="scientificName" class="col-sm-2 control-label">Scientific Name</label>
    <div class="col-sm-10">
      {{ Form::text("scientificName", null, ["class" => "form-control", "id" => "scientificName"]) }}
    </div>
  </div>
  <div class="form-group">
    <label for="unit" class="col-sm-2 control-label">Unit</label>
    <div class="col-sm-10">
      {{ Form::text("unit", null, ["class" => "form-control", "id" => "unit"]) }}
    </div>
  </div>
  <div class="form-group">
    <label for="departureCountry" class="col-sm-2 control-label">Departure Country</label>
    <div class="col-sm-10">
      {{ Form::text("departureCountry", null, ["class" => "form-control", "id" => "departureCountry"]) }}
    </div>
  </div>
  <div class="form-group">
    <label for="amount" class="col-sm-2 control-label">Amount</label>
    <div class="col-sm-10">
      {{ Form::text("amount", null, ["class" => "form-control", "id" => "amount"]) }}
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      {{ Form::submit('Submit', ["class" => "btn btn-primary btn-lg"])}}
    </div>
  </div>
</form>
{{ Form::close() }}
@stop