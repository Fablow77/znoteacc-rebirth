<div class="well widget">
	<div class="header">
		Top 5 Rebirths
	</div>
	<div class="body">
		<table>
			<?php
			$cache = new Cache('engine/cache/rebirth');
			if ($cache->hasExpired()) {
				$players = mysql_select_multi('SELECT `name`, `rebirth`, `level` FROM `players` WHERE `group_id` < ' . $config['highscore']['ignoreGroupId'] . ' ORDER BY `rebirth` DESC, `level` DESC LIMIT 5;');

				$cache->setContent($players);
				$cache->save();
			} else {
				$players = $cache->load();
			}

			if ($players) {
				foreach($players as $count => $player) {
					$nr = $count+1;
					echo "<tr><td>{$nr}</td><td><a href='characterprofile.php?name={$player['name']}'>{$player['name']}</a> ({$player['rebirth']}).</td></tr>";
				}
			}
			?>
		</table>
	</div>
</div>