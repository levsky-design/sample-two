<?php require('_login.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>System Sample - demo version - Sample Sp. z o.o.</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/style.css" />
		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	</head>

	<body>
			<header> 
				<div id="logo">
					<a href="http://tagsystems.pl/"><img src="img/logotagsystems.png" alt="logo TAG Systems"></a>
				</div>
				<nav id="nav_top">
					<ul>
						<!--<li><a href="index.php">start</a></li>-->
						<li><a href="logout.php">LOGOUT</a></li>
					</ul>
				</nav>
				
			</header>
			<header id="header_bottom">
			<nav id="nav_bottom">
					<ul>
						<!--<li><a href="index.php">start</a></li>-->
						<li><a class="home_button_sel" href="index.php"></a></li>
						<li><a href="index.php">Transactions</a></li>
						<li><a href="cards.php">Cards</a></li>
						<li><a href="index.php">Accounts</a></li>
						<li><a href="index.php">Investments</a></li>
						<li><a href="index.php">Deposits</a></li>
						<li><a href="pangen.php">Insurances</a></li>
					</ul>
				</nav>
			</header>
			<!--<div id="welcome">-->
			<!--	<span>Welcome back <font color="#5aaf76"><?php echo $login->username; ?></font>. Thank you for logging in.</span>-->
			<!--</div>-->
			<section id="cards_section">
				<div class="cards_h"><h2></h2></div>
				
				
				<div id="account">
					SUPERACCOUNT<BR>
					<span>22 3410 0008 0000 0000 0000 0000</span>
				</div>
				
				<div id="funds">
					Available funds:<BR><BR>
					<span>1 200 GBP</span>
				</div>
				<div id="history">
						<table>
							<tr>
							  <th>Date</th>
							  <th>Recipient / Sender</th>
							  <th>Description</th>
							  <th>Type</th>
							  <th class="amount">Amount</th>
							</tr>
							<tr>
							  <td>20 November 2015</td>
							  <td>John Novak<BR><BR>
									<span>23 5620 1177 0000 0008 1988 0000</span></td>
							  <td>Payment</td>
							  <td>Transfer from account</td>
							  <td class="amount">-55 EUR</td>
							</tr>
							<tr>
							  <td>19 November 2015</td>
							  <td>Martin Doe<BR><BR>
									<span>23 5620 1177 0000 0008 1988 0000</span></td>
							  <td>Payment</td>
							  <td>Transfer from account</td>
							  <td class="amount">-145 EUR</td>
							</tr>
							<tr class="last">
							  <td>18 November 2015</td>
							  <td>Jack Lock<BR><BR>
									<span>23 5620 1177 0000 0008 1988 0000</span></td>
							  <td>Payment</td>
							  <td>Transfer from account</td>
							  <td class="amount">-111 EUR</td>
							</tr>
						</table>
				</div>
				
			</section>
			<footer>
			<div id="copyright">
                &copy; Demo Sample | Design by <a href="http://sample.pl/" />Levsky</a>
            </div>
			</footer>
			<script>
				$('#card_select input:radio').addClass('input_hidden');
				$('#card_select label').click(function() {
					$(this).addClass('selected').siblings().removeClass('selected');
				});
				
				function myFunction1() {
				document.getElementById('cs').action = "card_1.php";
				}
				function myFunction2() {
				document.getElementById('cs').action = "card_2.php";
				}
			</script>


	</body>
</html>
<?php /*?> <?php */?>
