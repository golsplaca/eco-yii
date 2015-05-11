<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/eco-banner.css" />

<div class="eco-banner">
	<img src="protected/views/ecoBanner/images/banner.jpg" /> 
</div>
<script>
	$(document).ready(function(){
		$('.eco-banner').fadeIn(3000);
	});
</script>