<?php
namespace Octotanks\Page;

class Create extends \Gt\Page\Logic {

public function go() {

}

public function do_assign($details) {
	foreach ($details as $key => $value) {
		$this->document->querySelector("[name=$key]")->value = $value;
	}
	for($i = 1; $i <= $details["num"]; $i++) {
		$t = $this->template->get("bot");
		$t->querySelector("label>span")->textContent = $i;
		$t->insertTemplate();
	}
}

public function do_commence($details) {
	// TODO: Check all repositories are valid.
	var_dump($details);
	die("Let battle commence!");
}

}#