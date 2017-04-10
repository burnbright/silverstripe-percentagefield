<?php

class PercentageFieldTest extends SapphireTest {

	public function testPercentField() {
		$field = PercentageField::create("Percent");
		$field->setValue(45);
		$this->assertEquals(0.45, $field->dataValue());
	}

}