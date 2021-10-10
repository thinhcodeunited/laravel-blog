<form action="{{route('baiviet.store')}}" method="post">
    @csrf
    <div>
        <label for="title">Tieu de:</label>
        <input name="title" />
        @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div>
        <label for="content">Noi dung:</label>
        <textarea name="content" rows="5">

        </textarea>
    </div>
    <input type="submit" value="Gui"/>
</form>
