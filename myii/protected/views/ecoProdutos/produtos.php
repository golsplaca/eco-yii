
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/protected/views/ecoProdutos/css/style.css" />
	<div class="eco-produtos">

		<?php
			foreach ($produtos as $k => $produto) {
				// echo "<pre>";
				// var_dump($produto);
				// echo "</pre>";
				echo '<div class="col-lg-4">
						<div class="widget" ng-transclude="" onclick="window.location.href='."'index.php?r=ecoProdutos/view&id=".$produto->pro_id."'".'">
							<div class="widget-body" ng-class="classes">
								<div class="img-produto">					
									<img src="../public/images/produtos/'.$produto->pro_img_1.'" alt="" >
								</div>
								<div class="title">'.$produto->pro_nome.'
								</div>
								<div class="comment"><div class="reais">de R$ '.$produto->pro_preco_de.' por </div> 
								<div class="valor_desc"> R$ '.$produto->pro_preco_por.'</div></div>
							</div>
						</div>
					 </div>';
			}
		?>	

		<div class="col-lg-12">		
				<?php
				if (isset($produtos[0]->pagination)) {
					echo '<ul class="pagination pagination-sm pull-right pagination-client">';
					foreach ($produtos[0]->pagination as $k => $v) {
						$act_page = ($produtos[0]->page == $v)?'act-page':'';
						echo '<li id="pagination'.$v.'" class="'.$act_page.'">
								<a href="index.php?r=ecoProdutos/index&categoria='.$produtos[0]->pro_id_cagegoria.'&colecao='.$produtos[0]->pro_id_colecao.'&search='.$produtos[0]->search.'&page='.$v.'"">'.($v+1).'</a>
							  </li>';
					}
					echo '</ul>';
				}else{
					echo '<article>';
					echo (isset($_GET['search']))?'<h2>Buscar: '.$_GET['search'].'</h2>':'';
					echo  '<div>
						      <p>Nenhum item encontrado.</p>
						    </div>
						  </article>';
				}
	       		?>
	        
	    </div>
	</div>


<script>
	$(document).ready(function(){
		$('div.eco-produtos .col-lg-4').fadeIn(1000);
	});
</script>