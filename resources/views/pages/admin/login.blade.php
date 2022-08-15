<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>login</title>
</head>

<body>
    <main>
        <form method="post" action="{{ route('admin.process') }}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <h1>Login</h1>

            @if (isset($errors) && count($errors) > 0)
                <div role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (Session::get('success', false))
                <?php $data = Session::get('success'); ?>
                @if (is_array($data))
                    @foreach ($data as $msg)
                        <div role="alert">
                            <i></i>
                            {{ $msg }}
                        </div>
                    @endforeach
                @else
                    <div role="alert">
                        <i></i>
                        {{ $data }}
                    </div>
                @endif
            @endif

            <div>
                <input type="text" name="email" value="{{ old('email') }}" placeholder="Email" required="required"
                    autofocus>
                <label for="floatingName">Email</label>
                @if ($errors->has('email'))
                    <span>{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div>
                <input type="password" name="password" value="{{ old('password') }}" placeholder="Password"
                    required="required">
                <label for="floatingPassword">Password</label>
                @if ($errors->has('password'))
                    <span>{{ $errors->first('password') }}</span>
                @endif
            </div>

            <button type="submit">Login</button>
        </form>
    </main>
</body>

</html>
