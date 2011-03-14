<?php

/**
 * HeaderLoader
 *
 * @author Patrik Nejezchleb
 * @copyright (c) 2010 Patrik Nejezchleb
 * @package    Nette Extras
 * @version    HeaderLoader 1.0, 2010-03-20
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
 */ 

class HeaderLoader extends Control {

    /** @var string */
    public $basePath;

    /** @var string */
    public $baseUri;

    /** @var string */
    public $base;

    /**
     * Render link(s)
     */
    public function render() {
        //$this->renderCss();
        //$this->renderJs();
    }
    public function renderCss($base, $dirpath, $files, $media=null) {
        if ($dirpath !== null) {
            
            $this->base = $this->getBase($base);

            foreach ($files as $file) {
                echo Html::el('link')
                        ->rel('stylesheet')
                        ->type('text/css')
                        ->media($media)
                        ->href($this->base.$dirpath.$file)
                        . "\n";
            }
        }
    }
    public function renderJs($base, $dirpath, $files) {
        if ($dirpath !== null) {

            $this->base = $this->getBase($base);

            foreach ($files as $file) {
                echo Html::el("script")
                        ->language("javascript")
                        ->type("text/javascript")
                        ->src($this->base.$dirpath.$file)
                        . "\n";
            }
        }
    }
    function getBase($base) {
        if($base=='basePath') {
            return $this->basePath;
        }else {
            return  $this->baseUri;
        }
    }
}