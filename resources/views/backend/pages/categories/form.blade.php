@csrf
<div class="p-2">
    <div class="row">
        <div class="col mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') ?? $category->name ?? "" }}" required>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <button type="submit" class="btn btn-primary" id="btnSubmit">{{ $tombol }}</button>
</div>
