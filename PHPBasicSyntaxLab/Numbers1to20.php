
<ul>
    <?php for($i=1; $i<=20; $i++): ?>
        <li><span style="color: <?= $i%2==1 ? "blue" : "green" ?>"><?=$i ?></span></li>
    <?php endfor;?>
</ul>
