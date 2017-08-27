@extends('layouts.app')

@section('content')

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
             <br><br><br><br><br><br>
              <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>About Grayscale</h2>
            <p>Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
              <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
            <p>This theme features stock photos by
              <a href="http://gratisography.com/">Gratisography</a>
              along with a custom Google Maps skin courtesy of
              <a href="http://snazzymaps.com/">Snazzy Maps</a>.</p>
            <p>Grayscale includes full HTML, CSS, and custom JavaScript files along with SASS and LESS files for easy customization!</p>
          </div>
        </div>
      </div>
    </section>
	
	<hr style="text-color:green;">

    <!-- Contact Section -->
    <section id="movies" class="content-section text-center">
      <div class="container">
        <div class="row">
            <h2 style="margin-left: 200px;">You can check all of your movies here</h2>
				
				<select name="order" style="margin:9px;"  onchange="myFunction(this.value)">
					<option value="0" >Ascending</option>
					<option value="1" >Descending</option>
				</select>
				
				
				<table class="table col-md-8">
				  <thead>
					<tr>
					  <th>#</th>
					  <th>Title</th>
					  <th>Rate</th>
					  <th>Director</th>
					  <th>Actor</th>
					  <th>Duration</th>
					  <th>Actions</th>
					</tr>
				  </thead>
				  <tbody  id="asc">
				  @for($i=0 ; $i < $movies->count() ; $i++)
					
					<tr style="text-align:left;">
					
					  <th scope="row">{{$movies[$i]->id}}</th>
					  <td>{{$movies[$i]->title}}</td>
					  <td>{{$movies[$i]->rate}}</td>
					  <td>{{$movies[$i]->director}}</td>
					  <td>{{$movies[$i]->main_actor}}</td>
					  <td>{{$movies[$i]->duration}}</td>
					  <td>
					
					  	<a class="btn btn-warning" href="/movies/{{$movies[$i]->id}}/edit">Edit</a>
						<a class="btn btn-success" href="/movies/{{$movies[$i]->id}}">Show</a>
						

					  	{!! Form::open(array('route'=>array('movies.destroy', 'id'=>$movies[$i]->id), 'method'=>'DELETE')) !!}
						    {!! Form::token() !!}
						    {!! Form::submit('Delete',array('class'=>'btn btn-danger')) !!}
					    {!! Form::close() !!}
					  </td>
					</tr>
					
				   @endfor
				  </tbody>

				  <tbody id="desc" style="display: none;" >
				  @for($i=$movies->count()-1 ;$i >= 0 ;$i--)
					
					<tr style="text-align:left;">
					
					  <th scope="row">{{$movies[$i]->id}}</th>
					  <td>{{$movies[$i]->title}}</td>
					  <td>{{$movies[$i]->rate}}</td>
					  <td>{{$movies[$i]->director}}</td>
					  <td>{{$movies[$i]->main_actor}}</td>
					  <td>{{$movies[$i]->duration}}</td>
					  <td>
					
					  	<a class="btn btn-warning" href="/movies/{{$movies[$i]->id}}/edit">Edit</a>
						<a class="btn btn-success" href="/movies/{{$movies[$i]->id}}">Show</a>
						

					  	{!! Form::open(array('route'=>array('movies.destroy', 'id'=>$movies[$i]->id), 'method'=>'DELETE')) !!}
						    {!! Form::token() !!}
						    {!! Form::submit('Delete',array('class'=>'btn btn-danger')) !!}
					    {!! Form::close() !!}
					  </td>
					</tr>
					
				   @endfor
				  </tbody>
				</table>

        </div>
      {{ $movies->links() }}
      </div>

    </section>
@endsection
<script>

function myFunction(value) {
	if(value === '0')
	{
		hideDESC();
	}
	else
	{
		hideASC();
	}
}

function hideASC()
{
	//hide asc
	var asc = document.getElementById('asc');
	asc.style.display = 'none';

	//show disc
	var dsc = document.getElementById('desc');
	dsc.style.display = '';
}


function hideDESC()
{
	//hide desc
	var asc = document.getElementById('desc');
	asc.style.display = 'none';
	//show asc
	var dsc = document.getElementById('asc');
	dsc.style.display = '';
}
</script>