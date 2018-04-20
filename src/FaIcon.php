<?php
/**
 * Created by PhpStorm.
 * User: locdd
 * Date: 4/20/18
 * Time: 11:45
 */

namespace FontAwesomeGroupHelper;

class FaIcon {
    var $name = ''; //the name of the icon with format = icons-icon_name or pro_icons-icon_name (folder-template.tpl)
    var $params = []; //local variant. This is the array of variant => value

    public static function create($icon) {
        return new self($icon);
    }

    public function __construct($name = '') {
        $this->name = $name;
    }

    public function set($variantName, $value) {
        $this->params[$variantName] = $value;

        return $this;
    }

    public function render() {
        //depend on the name to get the exact template

        //prepare local variant to be rendered
        foreach ($this->params as $key => $value) {
            $$key = $value;
        }

        //use the template to render
        $templateFileName = $this->getTemplateFile();
        ob_start();
        include($templateFileName);
        $iconHtml = ob_get_clean();
        return $iconHtml;
    }

    private function getTemplateFile() {
        if (empty($this->name)) return __DIR__ . '/icons/not_found.tpl';

        $filePaths = explode('-', $this->name);
        $fullFilePath = implode('/', $filePaths) . '.tpl';

        $currentFullPath = __DIR__ . '/' . $fullFilePath;

        $realPath = realpath($currentFullPath);

        if (file_exists($realPath)) __DIR__ . '/icons/not_found.tpl';

        return $currentFullPath;
    }

    public function __toString() {
        try {
            return $this->render();
        } catch (Exception $exception) {
            return '';
        }
    }
}