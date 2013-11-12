@extends('index')
@section('content')
	<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          - PP1
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        @foreach ($pp1s as $pp1)
          <!-- <h3><a href="/verificationSeed/pp1/{{ $pp1->userID }}">{{ Description::find(User::find($pp1->userID)->descriptionID)->name }} {{ Description::find(User::find($pp1->userID)->descriptionID)->lastName }}</a></h3>
          -->
          <h3><a href="/requestlist/pp1/{{ $pp1->userID }}">{{ Description::find(User::find($pp1->userID)->descriptionID)->name }} {{ Description::find(User::find($pp1->userID)->descriptionID)->lastName }}</a></h3>
        @endforeach
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          - PP8
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        <h2>Artima Mahahemarat</h2>
        <h2>Piyawut Kamwiset</h2>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
         - PP9
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <h2>Artima Mahahemarat</h2>
        <h2>Piyawut Kamwiset</h2>
      </div>
    </div>
  </div>
</div>
@stop