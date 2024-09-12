<?= view('admin/components/sidebar', ['title' => $title]) ?>
<!-- partial -->

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Bienvenido Administrador</h3>
                        <h6 class="font-weight-normal mb-0">En este panel podras gestionar toda la informacion de
                            tus tiendas.</h6>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class=" m-auto">
                        <img src="<?= base_url("images/auth/slide_2.svg") ?>" width="300" alt="people">
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="row g-4">
                    <div class="col-xl-6 mb-4 stretch-card transparent">
                        <div class="card card-inverse-primary">
                            <div class="card-body">
                                <h4 class="mb-4 fs-40 font-weight-bold">Reparaciones Pendientes</h4>
                                <p class="fs-30 mb-2">206</p>
                                <p>Cantidad</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mb-4 stretch-card transparent">
                        <div class="card card-inverse-success">
                            <div class="card-body">
                                <h4 class="mb-4 fs-40 font-weight-bold">Reparaciones Finalizadas</h4>
                                <p class="fs-30 mb-2">400</p>
                                <p>Cantidad</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-inverse-dark">
                            <div class="card-body">
                                <h4 class="mb-4 fs-40 font-weight-bold">Empresas Registradas</h4>
                                <p class="fs-30 mb-2">100</p>
                                <p>Cantidad</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 stretch-card transparent">
                        <div class="card card-inverse-info">
                            <div class="card-body">
                                <h4 class="mb-4 fs-40 font-weight-bold">Clientes Registrados</h4>
                                <p class="fs-30 mb-2">200</p>
                                <p>Cantidad</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Order Details</p>
                        <p class="font-weight-500">The total number of sessions within the date range. It is
                            the period time a user is actively engaged with your website, page or app, etc
                        </p>
                        <div class="d-flex flex-wrap mb-5">
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Order value</p>
                                <h3 class="text-primary fs-30 font-weight-medium">12.3k</h3>
                            </div>
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Orders</p>
                                <h3 class="text-primary fs-30 font-weight-medium">14k</h3>
                            </div>
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Users</p>
                                <h3 class="text-primary fs-30 font-weight-medium">71.56%</h3>
                            </div>
                            <div class="mt-3">
                                <p class="text-muted">Downloads</p>
                                <h3 class="text-primary fs-30 font-weight-medium">34040</h3>
                            </div>
                        </div>
                        <canvas id="order-chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="card-title">Sales Report</p>
                            <a href="#" class="text-info">View all</a>
                        </div>
                        <p class="font-weight-500">The total number of sessions within the date range. It is
                            the period time a user is actively engaged with your website, page or app, etc
                        </p>
                        <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                        <canvas id="sales-chart"></canvas>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="card-body">
                        <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2"
                            data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                            <div class="ml-xl-4 mt-3">
                                                <h3 class="card-title fs-40">Detalles Reparaciones Tienda</h3>
                                                <p class="font-weight-500 mb-xl-4 text-primary">Total de Reparaciones
                                                    Tienda 1
                                                </p>
                                                <h1 class="text-primary">2000</h1>
                                                <p class="mb-2 mb-xl-0">En esta seccion podras analizar las reparaciones
                                                    realizadas en la tienda 1</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-9">
                                            <div class="row">
                                                <div class="col-12 border-right">
                                                    <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                        <table class="table table-borderless report-table">
                                                            <tr>
                                                                <td class="text-muted">Resguardadas</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-primary"
                                                                            role="progressbar" style="width: 80%"
                                                                            aria-valuenow="80" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">713
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Pendientes</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-warning"
                                                                            role="progressbar" style="width: 30%"
                                                                            aria-valuenow="30" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">583
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Fnalizadas</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-success"
                                                                            role="progressbar" style="width: 95%"
                                                                            aria-valuenow="95" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">924
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                            <div class="ml-xl-4 mt-3">
                                                <h3 class="card-title fs-40">Detalles Reparaciones Tienda</h3>
                                                <p class="font-weight-500 mb-xl-4 text-primary">Total de Reparaciones
                                                    Tienda 2
                                                </p>
                                                <h1 class="text-primary">2000</h1>
                                                <p class="mb-2 mb-xl-0">En esta seccion podras analizar las reparaciones
                                                    realizadas en la tienda 2</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-9">
                                            <div class="row">
                                                <div class="col-12 border-right">
                                                    <div class="table-responsive mb-3 mb-md-0 mt-5">
                                                        <table class="table table-borderless report-table">
                                                            <tr>
                                                                <td class="text-muted">Resguardadas</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-primary"
                                                                            role="progressbar" style="width: 80%"
                                                                            aria-valuenow="80" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">713
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Pendientes</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-warning"
                                                                            role="progressbar" style="width: 30%"
                                                                            aria-valuenow="30" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">583
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">Fnalizadas</td>
                                                                <td class="w-100 px-0">
                                                                    <div class="progress progress-md mx-4">
                                                                        <div class="progress-bar bg-success"
                                                                            role="progressbar" style="width: 95%"
                                                                            aria-valuenow="95" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h5 class="font-weight-bold mb-0">924
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="card-title ">Top de Marcas</h3>
                        <p class="mb-0">Estadisticas generales de los marcas con mas articulos</p>
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <th>Marca</th>
                                        <th>Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>DELL</td>
                                        <td class="font-weight-bold">0</td>
                                    </tr>

                                    <tr>
                                        <td>Lenovo</td>
                                        <td class="font-weight-bold">0</td>
                                    </tr>
                                    <tr>
                                        <td>Mac</td>
                                        <td class="font-weight-bold">0</td>
                                    </tr>
                                    <tr>
                                        <td>Samsung</td>
                                        <td class="font-weight-bold">0</td>
                                    </tr>
                                    <tr>
                                        <td>DELL</td>
                                        <td class="font-weight-bold">0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Advanced Table</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="example" class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Quote#</th>
                                                <th>Product</th>
                                                <th>Business type</th>
                                                <th>Policy holder</th>
                                                <th>Premium</th>
                                                <th>Status</th>
                                                <th>Updated at</th>
                                                <th></th>
                                            </tr>
                                        </thead>
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