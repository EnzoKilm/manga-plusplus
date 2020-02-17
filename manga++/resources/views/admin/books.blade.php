<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('admin/header')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Livres</h1>
        <p class="mb-4">Ici vous pouvez gérer les différents livres que vous proposez aux clients.<br/>Pour modifier un livre vous devez simplement cliquer le nom de celui-ci dans le tableau ci-dessous.<br/>Pour supprimer un livre cliquez sur "Supprimer" à droite dans la ligne correspondante.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Livres enregistrés</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Auteur</th>
                    <th>Disponibilité</th>
                    <th>État</th>
                    <th>Prix</th>
                    <th>Tags</th>
                    <th><i class="fas fa-trash-alt"></i></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Auteur</th>
                    <th>Disponibilité</th>
                    <th>État</th>
                    <th>Prix</th>
                    <th>Tags</th>
                    <th><i class="fas fa-trash-alt"></i></th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($books as $book)
                <tr>
                    <td><a href="{{ route('admin.books.edit', $book->id) }}">{{ $book->name }}</a></td>
                    <td>{{ $book->type }}</td>
                    <td>
                        <?php
                            if($book->description != null) {
                                echo $book->description;
                            } else {
                                echo "Aucune";
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            if($book->author != null) {
                                echo $book->author;
                            } else {
                                echo "Aucun";
                            }
                        ?>
                    </td>
                    <td>{{ $book->availability }}</td>
                    <td>{{ $book->state }}</td>
                    <td>{{ $book->price }}</td>
                    <td>
                        <?php
                            if($book->tags != null) {
                                echo $book->tags;
                            } else {
                                echo "Aucun";
                            }
                        ?>
                    </td>
                    <td><a href="{{ route('admin.books.delete', $book->id) }}" title="supprimer le livre">Supprimer</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    @include('admin/footer')

</html>
