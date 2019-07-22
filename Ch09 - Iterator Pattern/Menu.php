<?php


namespace Headfirst;


class Menu extends MenuComponent
{
    /** @var array */
    protected $menuComponents = [];

    /** @var string */
    protected $name;

    /** @var string */
    protected $description;

    /**
     * Menu constructor.
     * @param string $name
     * @param string $description
     */
    public function __construct(string $name, string $description)
    {
        $this->name        = $name;
        $this->description = $description;
    }

    public function add(MenuComponent $menuComponent)
    {
        $this->menuComponents[] = $menuComponent;
    }

    public function remove(MenuComponent $menuComponent)
    {
        unset($menuComponent, $this->menuComponents);
    }

    public function getChild(int $i): MenuComponent
    {
        return $this->menuComponents[$i];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function print()
    {
        echo "\n" . $this->getName() . ", " . $this->getDescription();
        echo "\n-------------------\n";

        $menuIterator = new StandardIterator($this->menuComponents);

        while ($menuIterator->hasNext()) {
            /** @var MenuComponent $menu */
            $menuComponent = $menuIterator->next();
            $menuComponent->print();
        }
    }


}