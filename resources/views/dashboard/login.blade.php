@extends('layout')
@section('content')
    <form action="{{route('loginauth')}}" method="post" class="logreg">
        @csrf
        <center>
            <div class="container">
                @if(Session::get('success'))
                <div class="alert alert-danger w-80">
                    {{ Session::get('success')}}
                </div>
                @endif
            @if(Session::get('fail'))
                <div class="alert alert-danger w-80">
                    {{ Session::get('fail')}}
                </div>
            @endif

            @if(Session::get('notAllowed'))
            <div class="alert alert-danger w-80">
                {{ Session::get('notAllowed')}}
            </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    {{ $error }}
                 @endforeach
                </div>
                    @endif
                <p><h3>Login</h3></p>
                <input type="hidden" name="tujuan" value="LOGIN">
                <p><input type="text" name="username" placeholder="Masukan Username" required></p>
                <p><input type="password" name="password" placeholder="Masukan Password" required></p>
                <p><button name="submit">Login</button></p>
                <p>Belum memiliki akun? <a href="register">daftar disini</a></p>
            </div>
        </center>
    </form>
</body>
</html>
@endsection