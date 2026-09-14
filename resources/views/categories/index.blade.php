<x-layout>

    <div class="max-w-4xl mx-auto mt-10">

        {{-- Header --}}
        <div class="flex justify-between items-center mb-6">

            <h1 class="text-3xl font-bold">
                Categories
            </h1>

            <a
                href="{{ route('categories.create') }}"
                class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700"
            >
                + Add Category
            </a>

        </div>


        {{-- Success Message --}}
        @if (session('success'))

            <div class="bg-green-100 text-green-700 p-3 rounded mb-6">
                {{ session('success') }}
            </div>

        @endif


        {{-- Categories --}}
        @if ($categories->count())

            <div class="space-y-4">

                @foreach ($categories as $category)

                    <div class="border rounded-lg p-4">

                        <div class="flex justify-between items-start">

                            <div>

                                <h2 class="text-xl font-semibold">
                                    {{ $category->name }}
                                </h2>

                                @if ($category->description)

                                    <p class="text-gray-600 mt-1">
                                        {{ $category->description }}
                                    </p>

                                @endif

                            </div>


                            {{-- Actions --}}
                            <div class="flex gap-2">

                                <a
                                    href="{{ route('categories.show', $category) }}"
                                    class="bg-gray-200 px-3 py-1 rounded"
                                >
                                    View
                                </a>

                                <a
                                    href="{{ route('categories.edit', $category) }}"
                                    class="bg-yellow-500 text-white px-3 py-1 rounded"
                                >
                                    Edit
                                </a>

                                <form
                                    action="{{ route('categories.destroy', $category) }}"
                                    method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this category?');"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="bg-red-600 text-white px-3 py-1 rounded"
                                    >
                                        Delete
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @else

            <div class="border rounded-lg p-6 text-center">

                <p class="text-gray-600 mb-4">
                    No categories found.
                </p>

                <a
                    href="{{ route('categories.create') }}"
                    class="text-blue-600 hover:underline"
                >
                    Create your first category
                </a>

            </div>

        @endif

    </div>

</x-layout>