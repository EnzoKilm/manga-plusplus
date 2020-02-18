<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')

        <section>
            <div class="container">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Manga++</a></li>
                    <li class="active">Livre</li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Catégories</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <form method="post" action="{{ route('public.search') }}">
                                                @csrf
                                                <input type="hidden" name="search" placeholder="Rechercher" value="Manga"/>
                                                <button type="submit" class="index-button"><a>Mangas</a></button>
                                            </form>
                                        </h4>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <form method="post" action="{{ route('public.search') }}">
                                                @csrf
                                                <input type="hidden" name="search" placeholder="Rechercher" value="Bande dessinée"/>
                                                <button type="submit" class="index-button"><a>Bandes dessinées</a></button>
                                            </form>
                                        </h4>
                                    </div>
                                </div>
                            </div><!--/category-products-->
                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="product-details"><!--product-details-->
                            <div class="col-sm-5">
                                <div class="view-product">
                                <img src="{{ URL::to('/') }}{{ $book->picture_src }}" alt="{{ $book->name }}" />
                                </div>

                            </div>
                            <div class="col-sm-7">
                                <div class="product-information"><!--/product-information-->
                                    <!-- <img src="images/product-details/new.jpg" class="newarrival" alt="" /> -->
                                    <h2>{{ $book->name }}</h2>
                                    <p>ID: {{ $book->id }}</p>
                                    <p>Durée de la location : 7 jours</p>
                                    <!-- <img src="images/product-details/rating.png" alt="" /> -->
                                    <span>
                                        <span>{{ $book->price }}€</span>
                                        <button type="button" class="btn btn-fefault cart">
                                            @php
                                                if($book->availability == false) {
                                                    $availability = false;
                                                } else {
                                                    $availability = true;
                                                }
                                            @endphp
                                            @if ($availability == false)
                                                <div style="cursor: not-allowed;">
                                                    <a href="{{ route('public.cart.add', $book->id) }}" style="pointer-events: none;" class="none-button"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                                </div>
                                            @else
                                                <a href="{{ route('public.cart.add', $book->id) }}" class="none-button"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                            @endif
                                        </button>
                                    </span>
                                    <p><b>Disponibilité:</b>
                                        <?php
                                            if($book->availability == 1) {
                                                echo 'En stock';
                                            } else {
                                                echo 'Indisponible';
                                            }
                                        ?>
                                    </p>
                                    <p><b>État:</b> {{ $book->state }}</p>
                                </div><!--/product-information-->
                            </div>
                        </div><!--/product-details-->

                        <div class="recommended_items"><!--recommended_items-->
                            <h2 class="title text-center">Produits similaires</h2>

                            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        @foreach ($books as $single_book)
                                            @if (strpos($book->tags, $single_book->tags) !== false)
                                                <div class="col-sm-4"><div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <a href="{{ route('public.books', $single_book->id) }}">
                                                                <img src="{{ URL::to('/') }}{{ $single_book->picture_src }}" alt="{{ $single_book->name }}" />
                                                                <h2>{{ $single_book->price }}€</h2>
                                                                <p>{{ $single_book->name }}</p>
                                                            </a>
                                                            @php
                                                                if($single_book->availability == false) {
                                                                    $availability = false;
                                                                } else {
                                                                    $availability = true;
                                                                }
                                                            @endphp
                                                            @if ($availability == false)
                                                                <div style="cursor: not-allowed;">
                                                                    <a href="{{ route('public.cart.add', $single_book->id) }}" style="pointer-events: none;" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                                                </div>
                                                            @else
                                                                <a href="{{ route('public.cart.add', $single_book->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                  </a>
                                  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                  </a>
                            </div>
                        </div><!--/recommended_items-->

                    </div>
                </div>
            </div>
        </section>

        @include('footer')
    </body>
</html>
