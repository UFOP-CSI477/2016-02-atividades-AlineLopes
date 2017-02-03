<h1>Pacientes</h1>
<section>
<hr />

<table>
    <tr>
    <th>Nome</th>
    <th>Preco</th>
    <th>Data</th>

    </tr>
<?php
$total = 0;
$cont = 0;

foreach($exames as $p):
    echo "<tr>";
    echo "<td>".$p['Procedimento']['nome']."</td>";
    echo "<td>".$p['Procedimento']['preco']." </td>";
    echo "<td>".$p['Exame']['data']. "</td>";

    echo "</tr>";
    $total = $total + $p['Procedimento']['preco'];
    $cont = $cont+1;
endforeach;

?>


<tr>
    <th>Quantidade: <?=$cont?></th>
    <th>Total: <?=$total?></th>
    <th></th>

    </tr>
</table>
</section>
