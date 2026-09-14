<x-layout>

    <div class="form-page">

        <div class="form-card">

            {{-- Header --}}
            <div class="form-header">

                <h1 class="form-title">
                    {{ $category->name }}
                </h1>

                <p class="form-subtitle">
                    Category details
                </p>

            </div>


            {{-- Description --}}
            <div class="category-detail">

                <h2 class="detail-label">
                    Description
                </h2>

                @if ($category->description)

                    <p class="detail-text">
                        {{ $category->description }}
                    </p>

                @else

                    <p class="detail-empty">
                        No description provided.
                    </p>

                @endif

            </div>


            {{-- Created / Updated --}}
            <div class="category-meta">

                <div class="meta-item">

                    <span class="meta-label">
                        Created
                    </span>

                    <span class="meta-value">
                        {{ $category->created_at->format('M d, Y') }}
                    </span>

                </div>

                <div class="meta-item">

                    <span class="meta-label">
                        Last Updated
                    </span>

                    <span class="meta-value">
                        {{ $category->updated_at->format('M d, Y') }}
                    </span>

                </div>

            </div>


            {{-- Actions --}}
            <div class="form-actions">

                <a
                    href="{{ route('categories.edit', $category) }}"
                    class="btn btn-warning"
                >
                    Edit Category
                </a>

                <a
                    href="{{ route('categories.index') }}"
                    class="btn btn-secondary"
                >
                    Back to Categories
                </a>

            </div>

        </div>

    </div>

</x-layout>