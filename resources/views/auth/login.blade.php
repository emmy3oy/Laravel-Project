<x-layout>

    <div class="auth-page">

        <div class="auth-card">

            <div class="auth-header">

                <h1 class="auth-title">
                    Welcome Back
                </h1>

                <p class="auth-subtitle">
                    Login to your account to continue.
                </p>

            </div>


            <form
                action="{{ route('login.store') }}"
                method="POST"
                class="auth-form"
            >

                @csrf

                {{-- Email --}}
                <div class="form-group">

                    <label for="email" class="form-label">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="form-input @error('email') input-error @enderror"
                        placeholder="Enter your email"
                        required
                    >

                    @error('email')
                        <p class="form-error">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Password --}}
                <div class="form-group">

                    <label for="password" class="form-label">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-input @error('password') input-error @enderror"
                        placeholder="Enter your password"
                        required
                    >

                    @error('password')
                        <p class="form-error">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Login Button --}}
                <button
                    type="submit"
                    class="auth-button"
                >
                    Login
                </button>

            </form>


            {{-- Register Link --}}
            <div class="auth-footer">

                <p>
                    Don't have an account?

                    <a
                        href="{{ route('register') }}"
                        class="auth-link"
                    >
                        Create an account
                    </a>
                </p>

            </div>

        </div>

    </div>

</x-layout>