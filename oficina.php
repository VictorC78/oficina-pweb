<?php
// Configurações do banco de dados
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>Oficina</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="oficina.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Oficina</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <ul style="width: 100%;" class="navbar-nav ml-auto d-flex justify-content-between">
                        <li class="nav-item">
                            <h1 class="h3 mt-4 text-gray-800">Programação Web: Autenticação, Criptografia, CRUD e
                                Hospedagem
                            </h1>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item">

                            <div class="mt-3">
                                <a style="border-radius:20px" type="button" href="login.php" class="btn btn-danger">
                                    ENTRAR
                                </a>
                                <a style="border-radius:20px" type="button" href="cadastro.php" class="btn btn-primary">
                                    CADASTRAR
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Produtos</h1>
                    <div class="card shadow mb-4">

                        <div class="card-header py-3 d-flex justify-content-between">
                            <button style="border-radius:20px" type="button" class="btn btn-primary btn-user btn-block"
                                data-bs-toggle="modal" data-bs-target="#exampleModaladdProduto">
                                Novo Produto
                            </button>

                        </div>
                        <?php
        #}// MODAL PARA ADD PRODUTO ?>





                        <form class="modal user form-produto fade"
                            id="exampleModaladdProduto" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-produto modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">NOVO PRODUTO</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="text" id="nome"
                                                name="nome" placeholder="Nome">
                                        </div>
                                        <br>
                                        <div class=" form-group">
                                            <input class="form-control form-control-user" type="text" id="valor"
                                                name="valor" placeholder="Valor">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-start justify-content-start modal-footer">
                                        <button type="submit" name="submit"
                                            class="btn btn-primary btn-user btn-block">Adicionar Produto</button>
                                    </div>
                                </div>
                            </div>
                        </form>



                        <div class="card-body">
                            <div class="table-responsive">





























<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>VALOR</th>
            <th>AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>a</th>
            <th>b</th>
            <th>c</th>
            <th>
                <button style="border-radius:20px" class="btn btn-primary btn-user btn-block" type="button"
                    data-bs-toggle="modal" data-bs-target="#exampleModaleditProduto">
                    <i class="fas fa-pencil-alt"></i>
                </button>
                <a href="deleteProduto.php?id=" style="border-radius:20px"
                    class="btn btn-danger btn-user btn-block" type="button">
                    <i class="fas fa-trash-alt"></i>
                </a>
            </th>
        </tr>










        
        <div class="modal user form-produto fade" id="exampleModaleditProduto" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-produto modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR PRODUTO -</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="editProduto.php" class="modal-body user fade">
                        <input type="hidden" name="id" value="">
                        <div style="border-radius:20px" class="form-group ml-2 mr-2">
                            <input style="border-radius:20px" class="form-control form-control-user" type="text"
                                id="nome" name="nome" value="" placeholder="Nome">
                        </div>
                        <br>
                        <div style="border-radius:20px" class=" form-group ml-2 mr-2">
                            <input style="border-radius:20px" class="form-control form-control-user" type="text"
                                id="valor" name="valor" placeholder="Valor" value="">
                        </div>
                        <div class="d-flex align-items-start justify-content-start modal-footer">
                            <button style="border-radius:20px" type="submit" name="update"
                                class="btn btn-primary btn-user btn-block">Salvar Alterações</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </tbody>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>VALOR</th>
            <th>AÇÕES</th>
        </tr>
    </tfoot>
</table>























                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>