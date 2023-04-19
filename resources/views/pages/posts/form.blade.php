@csrf
<div class="p-2">
    <div class="row">
        <div class="col mb-3">
            <label for="category" class="form-label">category</label>
            <select name="category_id" id="category_id" class="form-select">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
            <label for="user" class="form-label">user</label>
            <input type="hidden" name="user_id" value="{{ $user->name }}">
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

    <button type="submit" class="btn btn-primary" id="btnSubmit" name="addBtnSubmit">{{ $tombol }}</button>
</div>
