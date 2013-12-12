@extends('index')
@section('content')

<div class="page-header">
  <h1>Seed Analysis</h1>
</div>

{{ Form::open(["route" => "/saverequestrm3", "role" => "form" , "class"=>"form-horizontal"]) }}
  <div class="form-group">
    <label for="commonName" class="col-sm-2 control-label">Common Name</label>
    <div class="col-sm-10">
      {{ Form::text("commonName", null, ["class" => "form-control", "id" => "commonName"]) }}
    </div>
  </div>
  <div class="form-group">
    <label for="speciesName" class="col-sm-2 control-label">Species Name</label>
    <div class="col-sm-10">
      {{ Form::text("speciesName", null, ["class" => "form-control", "id" => "speciesName"]) }}
    </div>
  </div>
  <div class="form-group">
    <label for="source" class="col-sm-2 control-label">Source</label>
    <div class="col-sm-10">
      {{ Form::text("source", null, ["class" => "form-control", "id" => "source"]) }}
    </div>
  </div>
  <div class="form-group">
    <label for="chemical" class="col-sm-2 control-label">Chemical</label>
    <div class="col-sm-10">
      {{ Form::text("chemical", null, ["class" => "form-control", "id" => "chemical"]) }}
    </div>
  </div>
  <div class="form-group">
    <label for="seedAmount" class="col-sm-2 control-label">Seed Amount</label>
    <div class="col-sm-10">
      {{ Form::text("seedAmount", null, ["class" => "form-control", "id" => "seedAmount"]) }}
    </div>
  </div>
  <div class="form-group">
    <label for="totalWeight" class="col-sm-2 control-label">Total Weight</label>
    <div class="col-sm-10">
      {{ Form::text("totalWeight", null, ["class" => "form-control", "id" => "totalWeight"]) }}
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