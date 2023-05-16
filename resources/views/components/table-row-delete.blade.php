<form {{$attributes}} method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="border-2 p-2 rounded-3xl bg-red-700 text-white font-bold">Eliminar</button>
  </form>
