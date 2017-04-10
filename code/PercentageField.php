<?php

class PercentageField extends FormField {
	
	public function setValue($value) {
		if (!$value || $value < 0) {
			$value = 0;
		}
		return parent::setValue($value);
	}

	public function dataValue() {
		return $this->value / 100;
	}

	public function Value() {
		return ($this->value * 100) . "%";
	}

	public function Type() {
		return 'percentage text';
	}

	// TODO: add validation for min , max , and precision limits

}