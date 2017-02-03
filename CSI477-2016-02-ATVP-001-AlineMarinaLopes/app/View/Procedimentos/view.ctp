<h1><?= $procedimento['Procedimento']['nome']; ?></h1>

<p>
  Preço: <?= $procedimento['Procedimento']['preco']; ?></p>

<p>
  Usuario_ID: <?= $procedimento['Procedimento']['usuario_id']; ?>
</p>
<?=
  $this->Html->link("Voltar", array('controller' => '$procedimento', 'action' => 'index'));
