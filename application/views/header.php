
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php if(isset($title)) echo $title; else echo "title not set";?></title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>asset/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>asset/dist/css/adminlte.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>asset/plugins/jqvmap/jqvmap.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>asset/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>asset/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>asset/plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="<?php echo $this->config->config['base_url']?>asset/plugins/jsgrid/jsgrid-theme.min.css">

  <style>
      .breadcrumb-item+.breadcrumb-item::before{
          content: ">";
      }
      .clear-after::after{
          display: none;
      }
  </style>
</head>
<body <?php if(isset($body_class)) echo "class='".$body_class."'";?>>