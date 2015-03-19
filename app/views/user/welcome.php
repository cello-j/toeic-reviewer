<!--<a class="btn btn-inverse" href="/">Home</a>
<a class="btn btn-inverse" href="<?php eh(url('user/logout')) ?>">Logout</a>
-->
	 <h1>Member List </h1>


<div class="comment">
    <div class="meta">
        <?php foreach ($userlist as $k => $v): ?>
        <?php eh($k + 1) ?>: <?php eh($v['username']);  ?>
    </div>
</div>
<?php endforeach ?>