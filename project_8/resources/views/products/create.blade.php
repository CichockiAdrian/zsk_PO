<h3>Dodaj produkt</h3>
<div>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        <button type="submit">Dodaj </button>
</form>
</div>
