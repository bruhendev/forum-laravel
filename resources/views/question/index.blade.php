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

<form action="{{ route('questions.store') }}" method="POST">
    @csrf
    <input type="text" name="subject"><br>
    <textarea name="text" cols="30" rows="10"></textarea><br>
    <select name="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select><br>
    <button type="submit">Enviar</button>
</form>
