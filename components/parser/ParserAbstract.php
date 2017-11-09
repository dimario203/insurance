<?php
namespace components\parser;

abstract class ParserAbstract {
	public abstract function run();

	public abstract function prepareData();

	public function save($data) {
		// Реализация
	}
}