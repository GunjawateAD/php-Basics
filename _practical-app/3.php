<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php

		if (10 < 5) {
			echo "10 is less than 5";
		} elseif (10 == 5) {
			echo "10 is equal to 5";
		} else {
			echo "I Love Php" . "<br>";
		}

		for ($i = 1; $i <= 10; $i++) {
			echo $i . "<br>";
		}


		$number = 4;

		switch ($number) {
			case 1:
				echo "One";
				break;
			case 2:
				echo "Two";
				break;
			case 3:
				echo "Three";
				break;
			case 4:
				echo "Four";
				break;
			case 5:
				echo "Five";
				break;
			default :
				echo "Wrong Input";
		}
		/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */


		?>






	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>