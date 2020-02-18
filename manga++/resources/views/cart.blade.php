<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')

        <section id="cart_items">
            <div class="container">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Manga++</a></li>
                    <li class="active">Panier</li>
                    </ol>
                </div>
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Objet</td>
                                <td class="description"></td>
                                <td class="price">Prix</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{ var_dump($cart) }} --}}
                            @php
                                $total_price = 0;
                            @endphp
                            @foreach ($cart as $item)
                                @if (isset($item->id))
                                    @php
                                        $total_price+=$item->price;
                                    @endphp
                                    <tr>
                                        <td class="cart_product">
                                            <a href="{{ route('public.books', $item->id) }}"><img src="{{ URL::to('/') }}{{ $item->picture_src }}" alt="{{ $item->name }}"></a>
                                        </td>
                                        <td class="cart_description">
                                            <h4><a href="{{ route('public.books', $item->id) }}">{{ $item->name }}</a></h4>
                                            <p>ID: {{ $item->id }}</p>
                                        </td>
                                        <td class="cart_price">
                                            <p>{{ $item->price }}€</p>
                                        </td>
                                        <td class="cart_delete">
                                            <a class="cart_quantity_delete" href="{{ route('public.cart.remove', $item->id) }}"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                    <div class="cart_buy">
                        <a href="{{ route('public.cart.buy') }}">Louer</a>
                        <p>Total: {{ $total_price }}€</p>
                    </div>
                </div>
            </div>
        </section> <!--/#cart_items-->

        @include('footer')
    </body>
</html>
