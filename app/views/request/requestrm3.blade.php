@extends('index')
@section('content')
<div class = 'page-header'>
<h1>Seed Analysis</h1>
</div>
<h3>Kind of Analysis</h3>
<br>
<!-- <form> -->
<div class="row">
	<div class="col-md-6">
		<img id="pc1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFjUlEQVR4Xu3XSUtcaxCH8XJKHFEUERcqTuBGnFFRwa/uHCckKiGCU5aituI8G+qFFuNCrJuy7+26z1nFpLpO6l8/33O6IJPJPAsXCXwwgQLAfDApylICgAGCKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJQAYExxUQwYDJgSAIwpLooBgwFTAoAxxUUxYDBgSgAwprgoBgwGTAkAxhQXxYDBgCkBwJjiohgwGDAlABhTXBQDBgOmBABjiotiwGDAlABgTHFRDBgMmBIAjCkuigGDAVMCgDHFRTFgMGBKADCmuCgGDAZMCQDGFBfFgMGAKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJ5D2Yvb09+fXrl4yMjEhpaekfw2cyGfnx44eUl5dLX1+fFBQUyPPzs2xubsrR0VH6ua2tTZqbmz8cWq7v9+H/WI4K8xbM6empKIjd3d0U1djYmJSVlb3EpjCmpqbk4eFBvnz5IuPj41JYWCjfv3+Xw8NDKSkpSf+mdd3d3dLQ0PBu5Lm+X472b75N3oKZnp6Wu7u7l4EVxOsTZnt7W/b399O/698rqMfHR9HPKZyJiYkETgHV1NRIV1eXrK+vS1FRkfT398vFxYX8/PlTvn79Kr29vTI7O+t6v8HBQfOy/gsfyFswejroI+Xbt29yfX2dTpAsGP15bm4uPWrOzs7k6uoqAbm/v0+LLy4uTj9nAenP+vm1tTU5OTmR2tpaubm5SZ/r7OyUlpaWdBp530/h5tuVt2CyQSsYPQ1eg1ldXU1QJicnZWlpSW5vb19OFEVRV1eX3mkUgZ44+sjSEygL6unpKbWvrq6WoaGhP3bqeT8FmG9XODD6rrGysiIVFRXS1NQkOzs7ogA6Ojqkvr4+nTz6mHn9iMqeMPobry+1+hm9hoeHpaqq6l0wf3s/wOQ4gbe/8cfHx+nR8vZSDHoKZR9J+mc9mfQE0m9Ro6OjCdbMzEw6efRSYD09Pe+C+Zv7ccLkGIvebmFhQS4vL18eSbr07MuwIlleXk4A9LTQd5z5+fn0btLY2Cjn5+cJTXt7u7S2tsrGxoYcHBxIZWVlqtFeb79Bed7vX4jrr2+Z948kPSH0feXtt6TX7zgKRh9B+hutuBYXFxOG7HvKwMBAwqO4tEZfiBXO1tbWywuyfnvSy+t++fjCq/PnPZh/8iujWPQE0UtPk8++cn2/z5znfwnmMwON3hsw0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3u43z049tXeoahsAAAAASUVORK5CYII=" class="img-circle img-request border-highlight" style="display: block;
		margin-left: auto;
		margin-right: auto;">
		<h3 style="text-align: center">Percent of growth</h3>
	</div>
	<div class="col-md-6">
		<img id="pc2" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFjUlEQVR4Xu3XSUtcaxCH8XJKHFEUERcqTuBGnFFRwa/uHCckKiGCU5aituI8G+qFFuNCrJuy7+26z1nFpLpO6l8/33O6IJPJPAsXCXwwgQLAfDApylICgAGCKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJQAYExxUQwYDJgSAIwpLooBgwFTAoAxxUUxYDBgSgAwprgoBgwGTAkAxhQXxYDBgCkBwJjiohgwGDAlABhTXBQDBgOmBABjiotiwGDAlABgTHFRDBgMmBIAjCkuigGDAVMCgDHFRTFgMGBKADCmuCgGDAZMCQDGFBfFgMGAKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJ5D2Yvb09+fXrl4yMjEhpaekfw2cyGfnx44eUl5dLX1+fFBQUyPPzs2xubsrR0VH6ua2tTZqbmz8cWq7v9+H/WI4K8xbM6empKIjd3d0U1djYmJSVlb3EpjCmpqbk4eFBvnz5IuPj41JYWCjfv3+Xw8NDKSkpSf+mdd3d3dLQ0PBu5Lm+X472b75N3oKZnp6Wu7u7l4EVxOsTZnt7W/b399O/698rqMfHR9HPKZyJiYkETgHV1NRIV1eXrK+vS1FRkfT398vFxYX8/PlTvn79Kr29vTI7O+t6v8HBQfOy/gsfyFswejroI+Xbt29yfX2dTpAsGP15bm4uPWrOzs7k6uoqAbm/v0+LLy4uTj9nAenP+vm1tTU5OTmR2tpaubm5SZ/r7OyUlpaWdBp530/h5tuVt2CyQSsYPQ1eg1ldXU1QJicnZWlpSW5vb19OFEVRV1eX3mkUgZ44+sjSEygL6unpKbWvrq6WoaGhP3bqeT8FmG9XODD6rrGysiIVFRXS1NQkOzs7ogA6Ojqkvr4+nTz6mHn9iMqeMPobry+1+hm9hoeHpaqq6l0wf3s/wOQ4gbe/8cfHx+nR8vZSDHoKZR9J+mc9mfQE0m9Ro6OjCdbMzEw6efRSYD09Pe+C+Zv7ccLkGIvebmFhQS4vL18eSbr07MuwIlleXk4A9LTQd5z5+fn0btLY2Cjn5+cJTXt7u7S2tsrGxoYcHBxIZWVlqtFeb79Bed7vX4jrr2+Z948kPSH0feXtt6TX7zgKRh9B+hutuBYXFxOG7HvKwMBAwqO4tEZfiBXO1tbWywuyfnvSy+t++fjCq/PnPZh/8iujWPQE0UtPk8++cn2/z5znfwnmMwON3hsw0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3u43z049tXeoahsAAAAASUVORK5CYII=" class="img-circle img-request" style="display: block;
		margin-left: auto;
		margin-right: auto;">
		<h3 style="text-align: center">Percent of purity</h3>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<img id="pc3" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAAFjUlEQVR4Xu3XSUtcaxCH8XJKHFEUERcqTuBGnFFRwa/uHCckKiGCU5aituI8G+qFFuNCrJuy7+26z1nFpLpO6l8/33O6IJPJPAsXCXwwgQLAfDApylICgAGCKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJAMYUF8WAwYApAcCY4qIYMBgwJQAYU1wUAwYDpgQAY4qLYsBgwJQAYExxUQwYDJgSAIwpLooBgwFTAoAxxUUxYDBgSgAwprgoBgwGTAkAxhQXxYDBgCkBwJjiohgwGDAlABhTXBQDBgOmBABjiotiwGDAlABgTHFRDBgMmBIAjCkuigGDAVMCgDHFRTFgMGBKADCmuCgGDAZMCQDGFBfFgMGAKQHAmOKiGDAYMCUAGFNcFAMGA6YEAGOKi2LAYMCUAGBMcVEMGAyYEgCMKS6KAYMBUwKAMcVFMWAwYEoAMKa4KAYMBkwJ5D2Yvb09+fXrl4yMjEhpaekfw2cyGfnx44eUl5dLX1+fFBQUyPPzs2xubsrR0VH6ua2tTZqbmz8cWq7v9+H/WI4K8xbM6empKIjd3d0U1djYmJSVlb3EpjCmpqbk4eFBvnz5IuPj41JYWCjfv3+Xw8NDKSkpSf+mdd3d3dLQ0PBu5Lm+X472b75N3oKZnp6Wu7u7l4EVxOsTZnt7W/b399O/698rqMfHR9HPKZyJiYkETgHV1NRIV1eXrK+vS1FRkfT398vFxYX8/PlTvn79Kr29vTI7O+t6v8HBQfOy/gsfyFswejroI+Xbt29yfX2dTpAsGP15bm4uPWrOzs7k6uoqAbm/v0+LLy4uTj9nAenP+vm1tTU5OTmR2tpaubm5SZ/r7OyUlpaWdBp530/h5tuVt2CyQSsYPQ1eg1ldXU1QJicnZWlpSW5vb19OFEVRV1eX3mkUgZ44+sjSEygL6unpKbWvrq6WoaGhP3bqeT8FmG9XODD6rrGysiIVFRXS1NQkOzs7ogA6Ojqkvr4+nTz6mHn9iMqeMPobry+1+hm9hoeHpaqq6l0wf3s/wOQ4gbe/8cfHx+nR8vZSDHoKZR9J+mc9mfQE0m9Ro6OjCdbMzEw6efRSYD09Pe+C+Zv7ccLkGIvebmFhQS4vL18eSbr07MuwIlleXk4A9LTQd5z5+fn0btLY2Cjn5+cJTXt7u7S2tsrGxoYcHBxIZWVlqtFeb79Bed7vX4jrr2+Z948kPSH0feXtt6TX7zgKRh9B+hutuBYXFxOG7HvKwMBAwqO4tEZfiBXO1tbWywuyfnvSy+t++fjCq/PnPZh/8iujWPQE0UtPk8++cn2/z5znfwnmMwON3hsw0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3g4w0TfsPB9gnAON3u43z049tXeoahsAAAAASUVORK5CYII=" class="img-circle img-request" style="display: block;
		margin-left: auto;
		margin-right: auto;">
		<h3 style="text-align: center">Percent of humidity</h3>
	</div>

</div>

<!-- dont change route please change and created function it -->
{{ Form::open(["route" => "/createPP1Request", "role" => "form" , "class"=>"radio"]) }}
Analyze by
<div class="radio">
	<label>
		{{ Form::radio("a", "option1", true) }}
		<div class ='row'>
			<div class='col-md-1'> Only </div>
			<div class='col-md-3'> {{ Form::text("number", null, ["class" => "form-control"   ]) }}</div>
			<div class = 'col-md-3'>amount of example</div>
	</div>
	</label>
	<br>
	<label>
		{{ Form::radio("a", "option2") }}
		All of lot that give to the officer
	</label>
</div>
<div class ='row'>
	<div class = 'col-md-1 col-md-offset-8'>{{ Form::button("Back",  ["class" => "btn btn-default "   ]) }}</div>
	<div class = 'col-md-1'>{{ Form::button("Next",  ["class" => "btn btn-default "   ]) }}</div>
</div>
{{ Form::text("select-request", '1', ["id" => "select-request", "hidden"])}}
{{ Form::close() }}
<!-- </form> -->
@stop