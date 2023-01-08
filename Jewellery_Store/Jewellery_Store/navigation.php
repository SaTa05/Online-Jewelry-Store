<!-- Main Navigation Start-->
<nav id="nav">
	<div id="menu">
		<h3 class="menuarrow"><span>Menu</span></h3>
		<ul>

			<?php
                //To adjust menu stylesheet.css Line 267
                // Connect to server and select databse.
                include("includes/config.php");

                // Creating query to fetch main menu from mysql database table.
                $main_menu_query = "select * from main_menu";
                $main_menu_result = mysqli_query($conn, $main_menu_query);

                // if ($result != null) {

	            //     while ($row = mysqli_fetch_assoc($result)) {

		        //         echo '</br>Employee ID: ' . $row['EMP_ID'] . ' Name: ' . $row['NAME'] . ' Salary: ' . $row['SALARY'];

	            //     }

                // }


                // $main_menu_result = mysqli_query($main_menu_query);

                while ($r = mysqli_fetch_assoc($main_menu_result)) {

                ?>
			<li><a href="<?php echo $r['mmenu_link']; ?>" id="<?php echo $r['mmenu_id']; ?>"><?php echo $r['mmenu_name']; ?></a>
				<div>
					<ul>
						<?php
	                // Creating query to fetch sub menu from mysql database table.
                	$sub_menu_query = "select * from sub_menu where mmenu_id=" . $r['mmenu_id'];
	                $sub_menu_result = mysqli_query($conn, $sub_menu_query);
	                while ($r1 =  mysqli_fetch_assoc($sub_menu_result)) {

                ?>
						<li><a
								href="<?php echo $r1['smenu_link']; ?>?Items=<?php echo $r1['id']; ?>&Subname=<?php echo $r1['2']; ?>&MenuCat=<?php echo $r1['1']; ?>"><?php echo $r1['smenu_name']; ?></a></li>
						<?php
	                }
                 ?>
					</ul>
				</div>
			</li>
			<?php
                }
                ?>
		</ul>
	</div>
</nav>
<!-- Main Navigation End-->