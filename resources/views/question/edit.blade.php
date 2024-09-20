<h1>Teste</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<a href="{{route('questions.index')}}">Listagem de perguntas</a><br><br>

<form action="{{ route('questions.update', $question->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="subject" value="{{ $question->subject }}"><br>
    <textarea name="text" cols="30" rows="10">{{ $question->text }}</textarea><br>
    <select name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if($question->category->id == $category->id) selected @endif>{{ $category->name }}</option>
        @endforeach
    </select><br>
    <button type="submit">Enviar</button>
</form>
