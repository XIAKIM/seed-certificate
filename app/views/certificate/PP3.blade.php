@extends('index')
@section('content')
<div class="containere">
	<div class="panel-heading text-center">
		<h1>Seed Collection Certifiacation</h1>
	</div>
	<div class="panel-body">
			<div class="row">
				<div class="col-md-6 text-left">
					<h3>
					<strong>Certificate No. </strong>
					{{ $certificate->id }}
					</h3>
				</div>
				<div class="col-md-6 text-right">
					<h3>
						<strong> Department of Agriculture </strong>
					</h3>
				</div>
			</div>
	</div>
	<div class="panel-body">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12 text-center">
					<h4> 
						<strong> 
							This Certificate for
						</strong>
						{{Description::find(User::find($certificate->userID)->descriptionID)->name}}
						{{Description::find(User::find($certificate->userID)->descriptionID)->lastName}}
					</h4>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-body">
			<div class="col-md-12">
				<div class="row form-group">
					<label class="col-lg-3 control-label text-right"> Company Address </label>
					<label class="col-lg-7 control-label text-left">
						{{ PP1::find($certificate->ppID)->companyAddressNo }}
						m. {{PP1::find($certificate->ppID)->companyAddressMoo}}
						soi. {{PP1::find($certificate->ppID)->companyAddressSoi}}
						{{PP1::find($certificate->ppID)->companyAddressRoad}}.rd
						{{PP1::find($certificate->ppID)->companyAddressSubDistrict}},
						{{PP1::find($certificate->ppID)->companyAddressDistrict}},
						{{PP1::find($certificate->ppID)->companyAddressProvince}},
						Thailand
						{{PP1::find($certificate->ppID)->companyAddressPostalCode}}
					</label>
				</div>

				<div class="row form-group">
					<label class="col-lg-3 control-label text-right"> Owner </label>
					<label class="col-lg-7 control-label text-left">
						{{PP1::find($certificate->ppID)->ownerName}}
					</label>
				</div>

				<div class="row form-group">
					<div class="text-center">
						<p>
							This certification allows the owner for selling seed follow matra 14 of seed enactment 2518 B.E. reform again in seed enactment 2535 B.E.(second copy) and seed lists that had already requested to the officer.
						</p>
					</div>
				</div>

				<div class="row form-group">
					<label class="col-lg-3 control-label text-right"> Storage Location Address </label>
					<label class="col-lg-7 control-label text-left">
						{{ PP1::find($certificate->ppID)->storingAddressNo }}
						m. {{PP1::find($certificate->ppID)->storingAddressMoo}}
						soi. {{PP1::find($certificate->ppID)->storingAddressSoi}}
						{{PP1::find($certificate->ppID)->storingAddressRoad}}.rd
						{{PP1::find($certificate->ppID)->storingAddressSubDistrict}},
						{{PP1::find($certificate->ppID)->storingAddressDistrict}},
						{{PP1::find($certificate->ppID)->storingAddressProvince}},
						Thailand
						{{PP1::find($certificate->ppID)->storingAddressPostalCode}}	
					</label>
				</div>
				<div class="row form-group">
					<label class="col-lg-3 control-label text-right"> This certification is available on </label>
					<label class="col-lg-7 control-label text-left"> {{$certificate->created_at}}
				</div>

				<div class="row form-group">
					<div class="text-center">
						<p>
							and can be used only the location that states in this certification.
						</p>
					</div>
				</div>
			<div class="text-right">
				<div class="col-md-12 form-group">
					<label class="col-lg-8 control-label text-right"> Signature </label>
					<label class="col-lg-3 control-label text-center"> 
						(.............................)
					</label>
					<label class="col-lg-1 control-label text-left"> Officer</label>
				</div>
			</div>
		</div>
	</div>
</div>
@stop