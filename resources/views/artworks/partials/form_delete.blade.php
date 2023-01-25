<form action="{{route('admin.artwork.destroy',$artwork)}}" method="POST" onsubmit="return confirm('Sei aiuro di voler eliminare questo elemento')" >
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger" >Delete</button>
</form>
