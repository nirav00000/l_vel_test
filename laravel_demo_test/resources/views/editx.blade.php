<h1>edit area</h1>
<form method = "post" action="/updatex">
	@csrf
	@method('PUT')

<input type="text" name="fruit_name" value = "{{$name->fruit_name}}"   >
<input type="hidden" name="id" value = "{{$name->id}}">
<input type="submit" name="updat">
</form>