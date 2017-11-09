<?php

namespace components\parser;

use yii\base\Component;

Class ParserManager extends Component
{
    /**
     * @var string
     */
    public $temp = 'console/runtime/parser/current.tmp';

    /**
     * @var ParserAbstract
     */
    public $parser;

    /**
     * @var array
     */
    public $parsers;



    public function getParser(){

    }

    public function runParser() {
        $countParsers = count($this->parsers);
        $current = (int)self::getCurrent();
        $parser = $this->parsers[$current];
        $class = __NAMESPACE__.'\\'.$parser['parser'];
        if(class_exists($class)){
            $this->parser = new $class();
            $this->parser->run();
        }
        $current++;
        if($current == $countParsers){
            $current = 0;
        }
        self::saveCurrent($current);
    }

    private function getCurrent() {
        $path_parts = pathinfo($_SERVER['SCRIPT_FILENAME']);
        chdir($path_parts['dirname']);
        $current = 0;
        if(!file_exists($this->temp)) {
            if (mkdir(dirname($this->temp))) {
                file_put_contents($this->temp, 0);
                $current = 0;
            } else {
                file_put_contents('console/runtime/logs/parsers.log', 'Dont create directory'.$this->temp);
            }
        }else {
                $current = file_get_contents($this->temp);            
        }
        /*if(!file_exists('console/runtime/logs/parsers_test.log')){
            $count = 1;
            file_put_contents('console/runtime/logs/parsers_test.log', $count);
        } else {
            $count = file_get_contents('console/runtime/logs/parsers_test.log');
            $count = (int)$count;
            $count++;
            file_put_contents('console/runtime/logs/parsers_test.log', $count);
        }*/
        return $current;
    }

    private function saveCurrent($current) {
        file_put_contents($this->temp, $current);
    }
}