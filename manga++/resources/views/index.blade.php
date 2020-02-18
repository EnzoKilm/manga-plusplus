<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('header')

        <section>
            <div class="container">
                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                      <li><a href="{{ url('/') }}">Manga++</a></li>
                      <li class="active">Accueil</li>
                    </ol>
                </div>
            </div>
        </section>

        <section id="slider"><!--slider-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-carousel" data-slide-to="1"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-6 slider-img">
                                        <img src="public_site/images/home/slider-manga.png" class="girl img-responsive" alt="Mangas" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-6 slider-img">
                                        <img src="public_site/images/home/slider-bd.png" class="girl img-responsive" alt="Bandes dessinées" />
                                    </div>
                                </div>

                            </div>

                            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section><!--/slider-->

        <section>
            <div class="container">
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
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Articles en vedette</h2>
                            @php
                                $books = App\Book::orderBy('id', 'desc')->take(6)->get();
                            @endphp
                            @foreach ($books as $book)
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="{{ route('public.books', $book->id) }}">
                                                    <img src="{{ URL::to('/') }}{{ $book->picture_src }}" alt="{{ $book->name }}" />
                                                    <h2>{{ $book->price }}€</h2>
                                                    <p>{{ $book->name }}</p>
                                                </a>
                                                <a href="{{ route('public.cart.add', $book->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                            </div>
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <a href="{{ route('public.books', $book->id) }}">
                                                        <h2>{{ $book->price }}€</h2>
                                                        <p>{{ $book->name }}</p>
                                                    </a>
                                                    <a href="{{ route('public.cart.add', $book->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div><!--features_items-->

                        <div class="category-tab"><!--category-tab-->
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#mangas" data-toggle="tab">Mangas</a></li>
                                    <li><a href="#bd" data-toggle="tab">Bandes dessinées</a></li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="mangas" >
                                    @php
                                        $books = App\Book::orderBy('type', 'desc')
                                            ->where('type', '=', 'Manga')
                                            ->take(4)
                                            ->get();
                                    @endphp
                                    @foreach ($books as $book)
                                        <div class="col-sm-3">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo category-img text-center">
                                                        <a href="{{ route('public.books', $book->id) }}">
                                                            <img src="{{ URL::to('/') }}{{ $book->picture_src }}" alt="{{ $book->name }}" />
                                                            <h2>{{ $book->price }}€</h2>
                                                            <p>{{ $book->name }}</p>
                                                        </a>
                                                        <a href="{{ route('public.cart.add', $book->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="tab-pane fade" id="bd" >
                                    @php
                                        $books = App\Book::orderBy('type', 'desc')
                                            ->where('type', '=', 'Bande dessinée')
                                            ->take(4)
                                            ->get();
                                    @endphp
                                    @foreach ($books as $book)
                                        <div class="col-sm-3">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo category-img text-center">
                                                        <a href="{{ route('public.books', $book->id) }}">
                                                            <img src="{{ URL::to('/') }}{{ $book->picture_src }}" alt="{{ $book->name }}" />
                                                            <h2>{{ $book->price }}€</h2>
                                                            <p>{{ $book->name }}</p>
                                                        </a>
                                                        <a href="{{ route('public.cart.add', $book->id) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div><!--/category-tab-->

                    </div>
                </div>
            </div>
        </section>

        @include('footer')
    </body>
</html>
