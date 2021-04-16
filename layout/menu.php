<nav>
	<div class="container">
		<!-- Menu left aligned -->
		<div class="pull-left">
			<ul>
				<li><a href="/"><i class="fa fa-home"></i> Home</a>
					<ul>
						<li><a href="changelog.php">Changelog</a> </li>
					</ul>
				</li>
				<li><a id="accountLink" href="myaccount.php"><i class="fa fa-user-circle"></i> Account</a>
					<ul>
						<li><a href="downloads.php">Downloads</a> </li>
						<li><a href="myaccount.php">My account</a> </li>
						<li><a href="register.php">Register</a> </li>
					</ul>
				</li>
				<li><a href="onlinelist.php"><i class="fa fa-users"></i> Community</a>
					<ul>
						<li><a href="forum.php">Forum</a> </li>
						<li><a href="sub.php?page=search">Characters</a> </li>
						<li><a href="guilds.php">Guilds</a> </li>	
						<li><a href="rebirths.php">Top 30 Rebirths</a> </li>					
						<li><a href="highscores.php">Highscores</a> </li>
						<li><a href="guildwar.php">Guild Wars</a> </li>
						<li><a href="topbank.php">Top 10 Bank Balances</a> </li>	
						<li><a href="houses.php">Houses</a> </li>
						<li><a href="killers.php">Killstatistics</a> </li>
						<li><a href="deaths.php">Latest deaths</a> </li>
						<li><a href="onlinelist.php">Online List</a> </li>
					</ul>
				</li>
				<li><a href="serverinfo.php"><i class="fa fa-book"></i> Library</a>
					<ul>
						<?php if ($config['items'] == true): ?>
							<li><a href="items.php">Items</a> </li>
						<?php endif; ?>
						<li><a href="serverinfo.php">Serverinfo</a> </li>
						<li><a href="powergamers.php">Powergamers</a> </li>
						<li><a href="rebirth.php">Rebirth Information</a> </li>
						<li><a href="outfits.php">Outfit Bonus</a> </li>
						<li><a href="lottery.php">Lottery System</a> </li>
						<li><a href="onlinebonus.php">Online Bonus System</a> </li>
						<li><a href="critical.php">Critical Hit PvP System</a> </li>
						<li><a href="slot.php">Upgrade Slot System</a> </li>
						<li><a href="potions.php">Potion List</a> </li>
						<li><a href="calender.php">Event Calender</a> </li>
						<li><a href="premium.php">Premium & Points</a> </li>
						<li><a href="spells.php">Spells</a> </li>
					</ul>
				</li>
				<li><a href="support.php"><i class="fa fa-info-circle"></i> Support</a>
					<ul>
						<li><a href="helpdesk.php">Helpdesk</a> </li>
						<li><a href="sub.php?page=recover">Lost account</a> </li>
						<li><a href="houserules.php">House Rules</a> </li>
					</ul>
				</li>
				<li><a href="shop.php"><i class="fa fa-shopping-cart"></i> Shop</a>
					<ul>
						<li><a href="buypoints.php">Buy points</a> </li>
						<?php if ($config['shop_auction']['characterAuction']): ?>
							<li><a href="auctionChar.php">Character Auction</a> </li>
						<?php endif; ?>
						<li><a href="shop.php">Shop</a> </li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- Menu right aligned -->
		<div class="pull-right">
			<ul>
				<li><a href="sub.php?page=loginhelp" class="modIcon loginBtn"><i class="fa fa-lock"></i><i class="fa fa-unlock"></i> Login</a> </li>
				<li><a href="register.php"><i class="fa fa-key"></i> Register</a> </li>
			</ul>
		</div>
	</div>
</nav>