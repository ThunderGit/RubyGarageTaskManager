<!DOCTYPE html>
<html>
<head>
	<?=$global_header?>
</head>
<style>
#button_sql{
    width: 200px;
    height: 40px;
    cursor: pointer;
    font-weight:bold;
    background-color: #4165a3;
    background-image: -moz-linear-gradient(top, #4165a3, #4165a3);
    background-image: -ms-linear-gradient(top, #4165a3, #4165a3);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#4165a3), to(#4165a3));
    background-image: -webkit-linear-gradient(top, #4165a3, #4165a3);
    background-image: -o-linear-gradient(top, #4165a3, #4165a3);
    background-image: linear-gradient(top, #4165a3, #4165a3);
    background-repeat: repeat-x;
    background: url("../images/todo-btn-cross.png") 10px 50% no-repeat, #4171b5 url("../images/todo-btn-bg.png") left top repeat-x;
    filter: 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#4165a3, endColorstr=#4165a3, GradientType=0)';
    border: 1px solid #315587;
    color: #fdfdfd;
    
   
    display: block;
    margin: auto auto auto auto;
}
</style>
<body>

<div id="wrapper">

	<header class="header">
		<span class="header__h1">SIMPLE TODO LISTS</span>
		<span class="header__h2">FROM RUBY GARAGE</span>
	</header>
<button id="button_sql" class="js-task-queries-button" >SQL Statistics</button>
	<div class="js-task-queries task-queries" style="display: none">
		<div>SQL Task: </div>
		<br><br>
		<?php foreach($queries as $key => $query) { ?>
			<div class="query">
				<div>Query <?=$key?>: </div>
				<pre>
					<?php var_dump($query['query']); ?>
				</pre>
				<pre>
					<div>Result: </div>
					<?php var_dump($query['result']); ?>
				</pre>
			</div>
			<br><br><br>
		<?php } ?>
	</div>
	<ul class="js-projects">
	</ul>

	<footer>
		<button class="project__add js-add-project">Add TODO List</button>
	</footer>
</div>

</body>
</html>
