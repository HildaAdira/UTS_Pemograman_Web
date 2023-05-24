<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasil Biodata</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: top;
            height: 100vh;
        }
        table {
            border: 1px solid black;
            width: 400px;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        .narrow-column {
            width: 300px;
        }
        .wide-column {
            width: 400px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <table border="1">
        <tr>
        <td colspan="3" align="center">
        <h3 style="text-align: center;">Hasil Biodata yang di Inputkan</h3>
            </td>
        </tr>
            <tr>
                <th class="narrow-column">NPM :</th>
                <td><?php echo $_POST['npm']; ?></td>
            </tr>
            <tr>
                <th class="narrow-column">Nama :</th>
                <td><?php echo $_POST['nama']; ?></td>
            </tr>
            <tr>
                <th class="narrow-column">Email :</th>
                <td><?php echo $_POST['email']; ?></td>
            </tr>
            <tr>
                <th class="narrow-column">Alamat :</th>
                <td><?php echo $_POST['alamat']; ?></td>
            </tr>
            <tr>
                <th class="narrow-column">Jenis Kelamin :</th>
                <td><?php echo $_POST['jenis_kelamin']; ?></td>
            </tr>
            <tr>
                <th class="narrow-column">Tanggal Lahir :</th>
                <td><?php echo $_POST['tanggallahir']; ?></td>
            </tr>

            <tr>
                <th class="narrow-column">Hobi :</th>
                <td>
                    <?php
                    if (!empty($_POST['hobi'])) {
                        foreach ($_POST['hobi'] as $hobi) {
                            echo ucfirst($hobi) . "<br>";
                        }
                    }
                    ?>
                </td>
            </tr>
                
            <tr>
                <th class="narrow-column">Asal Negara:</th>
                <td><?php echo $_POST['asalnegara']; ?></td>
            </tr>
            <tr>
                <th class="narrow-column">About UNAS :</th>
                <td class="wide-column"><?php echo $_POST['saran']; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
