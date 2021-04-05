<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            align-items: center;
            justify-content: center;
        }
        .container{
            
            width: 80%;
            height: 1000px;
            background-color: #fff;
            opacity: .5;
        }
    </style>
</head>
<body>

    <div class="container">

    </div>

    <script>var site_url = '<?php echo site_url();?>/';</script>
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?php echo base_url('assets/js/tedio_do_capeta.js');?>"></script> 
</body>
</html>