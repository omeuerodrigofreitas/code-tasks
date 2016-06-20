<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="outros/startbootstrap-sb-admin-1.0.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="outros/startbootstrap-sb-admin-1.0.4/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="outros/startbootstrap-sb-admin-1.0.4/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Meus estilos -->
    <link href="css/estilo.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">codePampa</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Tainã Milano <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-user"></i> Meu perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-off "></i> Sair</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="manterPessoas.html"><i class="glyphicon glyphicon-user"></i> Pessoas</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#projetos">
                            <i class="glyphicon glyphicon-folder-open"></i> Projetos <i class="glyphicon glyphicon-chevron-down"></i>
                        </a>
                        <ul id="projetos" class="collapse">
                            <li>
                                <a href="manterProjetos.html"><i class="glyphicon glyphicon-plus"></i> Novo projeto</a>
                            </li>
                            <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#tarefas">
                                    <i class="glyphicon glyphicon-th-list"></i> Projeto 1 <i class="glyphicon glyphicon-chevron-down"></i>
                                </a>
                                <ul id="tarefas" class="collapse nav ml-30">
                                    <li>
                                        <a href="#"><i class="glyphicon glyphicon-minus "></i> Tarefa 1</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="glyphicon glyphicon-minus "></i> Tarefa 2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Listagem de pessoas
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-check"></i> Novo cadastro</button>
                        </div>
                        <div class="col-lg-6">
                            <div class="col-lg-offset-6">
                                <div class="form-group input-group">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Ativo</th>
                                        <th ></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Patric Dutra</td>
                                        <td>patric.dutra@codepampa.com.br</td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input value="" type="checkbox">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Editar</button>
                                            <button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Excluir</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Rodrigo Freitas</td>
                                        <td>rodrigo.freitas@codepampa.com.br</td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input value="" type="checkbox">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Editar</button>
                                            <button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Excluir</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Tainã Milano</td>
                                        <td>taina.milano@codepampa.com.br</td>
                                        <td>
                                            <div class="checkbox">
                                                <label>
                                                    <input value="" type="checkbox">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Editar</button>
                                            <button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Excluir</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                    <div class="row">
                        <div class="col-lg-offset-8 ">
                            <div id="dataTables-example_paginate" class="dataTables_paginate paging_simple_numbers">
                                <ul class="pagination">
                                    <li id="dataTables-example_previous" tabindex="0" aria-controls="dataTables-example" class="paginate_button previous disabled"><a href="#">Previous</a></li>
                                    <li tabindex="0" aria-controls="dataTables-example" class="paginate_button active"><a href="#">1</a></li>
                                    <li tabindex="0" aria-controls="dataTables-example" class="paginate_button "><a href="#">2</a></li>
                                    <li tabindex="0" aria-controls="dataTables-example" class="paginate_button "><a href="#">3</a></li><li tabindex="0" aria-controls="dataTables-example" class="paginate_button "><a href="#">4</a></li>
                                    <li tabindex="0" aria-controls="dataTables-example" class="paginate_button "><a href="#">5</a></li>
                                    <li tabindex="0" aria-controls="dataTables-example" class="paginate_button "><a href="#">6</a></li>
                                    <li id="dataTables-example_next" tabindex="0" aria-controls="dataTables-example" class="paginate_button next"><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"> Cadastro</h4>
                        </div>
                        <form method="post" action="manterPessoa">
                          <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Nome</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-user"></i>
                                            </button>
                                        </span>
                                        <input type="text" class="form-control" name="txt-nome"
                                               value=" ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>E-mail</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-envelope"></i>
                                            </button>
                                        </span>
                                        <input type="text" class="form-control" name="txt-email"
                                               value=" ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Senha</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-asterisk"></i>
                                            </button>
                                        </span>
                                        <input type="password" class="form-control" name="txt-senha"
                                               value=" ">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Repetir senha</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-asterisk"></i>
                                            </button>
                                        </span>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" type="submit">
                                <i class="glyphicon glyphicon-ok"></i>
                                Salvar
                            </button>
                          </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="outros/startbootstrap-sb-admin-1.0.4/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="outros/startbootstrap-sb-admin-1.0.4/js/bootstrap.min.js"></script>
</body>

</html>