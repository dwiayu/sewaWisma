<!-- base_start.php-->
<!DOCTYPE html>
<html>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    .footer{
        position : absolute;
        bottom: 0;
        width : 100%;
        height : 60px;
        background-color = #f5f5f5;
           }
    .container .text-footer{
        margin: 20px 0;
    }
    </style>
</head>
<body>
    <?php $this->load->view('layouts/header')?>
</body>
