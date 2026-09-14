<!DOCTYPE html>
<html lang="en">
    

<head>
    @vite('resources/css/app.scss')
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <title>{{ $title ?? 'MY APP' }}</title>

</head>

<body>

       {{-- Navigation --}}

    <nav class="navbar">

        <div class="navbar-container">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="navbar-brand">
                MY APP
            </a>


            {{-- Navigation Links --}}
            <div class="navbar-links">

                {{-- Home --}}
                <a
                    href="{{ url('/') }}"
                    class="nav-link"
                >
                    Home
                </a>


                {{-- Posts --}}
                <a href="{{ route('categories.create') }}" class="nav-link"
                >
                    Create Categories
                </a>

                {{-- Categories --}}
                @auth

                    <a
                        href="{{ route('categories.index') }}"
                        class="nav-link"
                    >
                        Categories
                    </a>

                @endauth

            </div>


            {{-- Right Side --}}
            <div class="navbar-user">

                @auth

                    <span class="welcome-text">
                        Welcome, {{ auth()->user()->name }}
                    </span>

                    <form
                        action="{{ route('logout') }}"
                        method="POST"
                        class="logout-form"
                    >

                        @csrf

                        <button
                            type="submit"
                            class="logout-button"
                        >
                            Logout
                        </button>

                    </form>

                @else

                    <a
                        href="{{ route('login') }}"
                        class="nav-link"
                    >
                        Login
                    </a>

                    <a
                        href="{{ route('register') }}"
                        class="register-button"
                    >
                        Register
                    </a>

                @endauth

            </div>

        </div>

    </nav>


    {{-- PAGECONTENT --}}

    <main class="main-content">

        {{ $slot }}

    </main>

</body>

</html>