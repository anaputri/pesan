<!DOCTYPE html>
<html>
<head>
    <title> Horizone Futsal</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" 
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" 
    crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Horizone Futsal</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-form navbar-right">
                <a href="<?php echo base_url() ?>login/logout" type="submit" class="btn btn-success"> Logout</a>
            </div>
      </div>
    </nav>
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">
              <a href="#" class="list-group-item active" style="text-align: center;background-color: black;border-color: black">
                ADMIN
              </a>
              <a href="#" class="list-group-item"></i> Dashboard</a>
              <a href="<?php echo site_url('data_admin')?>" class="list-group-item"><i class="fa fa-folder"></i> Data Pesanan</a>
              <a href="<?php echo site_url('jenisLapangan')?>" class="list-group-item"><i class="fa fa-folder"></i> Jenis Lapangan </a>
            </div>
        </div>