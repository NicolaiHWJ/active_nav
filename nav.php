<nav>
	<ul>
    	<li><a href="page1.php" <?php if ($curpage == 'page1.php') {echo 'class="active"';} ?>>PAGE 1</a></li>
        <li><a href="page2.php" <?php if ($curpage == 'page2.php') {echo 'class="active"';} ?>>PAGE 2</a></li>
        <li><a href="page3.php" <?php if ($curpage == 'page3.php') {echo 'class="active"';} ?>>PAGE 3</a></li>
    </ul>
</nav>