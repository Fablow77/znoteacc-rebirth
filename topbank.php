<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>
	<div class="page-header"><center><h3>Top 10 Bank Balances</h3></center></div>
	<div class="body">
		<table>
			<?php
			$cache = new Cache('engine/cache/bankbalance');
			if ($cache->hasExpired()) {
				$players = mysql_select_multi('SELECT `name`, `balance`, `level` FROM `players` WHERE `group_id` < ' . $config['highscore']['ignoreGroupId'] . ' ORDER BY `balance` DESC, `level` DESC LIMIT 10;');

				$cache->setContent($players);
				$cache->save();
			} else {
				$players = $cache->load();
			}

			if ($players) {
				foreach($players as $count => $player) {
					$nr = $count+1;
					echo "<tr><td>{$nr}</td><td><a href='characterprofile.php?name={$player['name']}'>{$player['name']}</a> <font color=#ff3322><b>[{$player['balance']}]</b></font></td></tr>";
				}
			}
			?>

		</table>
</div>
<?php include 'layout/overall/footer.php'; ?>