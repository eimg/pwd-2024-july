@extends("layouts.app")

@section("content")
    <div class="container" style="max-width: 600px">
        <h2>New Article</h2>

        @if($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        <form method="POST">
            @csrf
            <input type="text" name="title" placeholder="Title" 
                class="form-control mb-2">
            <textarea name="body" placeholder="Body" 
                class="form-control mb-2"></textarea>
            <select name="category_id" class="form-select mb-2">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <button class="btn btn-primary">Add Article</button>
        </form>
    </div>
@endsection
