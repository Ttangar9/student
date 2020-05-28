<form action="<?php bloginfo( 'url' ); ?>" method="get">
<input  type="text" name="s" placeholder="Поиск" value="<?php if(!empty($_GET['s'])){echo $_GET['s'];}?>"/>
<input type="submit" value="Найти"/>
</form>