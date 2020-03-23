<?php

include 'vendor/autoload.php';

$view = new \TYPO3Fluid\Fluid\View\TemplateView();
$paths = $view->getTemplatePaths();
$paths->setTemplatePathAndFilename('./Resources/Private/Templates/Main.html');

class teacher {
    private $name;
    private $hobby;

    /**
     * teacher constructor.
     * @param $name
     * @param $hobby
     */
    public function __construct($name, $hobby)
    {
        $this->name = $name;
        $this->hobby = $hobby;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getHobby()
    {
        return $this->hobby;
    }
}


$values['user'][] = new teacher("hansdrei", "joghurt essen 1");
$values['user'][] = new teacher("NORBERT", "joghurt essen 5");
$values['user'][] = new teacher("Jug", "joghurt essen");

$view->assignMultiple($values);

echo $view->render();