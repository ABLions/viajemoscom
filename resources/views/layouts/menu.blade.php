<li class="{{ Request::is('authors*') ? 'active' : '' }}">
    <a href="{{ route('authors.index') }}"><i class="fa fa-edit"></i><span>Autores</span></a>
</li>

<li class="{{ Request::is('editorials*') ? 'active' : '' }}">
    <a href="{{ route('editorials.index') }}"><i class="fa fa-edit"></i><span>Editoriales</span></a>
</li>

<li class="{{ Request::is('books*') ? 'active' : '' }}">
    <a href="{{ route('books.index') }}"><i class="fa fa-edit"></i><span>Libros</span></a>
</li>
