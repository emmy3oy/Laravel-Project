<x-layout>

    <div class="form-page">

        <div class="form-card">

            <div class="form-header">

                <h1 class="form-title">
                    Edit Category
                </h1>

                <p class="form-subtitle">
                    Update the category information below.
                </p>

            </div>

            <form
                action="{{ route('categories.update', $category) }}"
                method="POST"
                class="form"
            >

                @csrf
                @method('PUT')

                {{-- Name --}}
                <div class="form-group">

                    <label for="name" class="form-label">
                        Category Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', $category->name) }}"
                        class="form-input @error('name') input-error @enderror"
                        placeholder="Enter category name"
                        required
                    >

                    @error('name')
                        <p class="form-error">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Description --}}
                <div class="form-group">

                    <label for="description" class="form-label">
                        Description
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="5"
                        class="form-input form-textarea @error('description') input-error @enderror"
                        placeholder="Enter a description for this category"
                    >{{ old('description', $category->description) }}</textarea>

                    @error('description')
                        <p class="form-error">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Buttons --}}
                <div class="form-actions">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Update Category
                    </button>

                    <a
                        href="{{ route('categories.index') }}"
                        class="btn btn-secondary"
                    >
                        Cancel
                    </a>

                </div>

            </form>

        </div>

    </div>

</x-layout>