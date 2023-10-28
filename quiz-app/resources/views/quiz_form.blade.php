@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('quiz.storeOrUpdate', ['id' => $quiz->id]) }}" method="POST">
    @csrf
    <input type="text" name="title" value="{{ old('title', $quiz->title) }}" placeholder="Title">
    <textarea name="description">{{ old('description', $quiz->description) }}</textarea>
    <button type="submit">Save</button>
</form>


