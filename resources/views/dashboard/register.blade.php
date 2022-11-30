@extends('layout')
@section('content')
    <form method="POST" action="{{route('register.post')}}" class="logreg">
        @csrf
        <center>
            <div class="container">
                <p><h3>Register</h3></p>
                <p><input type="text" name="name" placeholder="Nama Lengkap" required></p>
                <p><input type="text" name="username" placeholder="Username" required></p>
                <p><input type="email" name="email" placeholder="Email" required></p>
                <p><input type="password" name="password" placeholder="Password" required></p>
                <p><button name="submit">Daftar</button></p>
                <p>Sudah memiliki akun? 
                    <a href="/">Login</a></p>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
            </div>
        </center>
    </form>
</body>
</html>
@endsection