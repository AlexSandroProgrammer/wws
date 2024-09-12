<?= view('admin/components/sidebar', ['title' => $title]) ?>
<!-- partial -->

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#registerStore">
            <i class="ti ti-plus"></i> Registrar Tienda
        </button>

        <!-- Modal -->
        <div class="modal fade" id="registerStore" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Registro de Tienda</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="card-description">
                            Ingresa por favor los siguientes datos
                        </p>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="storeName">Nombre Tienda</label>
                                <input type="text" class="form-control" id="storeName"
                                    placeholder="Ingresar nombre de tienda">
                            </div>
                            <div class="form-group">
                                <label for="address">Direccion de Tienda</label>
                                <input type="text" class="form-control" id="address"
                                    placeholder="Ingresar direccion de tienda">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Lista de Tiendas</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Acciones</th>
                                                <th>Nombre de Tienda</th>
                                                <th>Direccion de Tienda</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#" class="btn btn-success"><i
                                                            class="ti-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="ti-trash"></i></a>
                                                </td>
                                                <td>Tienda 1</td>
                                                <td>Calle 123 # 456</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="btn btn-success"><i
                                                            class="ti-pencil-alt"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="ti-trash"></i></a>
                                                </td>
                                                <td>Tienda 2</td>
                                                <td>Calle 123 # 456</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= view('admin/components/footer') ?>