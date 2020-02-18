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
                                            <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Mangas
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="sportswear" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">One Piece </a></li>
                                                <li><a href="#">Dragon Ball </a></li>
                                                <li><a href="#">Death Note </a></li>
                                                <li><a href="#">Fullmetal Alchemist</a></li>
                                                <li><a href="#">Berserk </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                                Bandes dessinées
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="mens" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Watchmen</a></li>
                                                <li><a href="#">Calvin et Hobbes</a></li>
                                                <li><a href="#">Walking Dead</a></li>
                                                <li><a href="#">V pour Vendetta</a></li>
                                                <li><a href="#">La Jeunesse de Picsou</a></li>
                                                <li><a href="#">Gaston</a></li>
                                                <li><a href="#">Killing Joke</a></li>
                                                <li><a href="#">Astérix et Obélix</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div><!--/category-products-->

                            <div class="brands_products"><!--brands_products-->
                                <h2>Exemplaires</h2>
                                <div class="brands-name">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="#"> <span class="pull-right">(50)</span>Astérix et Obélix</a></li>
                                        <li><a href="#"> <span class="pull-right">(56)</span>Naruto</a></li>
                                        <li><a href="#"> <span class="pull-right">(27)</span>Boule et Bill</a></li>
                                        <li><a href="#"> <span class="pull-right">(32)</span>Hunter X Hunter</a></li>
                                        <li><a href="#"> <span class="pull-right">(5)</span>Titeuf</a></li>
                                    </ul>
                                </div>
                            </div><!--/brands_products-->

                            <!--<div class="shipping text-center">
                                <img src="images/home/shipping.jpg" alt="" />
                            </div>-->

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
                                    <!-- <img src="images/product-details/rating.png" alt="" /> -->
                                    <span>
                                        <span>{{ $book->price }}€</span>
                                        <label>Quantité:</label>
                                        <input type="text" value="1" />
                                        <button type="button" class="btn btn-fefault cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            Ajouter au panier
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
                                                            <a href="#" class="btn btn-default add-to-cart">
                                                                <i class="fa fa-shopping-cart"></i>Ajouter au panier
                                                            </a>
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
