<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/eco-categoria.css" />

<div class="col-md-3">

  <div class="form-group eco-category has-feedback">
    <label class="control-label" >Pesquisar</label>
    <form action="index.php" method="GET">
    <?php 
      $search = '';
      foreach ($_GET as $k => $v) {
        if($k != 'search')
          echo '<input type="hidden" name="'.$k.'" value="'.$v.'" />';
        else 
          $search = $v;
      } 
    ?>
      <input type="text" name="search" value="<?php echo $search; ?>" class="form-control" aria-describedby="inputError2Status">
    </form>
    <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
  </div>

  <div class="eco-category">
    <div class="">
      	Coleções
    </div>
    <?php foreach ($colecoes as $k => $v) {
      $col_act = (isset($_GET['colecao']) && $v->col_guid == $_GET['colecao'])?'active':'';
    	echo '<a href="index.php?r=ecoProdutos/index&colecao='.$v->col_guid.'" class="'.$col_act.'">'.$v->col_nome.'</a><br />';
    }
    ?>
  </div>

</div>
