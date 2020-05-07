<html>
<head>
	<title>CRUD Akun</title>
</head>
<body>

	
	<h3>Edit Akun</h3>

	<a href="/akun"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($t_akun as $a)
	<form action="/akun/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->id }}"> <br/>
		Username<input type="text" required="required" name="username" value="{{ $a->username }}"> <br/>
		Password <input type="text" required="required" name="password" value="{{ $a->password }}"> <br/>
		Email <input type="text" required="required" name="email" value="{{ $a->email }}"> <br/>
		No Hp <input type="text" required="required" name="no_hp" value="{{ $a->no_hp }}"> <br/>
		Alamat <textarea required="required" name="alamat"value="{{ $a->alamat }}"></textarea> <br/>
		Status <input type="number" required="required" name="status" value="{{ $a->status }}"> <br/>
		Akses <input type="number" required="required" name="akses" value="{{ $a->akses }}"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>