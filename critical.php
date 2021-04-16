<?php require_once 'engine/init.php'; include 'layout/overall/header.php'; ?>

<h1>Critical Hit PvP System</h1>
<p>This page will show you how we calculate critical hits in PvP. This <b>does not</b> apply to monsters.</p>

<p>To calculate your critical chance, it's based on the weapon/wand you are using (distance, axe, sword, club, & magic) and multiply it by 2, so if your skill is 140 then we calculate as follows:</p>
<table class="table tbl-hover">
		<tbody>
			<tr class="yellow">
				<td>140 * 2.1 = 294 = 29.4%</td>
			</tr>
			<tr>
				<td>So 140(skill) * 2.1 (our multiplier) = 294 = 29.4% chance of getting a critical hit per hit.</td>							
			</td>
			</tr>
		</tbody>
	</table>
<p>To calculate your critical hit, the formula as follows if your hit was suppose to do 3100 damage:</p>
<table class="table tbl-hover">
		<tbody>
			<tr class="yellow">
				<td>3100 * 2.1 = 6510</td>
			</tr>
			<tr>
				<td>So 3100(damage) * 2.1 (our multiplier) = 6510 = critical hit.</td>							
			</td>
			</tr>
		</tbody>
	</table>

<?php include 'layout/overall/footer.php'; ?>