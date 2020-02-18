<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')

        <section>
            <div class="container">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Manga++</a></li>
                    <li class="active">Recherche</li>
                    </ol>
                </div>
                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        @for ($i = 0; $i < count($results); $i++)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="{{ route('public.books', $results[$i]->id) }}">
                                                <img src="{{ URL::to('/') }}{{ $results[$i]->picture_src }}" alt="{{ $results[$i]->name }}" />
                                                <h2>{{ $results[$i]->price }}€</h2>
                                                <p>{{ $results[$i]->name }}</p>
                                            </a>
                                            @php
                                                if($results[$i]->availability == false) {
                                                    $availability = false;
                                                } else {
                                                    $availability = true;
                                                }
                                            @endphp
                                            @if ($availability == false)
                                                <div style="cursor: not-allowed;">
                                                    <a href="{{ route('public.cart.add', $results[$i]->id) }}" style="pointer-events: none;" class="btn btn-default add-to-cart"><i class="fas fa-ban"></i> Indisponible</a>
                                                </div>
                                            @else
                                                <a href="{{ route('public.cart.add', $results[$i]->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au panier</a>
                                            @endif
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <a href="{{ route('public.books', $results[$i]->id) }}">
                                                    <h2>{{ $results[$i]->price }}€</h2>
                                                    <p>{{ $results[$i]->name }}</p>
                                                </a>
                                                @php
                                                    if($results[$i]->availability == false) {
                                                        $availability = false;
                                                    } else {
                                                        $availability = true;
                                                    }
                                                @endphp
                                                @if ($availability == false)
                                                    <div style="cursor: not-allowed;">
                                                        <a href="{{ route('public.cart.add', $results[$i]->id) }}" style="pointer-events: none;" class="btn btn-default add-to-cart"><i class="fas fa-ban"></i> Indisponible</a>
                                                    </div>
                                                @else
                                                    <a href="{{ route('public.cart.add', $results[$i]->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> Ajouter au panier</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>

        @include('footer')
    </body>
</html>
