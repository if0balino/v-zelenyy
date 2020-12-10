<?php
	require_once('../functions.php');
	$items = select_items();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/3b79ccf7db.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.22/datatables.min.css" />
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.22/datatables.min.js"> -->
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- <link type="text/css" href="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/css/dataTables.checkboxes.css" -->
        <!-- rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css"> -->
    <!-- <script type="text/javascript"
        src="//gyrocode.github.io/jquery-datatables-checkboxes/1.2.12/js/dataTables.checkboxes.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V-Zelenny</title>
</head>
<body>
	<div class="d-flex vh-100">
		<div class="vh-100 side-menu-container d-flex flex-column justify-content space-between" id='side-menu'>
            <div class="menu-title">Logo disini</div>
            <div class="list-group list-group-flush">
                <a href="adminDash.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-home col-2"></i>
                    <span class="col">Dashboard</span></a>
                <a href="stokbarang.php" class="list-group-item list-group-item-action bg-light"><i
                        class="fas fa-cube col-2"></i> <span class="col">Stok Barang</span></a>
                <a href="historyAdmin.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-history col-2"></i>
                    <span class="col">History</span></a>
                <a href="kasir.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-calculator col-2"></i><span class="col">Kasir</span></a>
        </div>
    </div>

    <div class="col container-fluid content">
    	<div class="p-5">
    		<table class="table table-striped">
    			<thead>
    				<tr>
    					<th>Id Barang</th>
    					<th>Nama Barang</th>
    					<th>Stok</th>
    					<th>Harga</th>
    				</tr>
    			</thead>
    			<tbody>
    				<?php
    				$i=0;
    				foreach ($items as $item) {
    					echo'
    					<tr>
    					<td>'.$item['id'].'</td>
    					<td>'.$item['nama'].'</td>
    					<td>'.$item['stok'].'</td>
    					<td>'.$item['harga'].'</td>
    					</tr>';
    					$i++;
    				}
    				?>
    			</tbody>
    					<tr>
						<td>
							<input class="btn btn-warning text-light" type="submit" name="ganti" value="PERBAHARUI">
							&nbsp;&nbsp;&nbsp; 
							<a class="btn btn-danger text-light">HAPUS</a>
							<a class="btn btn btn-info text-light">TAMBAH</a>
						</td>
					</tr>
    		</table>

    	</div>
    </div>
</body>
</html>