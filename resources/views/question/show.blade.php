<a href="{{ route('questions.index') }}">Voltar</a>

<h1>Detalhes da pergunta: {{ $question->subject }}</h1>

<p><b>Assunto:</b>{{ $question->subject }}</p>
<p><b>Conteúdo:</b>{{ $question->text }}</p>
<p><b>Categoria:</b>{{ $question->category->name }}</p>

<button
    onclick="event.preventDefault(); if(confirm('Você realmente deseja excluir este item?')){document.getElementById('form-delete').submit()}">
    Deletar
</button>
<form action="{{ route('questions.destroy', $question->id) }}" id="form-delete" method="POST">
    @csrf
    @method('DELETE')
</form>
