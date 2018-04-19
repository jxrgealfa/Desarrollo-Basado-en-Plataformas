<?php
abstract class PageTemplate {
	abstract protected function printHeader();
	abstract protected function printMenu();
	abstract protected function prinPerbas();
	
	protected $title = 'PageTemplate';
	
	public function printPage() {
		$text = "<html>";
		$text .= $this->printHeader();
		
		$text .= "<body>";
				$text .= "<div id='menu'>";
					$text .= $this->printMenu();
				$text .= "</div>";
				$text .= "<div id='main'>";
					$text .= $this->printPerbas();
				$text .= "</div>";
		$text .= "</body>";
		
		$text .= "</html>";
		echo $text;
	}
	
}
?>

