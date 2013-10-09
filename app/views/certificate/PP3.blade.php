@extends('index')
@section('content')
	<div class="img-resize"><img src="http://www.siamganesh.com/all_gods/new/garuda/garuda3.jpg" class="centerimg">
			</div>
			<h2 class="textcenter">Seed Collecting Certification</h2>
			<label class="pull-left">Certificate No. .....</label>
			<label class="pull-right">Department of Agriculture</label>
			<br />
			<center>
				<label>This cerificate for</label>
				<br />
				{{ Description::find(User::find($certificate->userID)->descriptionID)->name }} {{ Description::find(User::find($certificate->userID)->descriptionID)->lastName }}
			</center>
			<label>Company address</label>...................<label>Moo</label>.....<label>Soi</label>.....<label>Road</label>...................
			<br />
			<label>Tambol</label>................... <label>District</label>................... <label>Province</label>...................
			<br />
			<label>Owner</label>............................................................................
			<p>
				This certification allows the owner for selling seed follow matra 14 of seed enactment 2518 B.E. reform again in seed enactment 2535 B.E.(second copy) and seed lists that had already requested to the officer.
			</p>
			<br />
			
			<label>Storage Location No.</label>................... <label>Moo</label>................... <label>Soi</label>................... <label>Road</label>...................
			<br />
			<br />
			<label>This certification is available on</label> {{ $certificate->created_at }}
			<br />
			<label>can be used until</label> {{ $certificate->expiredDate}}
			<br />
			<label>and can be used only the location that states in this certification.</label>................... 
			<br />
			
			
			
			<div class="pull-right">
				<label>(signature)</label> ............... <label>officer</label>
				<center>
					(.........................)
				</center>
				
			</div>
@stop