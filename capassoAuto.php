<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capasso Esercizio 3</title>
    <style>
        body{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        table {
            border: 3px solid black;
        }

        th {
            border: 3px solid black;
            background-color: lightblue;
            text-align: left;
            width: 300px;
            height: 35px;
        }

        td {
            border: 3px solid black;
            font-weight: normal; 
            text-align: left;
            width: auto;
            height: auto;
            
        }
    </style>
</head>
<body>

    <h4 align = "center">-------------Dettagli Macchina-------------</h4>

    <?php
        $marca = $_GET["marca"];
        $modello = $_GET["modello"];

        //Controllo se almeno una opzione è stata scelta
        if (isset($_GET['stato'])) { //isset verifica se una variabile ha un valore diverso da null
            $stato = $_GET['stato'];    //se appunto stato non è nul, assegnamo la variabile
        } else {
            $stato = "Non specificato"; //altrimenti appunti diremo che non sarà specificata
        }

        $anno = $_GET["anno"];
        $cilindrata = $_GET["cilindrata"];
        $cavalli = $_GET["cavalli"];
        $prezzo = $_GET["prezzo"];
        $targa = $_GET["targa"];

        if (isset($_GET['accessori'])) { //isset verifica se una variabile ha un valore diverso da null
            $accessori = implode(',', $_GET['accessori']);    //unisco i valori (con implode) separandoli con la virgla
        } else {
            $accessori = "Nessuno"; //altrimenti diremo che non ci sono
        }

        $descrizione = $_GET["descrizione"];
    ?>

    <table>
        <tr>
            <th class="etichetta">Marca</th>
            <td><?php echo $marca; ?></td>
        </tr>
        <tr>
            <th class="etichetta">Modello</th>
            <td><?php echo $modello; ?></td>
        </tr>
        <tr>
            <th class="etichetta">Stato</th>
            <td><?php echo $stato; ?></td>
        </tr>
        <tr>
            <th class="etichetta">Anno Costruzione</th>
            <td><?php echo $anno; ?></td>
        </tr>
        <tr>
            <th class="etichetta">Cilindrata</th>
            <td><?php echo $cilindrata; ?></td>
        </tr>
        <tr>
            <th class="etichetta">Cavalli</th>
            <td><?php echo $cavalli; ?></td>
        </tr>
        <tr>
            <th class="etichetta">Prezzo</th>
            <td><?php echo $prezzo . " €"; ?></td>
        </tr>
        <tr>
            <th class="etichetta">Targa</th>
            <td><?php echo $targa; ?></td>
        </tr>
        <tr>
            <th class="etichetta">Accessori</th>
            <td><?php echo $accessori; ?></td>
        </tr>
        <tr>
            <th class="etichetta">Descrizione aggiuntiva</th>
            <td><?php echo $descrizione; ?></td>
        </tr>
    </table>
</body>
</html>