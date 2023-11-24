@extends('masters', ['title'=>'Food'])

@section('content')

<h1>Sushi Food</h1>
<hr>
<a class="btn" href="{{ route('checkout.checkout') }}"><i class="fas fa-shopping-cart"></i>Checkout</a>
<div class="row">
    @foreach($foods as $food)
    <div class="col-md-3 mt-3">
        <div class="text-center">
            <img class="w-75" src="https://www.piknikdong.com/wp-content/uploads/2020/06/cara-membuat-sushi.jpg"
                alt="{{ $food->gambar_makanan }}">
            <h6>{{ $food->nama_makanan }}</h6>
            <p>{{ $food->harga_makanan }}</p>
            <!-- Tombol "+" dan "-" -->
            <form action="{{ route('food.store') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $food->id }}">
                <button type="submit" class="btn btn-sm"><i class="fas fa-plus"></i></button>
            </form>
            <span class="btn btn-light">{{ $totalFood[$food->id] }}</span>

            <form action="{{ route('food.destroy') }}" method="post">
                @csrf
                @method('delete')
                <input type="hidden" name="id" value="{{ $food->id }}">
                <button type="submit" class="btn btn-sm"><i class="fas fa-minus"></i></button>
            </form>
        </div>

    </div>
    @endforeach
</div>

@endsection