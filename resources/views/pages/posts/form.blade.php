@csrf
<div class="p-2">
    <div class="row">
        <div class="col mb-3">
            <label for="category" class="form-label">category</label>
            <select name="category_id" id="category_id" class="form-select @error('category_id')
                is-invalid
            @enderror">
                @foreach ($categories as $category)
                    @if ($category->id == (old('category_id') ?? $post->category_id ?? ''))
                        <option value="{{ $category->id }}" selected>
                            {{ $category->name }}
                        </option>
                    @else
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endif
                @endforeach
            </select>
            @error('category_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="title" value="{{ old('title') ?? $post->title ?? "" }}" required>
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label for="description" class="form-label">description</label>
            <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="description" rows="3" required>{{ old('description') ?? $post->description ?? "" }}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <button type="submit" class="btn btn-primary" id="btnSubmit" name="addBtnSubmit">{{ $tombol }}</button>
</div>
