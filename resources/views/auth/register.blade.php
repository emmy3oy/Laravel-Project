<x-layout>

    <div class="auth-page">

        <div class="auth-card">

            <div class="auth-header">

                <h1 class="auth-title">
                    Create Account
                </h1>

                <p class="auth-subtitle">
                    Create your account to get started.
                </p>

            </div>


            <form
                action="{{ route('register.store') }}"
                method="POST"
                class="auth-form"
            >

                @csrf

                {{-- Name --}}
                <div class="form-group">

                    <label for="name" class="form-label">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        class="form-input @error('name') input-error @enderror"
                        placeholder="Enter your full name"
                        required
                    >

                    @error('name')
                        <p class="form-error">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


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
                        placeholder="Create a password"
                        required
                    >

                    @error('password')
                        <p class="form-error">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Confirm Password --}}
                <div class="form-group">

                    <label for="password_confirmation" class="form-label">
                        Confirm Password
                    </label>

                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        class="form-input"
                        placeholder="Confirm your password"
                        required
                    >

                </div>


                {{-- Register Button --}}
                <button
                    type="submit"
                    class="auth-button"
                >
                    Create Account
                </button>

            </form>


            {{-- Login Link --}}
            <div class="auth-footer">

                <p>
                    Already have an account?

                    <a
                        href="{{ route('login') }}"
                        class="auth-link"
                    >
                        Login
                    </a>
                </p>

            </div>

        </div>

    </div>

</x-layout>