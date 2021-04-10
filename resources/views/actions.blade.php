<form method="POST" action="{{ url('api/stage1',$id) }}">
    @method('DELETE')
    <a href="{{ url('api/stage1', $id) }}" class="btn btn-primary btn-sm">
        <i class="far fa-edit"></i>
    </a>

    <button type="submit" class="btn btn-danger btn-sm">
        <i class="far fa-trash-alt"></i>
    </button>
</form>