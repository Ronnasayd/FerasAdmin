<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Feras PetShop</title>
      <!-- Bootstrap core CSS-->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <!-- Page level plugin CSS-->
      <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/sb-admin.css" rel="stylesheet">

      <link rel="stylesheet" href="css/feras-style.css">


   </head>
   <body class="fixed-nav sticky-footer bg-dark" id="page-top">
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top feras-bg-main-color" id="mainNav">
         <a class="navbar-brand" href="#feras-area-de-trabalho">Feras PetShop</a>
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="feras-bg-side-color navbar-nav navbar-sidenav" id="exampleAccordion">
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Área de Trabalho">
                  <a class="nav-link" href="#feras-area-de-trabalho">
                  <i class="fa fa-fw fa-home"></i>
                  <span class="feras-text-color nav-link-text" id="feras-area-de-trabalho">Área de Trabalho</span>
                  </a>
               </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
               <li class="nav-item feras-bg-main-color">
                  <a class="nav-link text-center" id="sidenavToggler">
                  <i class="fa fa-fw fa-angle-left"></i>
                  </a>
               </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <form class="form-inline my-2 my-lg-0 mr-lg-2">
                     <div class="input-group">
                        <input class="form-control" type="text" placeholder="Pesquisar por...">
                        <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                        <i class="fa fa-search"></i>
                        </button>
                        </span>
                     </div>
                  </form>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-fw fa-sign-out"></i>Entrar</a>
               </li>
            </ul>
         </div>
      </nav>
      <div class="content-wrapper">
      <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="#feras-area-de-trabalho">Área de Trabalho</a>
         </li>
         <li class="breadcrumb-item active">Mercadorias</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
      <div class="card-header">
         <i class="fa fa-database"></i>  
         Mercadorias
      </div>
      <div class="card-body">
      <div class="table-responsive">
      <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
      <thead>
         <tr>
            <th>Produto</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Valor à Vista</th>
            <th>Valor à Prazo</th>
         </tr>
      </thead>
      <tbody id="tabela-feras-body">
