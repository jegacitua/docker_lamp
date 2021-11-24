<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Mi página de ejemplo</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootstrap 4, from LayoutIt!</title>

        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
	</head>

	<body>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
			<ul class="nav flex-column nav-pills">
				<li class="nav-item">
					<a class="nav-link active" href="#">EJERCICIOS PHP</a>
				</li>

                <?php
                $array=array("count()","array()","in_array()","strlen()","substr()","var_dump()","print_r()","explode()","implode()","addslashes()","strtoupper()","strtolower()","md5()","hash()","extract()","array_key_exists()","array_merge()","array_sum()","asort()","arsort()","shuffle()","session_start()","session_destroy()");
                //var_dump($array);
                foreach ($array as $valor) {
                    ?>
                    <li class="nav-item">
					    <a class="nav-link" onclick="myFunction('<?php echo $valor; ?>')" href="#"><?php echo $valor; ?></a>
				    </li>
                    <?php
                }
                ?>
			</ul>
		</div>







        <div class="col-md-10" id="count()" style="display:none">
            <h2>
				count()
			</h2>
			<textarea cols='103' rows='10'>
            $a[0] = 1;
            $a[1] = 3;
            $a[2] = 5;
			</textarea>
			<br>
            <div class="row">
            <div class="col-md-6">
                Respuesta:
                <?php
                $a[0] = 1;
                $a[1] = 3;
                $a[2] = 5;
                var_dump(count($a));
                ?>
            </div>
            <div class="col-md-6" style="align:left">
                <button type="button" onclick="myFunction('count()')" class="btn btn-primary btn-sm">
				Cerrar
			</button>
            </div>

            </div>
		</div>












        <div class="col-md-10" id="array()" style="display:none">
            <h2>
				array()
			</h2>
			<textarea cols='103' rows='10'>
            
			</textarea>
			<br>
            <div class="row">
            <div class="col-md-6">
                Respuesta:
                <?php
                
                ?>
            </div>
            <div class="col-md-6" style="align:left">
                <button type="button" onclick="myFunction('array()')" class="btn btn-primary btn-sm">
				Cerrar
			</button>
            </div>

            </div>
		</div>




        


        <div class="col-md-10" id="in_array()" style="display:none">
            <h2>
                in_array()
			</h2>
			<textarea cols='103' rows='10'>
            $os = array("Mac", "NT", "Irix", "Linux");

            if (in_array("Irix", $os)) {
                echo "Existe Irix";
            }
            if (in_array("mac", $os)) {
                echo "Existe mac";
            }
			</textarea>
			<br>
            <div class="row">
            <div class="col-md-6">
                Respuesta:
                <?php
                $os = array("Mac", "NT", "Irix", "Linux");
    
                if (in_array("Irix", $os)) {
                    echo "Existe Irix";
                }
                if (in_array("mac", $os)) {
                    echo "Existe mac";
                }
                ?>
            </div>
            <div class="col-md-6" style="align:left">
                <button type="button" onclick="myFunction('in_array()')" class="btn btn-primary btn-sm">
				Cerrar
			</button>
            </div>

            </div>
		</div>





	</div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    
    <script>
    function myFunction(div) {
        //alert(div);

        var x = document.getElementById(div);
        
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    </script>
     
	</body>
</html>




