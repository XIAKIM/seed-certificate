@extends('index')
@section('content')
<div class="page-header">
      <h1 id="labels">Request</h1>
</div>
<div class="row">
 <div class="col-md-4" class='text-center'><a href="#">PP1 </a><span class="badge">Seed Transaction Request</span></div>
 <div class="col-md-4"><a href="/request" class="btn btn-default btn-sm">Make Request</a></div>
</div>
<br>
<div class="row">
 <div class="col-md-4" class='text-center'><a href="#">PP2 </a><span class="badge">Seed Passing Request</span></div>
 <div class="col-md-4"><a href="/initrequestpp2" class="btn btn-default btn-sm"> Make Request</a></div>
</div>
<br>
<div class="row">
 <div class="col-md-4" class='text-center'><a href="#">PP10 </a><span class="badge">Seed Prolong Request</span></div>
 <div class="col-md-4"><a href="/requestprolong" class="btn btn-default btn-sm">Make Request</a></div>
</div>
<br>
<div class="row">
 <div class="col-md-4" class='text-center'><a href="#">PP11 </a><span class="badge">Seed Substitution Request</span></div>
 <div class="col-md-4"><a href="/requestsubstitute" class="btn btn-default btn-sm">Make Request</a></div>
</div>
<br>
<div class="row">
 <div class="col-md-4" class='text-center'><a href="#">PP12<span class="badge">Seed Relocation Request</span></div>
 <div class="col-md-4"><button type="button" class="btn btn-default btn-sm">Make Request</button></div>
</div>
<br>
<div class="row">
 <div class="col-md-4" class='text-center'><a href="#">RM3 </a><span class="badge">Seed Analysis Request</span></div>
 <div class="col-md-4"><a href="/requestrm3" class="btn btn-default btn-sm">Make Request</a></div>
</div>

@stop
