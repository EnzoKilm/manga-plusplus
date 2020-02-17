<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('admin/header')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Ajout d'un livre</h1>
        <form method="post" action="{{ route('admin.books.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Nom du livre</h6>
                </div>
                <div class="card-body">
                    <input type="text" name="name" placeholder="Nom">
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Type de livre</h6>
                </div>
                <div class="card-body">
                    <select name="type" size="1">
                        <option value="Manga">Manga</option>
                        <option value="Bande dessinée">Bande dessinée</option>
                    </select>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Description du livre</h6>
                </div>
                <div class="card-header py-3">
                    <input type="text" name="description" placeholder="Description">
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Auteur du livre</h6>
                </div>
                <div class="card-header py-3">
                    <input type="text" name="author" placeholder="Auteur">
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Disponibilité du livre</h6>
                </div>
                <div class="card-header py-3">
                    <select name="availability" size="1">
                        <option value="1">Disponible</option>
                        <option value="0">Indisponible</option>
                    </select>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">État du livre</h6>
                </div>
                <div class="card-header py-3">
                    <select name="state" size="1">
                        <option value="Neuf">Neuf</option>
                        <option value="Excellent">Excellent</option>
                        <option value="Très bon">Très bon</option>
                        <option value="Bon">Bon</option>
                        <option value="Acceptable">Acceptable</option>
                        <option value="Usé">Usé</option>
                    </select>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Prix de la location du livre</h6>
                </div>
                <div class="card-header py-3">
                    <input type="number" name="price" step=0.01 min="0" placeholder="Exemple: 2,35">
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tags du livre</h6>
                </div>
                <div class="card-header py-3">
                    <input type="text" width="200px" name="tags" placeholder="Séparez les tags par des ';'">
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Image du livre (formats acceptés : jpeg, png, jpg et gif)</h6>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Oups!</strong> Il y a eu quelques problèmes avec votre fichier.
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="card-header py-3">
                    <input type="file" class="form-control" name="image" id="img_input">
                    <div class="card-header py-3">
                        <img id="img_preview" src="{{ URL::to('/') }}/img_preview.png" alt="preview de l'image" />
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <button type="submit">Ajouter</button>
                </div>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->

    @include('admin/footer')

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#img_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
            }
        }

        $("#img_input").change(function() {
            readURL(this);
        });
      </script>

</html>
