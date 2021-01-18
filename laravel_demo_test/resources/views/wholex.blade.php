<h1>insert something</h1>

<form method="post" action="/insertx">
	@csrf
<input type="text" name="fruit_name">
<input type="submit" name="submit" value="insert">
</form>
<br><br><br>

<hr>

show data from database

<ul>
@foreach ($fruits as $fruit)
<li>{{ $fruit->fruit_name }}   
	<a href="viewx/{{ $fruit->fruit_name }}   ">V</a>
	<a href="editx/{{ $fruit->id }} " >U</a> 
	<a href="deletex/{{ $fruit->id }}">D</a> 
</li>
@endforeach
</ul>
<hr>

static data
<ul>
	<li>mango</li>
	<li>cherry</li>
	<li>orange</li>
	<li>tomato(its fruite)</li>
</ul>

