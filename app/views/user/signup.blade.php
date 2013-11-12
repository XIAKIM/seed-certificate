<?php 
	//@author KimApiwat
	//@Date Fri Oct 4 2013
?>
@extends('index')
@section('content')
	<div class="page-header">
		<h1>Register for new user</h1>
	</div>
		{{ Form::open(["route" => "/createuser", "class" => "form-horizontal"]) }}
        <div class="form-group">
        	<label for="firstnameLabel" class="col-lg-2 control-label">First Name</label>
        	<div class="col-lg-8">
        		{{ Form::text("name", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="lastnameLabel" class="col-lg-2 control-label">Last Name</label>
        	<div class="col-lg-8">
        		{{ Form::text("lastname", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="emailLabel" class="col-lg-2 control-label">Email</label>
        	<div class="col-lg-8">
        		{{ Form::email("email", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="ageLabel" class="col-lg-2 control-label">Age</label>
        	<div class="col-lg-8">
        		{{ Form::text("age", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="nationalityLabel" class="col-lg-2 control-label">Nationality</label>
        	<div class="col-lg-8">
        		{{ Form::text("nationality", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="identificationTypeLabel" class="col-lg-2 control-label">Identification Type</label>
        	<div class="col-lg-8">
        		{{ Form::text("identificationType", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="identificationNumberLabel" class="col-lg-2 control-label">Identification Number</label>
        	<div class="col-lg-8">
        		{{ Form::text("identificationNumber", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="issuedDistrictLabel" class="col-lg-2 control-label">Issued District</label>
        	<div class="col-lg-8">
        		{{ Form::text("issuedDistrict", null, ["class" => "form-control"]) }}
        	</div>
        </div>

        <div class="form-group">
        	<label for="issuedProvinceLabel" class="col-lg-2 control-label">Issued Province</label>
        	<div class="col-lg-8">
        		{{ Form::text("issuedProvince", null, ["class" => "form-control"]) }}
        	</div>
        </div>




        <div class="form-group">
        	<label for="addressNoLabel" class="col-lg-2 control-label">Address</label>
        	<div class="col-lg-3">
        		{{ Form::text("userAddressNo", null, ["class" => "form-control"]) }}
        	</div>

            <label for="MooLabel" class="col-lg-1 control-label">Moo</label>
            <div class="col-lg-3">
                {{ Form::text("userAddressMoo", null, ["class" => "form-control"]) }}
            </div>
              
        </div>

        <div class="form-group">           

            <label for="SoiLabel" class="col-lg-2 control-label">Soi</label>
            <div class="col-lg-3">
                {{ Form::text("userAddressSoi", null, ["class" => "form-control"]) }}
            </div>  

            <label for="RoadLabel" class="col-lg-1 control-label">Road</label>
            <div class="col-lg-3">
                {{ Form::text("userAddressRoad", null, ["class" => "form-control"]) }}
            </div>  
        </div>

        <div class="form-group">

            <label for="SubDistrictLabel" class="col-lg-2 control-label">Sub District</label>
            <div class="col-lg-3">
                {{ Form::text("userAddressSubDistrict", null, ["class" => "form-control"]) }}
            </div>  

            <label for="DistrictLabel" class="col-lg-1 control-label">District</label>
            <div class="col-lg-3">
                {{ Form::text("userAddressDistrict", null, ["class" => "form-control"]) }}
            </div>           
            
        </div>

        <div class="form-group">            

            <label for="ProvinceLabel" class="col-lg-2 control-label">Province</label>
            <div class="col-lg-3">
                {{ Form::text("userAddressProvince", null, ["class" => "form-control"]) }}
            </div>

            <label for="PostalCodeLabel" class="col-lg-1 control-label">Postal Code</label>
            <div class="col-lg-3">
                {{ Form::text("userAddressPostalCode", null, ["class" => "form-control"]) }}
            </div>
            
        </div>




		<div class="form-group">
			<label for="telNumberLabel" class="col-lg-2 control-label">Telephone Number</label>
			<div class="col-lg-8"> 
				{{ Form::text("telNumber",null,["class"=>"form-control"])}}
			</div>
		</div>
		<center>
			{{Form::button('Submit', ["class" => "btn btn-primary btn-lg", "type" => "submit", "style" => "margin-top: 50px; margin-bottom: 50px;"])}}
		</center>
    {{ Form::close() }}
@stop

