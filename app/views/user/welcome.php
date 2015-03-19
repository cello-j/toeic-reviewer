<!--<a class="btn btn-inverse" href="/">Home</a>
<a class="btn btn-inverse" href="<?php eh(url('user/logout')) ?>">Logout</a>
-->

<div class="comment">
    <div class="meta">
        <?php foreach ($userlist as $k => $v): ?>
            <h3><?php eh($v['username']);  ?>さん、こんにちは！</h3>
            <hr />
    </div>
</div>
<?php endforeach ?>