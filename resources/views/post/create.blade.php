<!-- /resources/views/post/create.blade.php -->

<form action="/post" method="POST">
    @csrf
    <label for="title">Post Title</label>

    <input name="title" id="title" type="text" class="@error('title') is-invalid @enderror">

    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <label for="title">body</label>

    <input name="body" id="body" type="text" class="@error('body') is-invalid @enderror">

    @error('body')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <button>submit</button>
</form>
