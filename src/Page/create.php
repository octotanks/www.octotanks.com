<?php
namespace OctoTanks\Page;

class Create extends \Gt\Page\Logic {

/**
 * Code inside go runs before the page renders, and before
 * any other Logic methods execute.
 */
public function go() {
}

/**
 * Executed when the assign button is pressed.
 *
 * @param array $details Key-value-pairs of the POSTed data.
 */
public function do_assign($details) {
	// First loop over all POSTed data, re-fill the corresponding input fields.
	foreach ($details as $key => $value) {
		$this->document->querySelector("[name=$key]")->value = $value;
	}

	// Output the number of bots required using a templated element.
	for($i = 1; $i <= $details["num"]; $i++) {
		$t = $this->template->get("bot");
		$t->querySelector("label>span")->textContent = $i;
		$t->insertTemplate();
	}
}

/**
 * Executed when the commence button is pressed.
 *
 * @param array $details Key-value-pairs of the POSTed data.
 */
public function do_commence($details) {
	// TODO: Check all repositories are valid.
	\Gt\Response\Headers::redirect("/battle");
	exit;
}

}#