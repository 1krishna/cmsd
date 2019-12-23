<div class="nano">
	<div class="nano-content">
		<nav id="menu" class="nav-main" role="navigation">

			<ul class="nav nav-main">
				
					
					
					<li class="nav-parent">
						<a class="nav-link" href="#">
							<i class="fa fa-sticky-note" aria-hidden="true"></i>
							<span>Publications</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a class="nav-link" href="pub-add.php">
									<i class="fa fa-plus-square" aria-hidden="true"></i>
									Add Publication
								</a>
							</li>
							<li>
								<a class="nav-link" href="pub-del.php">
									<i class="fa fa-minus-square" aria-hidden="true"></i>
									Update/Remove Publication
								</a>
							</li>
							
						</ul>
					</li>
					<li class="nav">
						<a class="nav-link" href="pass-upd.php">
							<i class="fa fa-sticky-note" aria-hidden="true"></i>
							<span>Update passcode</span>
						</a>
					</li>
					<li class="nav">
						<a class="nav-link" href="<?php echo $_SERVER['PHP_SELF'] . "?lo"; ?>">
							<i class="fas fa-power-off" aria-hidden="true"></i>
							<span>Logout</span>
						</a>
						<?php
						if (!isset($_SESSION['fac_role']) || isset($_GET['lo'])) {
							session_destroy();
							header('Location: ../../administrator');
						}
						?>
					</li>				

				
			</ul>
		</nav>
	</div>
</div>