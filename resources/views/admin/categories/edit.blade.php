<x-admin-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h1 class="text-3xl text-black pb-6">
                {{ $title }}
            </h1>
        </div>
    </x-slot>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
        <div>
            <label>Category name:
                <input name="name" value="{{ old('name',
                $category->name) }}" class="@error('name') is-invalid @enderror">
            </label>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label>Category description:
                <textarea name="description">{{ old('description'),
                $category->description}}</textarea>
            </label>
        </div>
        <div>
            <label>Category status:
                <input name="status" type="checkbox" {{ old('status'), $category->status }}>
            </label>
        </div>
        <div>
            <input type="submit" value="Update category">
        </div>
    </form>
</x-admin-layout>
