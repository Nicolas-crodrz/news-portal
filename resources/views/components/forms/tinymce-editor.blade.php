<!-- Formulario con textarea para el contenido y campos adicionales -->
<form method="post"  action="{{ route('news.store') }}" enctype="multipart/form-data">
    <div class="mb-4">
        <input type="text" name="title" id="title" placeholder="Título..." class="w-full border border-gray-300 p-2 rounded">
    </div>
    <textarea name="content" id="myeditorinstance" placeholder="Contenido..."></textarea>
    <div class="mb-4">
        <label for="media" class="block text-gray-700">Adjuntar Archivos Multimedia</label>
        <input type="file" name="media" id="media" class="w-full border border-gray-300 p-2 rounded">
    </div>
    <!-- Botón de Guardar -->
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
</form>
