@extends('index')
@section('content')
	<div class="panel-group" id="accordion">
		@if(count($pp1s) != 0)
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
					   		<h3><a href="/requestlist/pp1/{{ $pp1->userID }}">{{ Description::find(User::find($pp1->userID)->descriptionID)->name }} {{ Description::find(User::find($pp1->userID)->descriptionID)->lastName }}</a></h3>
						@endforeach
				    </div>
				</div>
			  </div>
		@endif


    @if(count($pp2s) != 0)
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
            - PP2
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
          <div class="panel-body">
		        @foreach($pp2s as $pp2)
              <h3><a href="/requestlist/pp2/{{$pp2->userID}}"> {{Description::find(User::find($pp2->userID)->descriptionID)->name}} {{Description::find(User::find($pp2->userID)->descriptionID)->lastName }} </a></h3>
		        @endforeach
          </div>
        </div>
      </div>
	 @endif

    @if(count($pp8s) != 0)
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
            - PP8
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
          <div class="panel-body">
            @foreach($pp8s as $pp8)
              <h3><a href="/requestlist/pp8/{{$pp8->userID}}"> {{Description::find(User::find($pp8->userID)->descriptionID)->name}} {{Description::find(User::find($pp8->userID)->descriptionID)->lastName }} </a></h3>
            @endforeach
          </div>
        </div>
      </div>
    @endif

    @if(count($pp9s) != 0)
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
            - PP9
            </a>
          </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse">
          <div class="panel-body">
            @foreach($pp9s as $pp9)
              <h3><a href="/requestlist/pp9/{{$pp9->userID}}"> {{Description::find(User::find($pp9->userID)->descriptionID)->name}} {{Description::find(User::find($pp9->userID)->descriptionID)->lastName }} </a></h3>
            @endforeach
          </div>
        </div>
      </div>
    @endif

    @if(count($pp10s) != 0)
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
            - PP10
            </a>
          </h4>
        </div>
        <div id="collapseFive" class="panel-collapse collapse">
          <div class="panel-body">
            @foreach($pp10s as $pp10)
              <h3><a href="/requestlist/pp10/{{$pp10->userID}}"> {{Description::find(User::find($pp10->userID)->descriptionID)->name}} {{Description::find(User::find($pp10->userID)->descriptionID)->lastName }} </a></h3>
            @endforeach
          </div>
        </div>
      </div>
    @endif

    @if(count($pp11s) != 0)
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
            - PP11
            </a>
          </h4>
        </div>
        <div id="collapseSix" class="panel-collapse collapse">
          <div class="panel-body">
            @foreach($pp11s as $pp11)
              <h3><a href="/requestlist/pp11/{{$pp11->userID}}"> {{Description::find(User::find($pp11->userID)->descriptionID)->name}} {{Description::find(User::find($pp11->userID)->descriptionID)->lastName }} </a></h3>
            @endforeach
          </div>
        </div>
      </div>
    @endif

    @if(count($pp12s) != 0)
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
            - PP12
            </a>
          </h4>
        </div>
        <div id="collapseSeven" class="panel-collapse collapse">
          <div class="panel-body">
            @foreach($pp12s as $pp12)
              <h3><a href="/requestlist/pp12/{{$pp12->userID}}"> {{Description::find(User::find($pp12->userID)->descriptionID)->name}} {{Description::find(User::find($pp12->userID)->descriptionID)->lastName }} </a></h3>
            @endforeach
          </div>
        </div>
      </div>
    @endif
    
    @if(count($rm3s) != 0)
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
            - RM3
            </a>
          </h4>
        </div>
        <div id="collapseEight" class="panel-collapse collapse">
          <div class="panel-body">
            @foreach($rm3s as $rm3)
              <h3><a href="/requestlist/rm3/{{$rm3->userID}}"> {{Description::find(User::find($rm3->userID)->descriptionID)->name}} {{Description::find(User::find($rm3->userID)->descriptionID)->lastName }} </a></h3>
            @endforeach
          </div>
        </div>
      </div>
    @endif
  </div>
@stop
