<?php

class ParserManager {

	/**
	 * @var string
	 */
	public $temp = __DIR__ . '/last.tmp';

	/**
	 * @var ParserAbstract
	 */
	public $parser;

	public function init() {
		$config = include dirname(__DIR__) . '/config/parsers.php';
		$last = $this->getLast();
		foreach ($config as $item) {
			if ($last == $item['parser']) {
				next($config);
				$next = current($config);
				$parser = $next['parser'];
				if (class_exists($parser)) {
					$this->parser = new $parser();
					$this->parser->run();
					$data = $this->parser->prepareData();
					$this->parser->save($data);
					$this->saveLast($next);
				}
			}
		}
	}

	public function getLast() {
		$last = file_get_contents($this->temp);
		return $last;
	}

	public function saveLast($last) {
		file_put_contents($this->temp, $last);
	}
}