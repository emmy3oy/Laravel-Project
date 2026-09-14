<x-layout>

    <div class="max-w-4xl mx-auto mt-10">

        <h1 class="text-4xl font-bold mb-4">
            Welcome to My Laravel App
        </h1>

        <p class="text-lg mb-6">
            You are now on the home page.
        </p>

        @auth
            <p class="text-green-600">
                Welcome, {{ auth()->user()->name }}!
            </p>
        @else
            <p>
                You are not logged in.
            </p>
        @endauth

    </div>

</x-layout>