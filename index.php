<?php
Interface consoleInterface{
    public function rate();
}
class xboxConsole implements consoleInterface{
    public $refresh=120;
    public function rate()
    {
        echo $this->refresh;
    }
}
class sonyConsole implements consoleInterface{
    public $refresh=144;
    public function rate()
    {
        echo $this->refresh;
    }
}
Interface BrandFactory{
    public function consolBrand():consoleInterface;
}
class sony implements BrandFactory{
    public function consolBrand(): consoleInterface
    {
        return new sonyConsole();
    }
}
class xbox implements BrandFactory{
    public function consolBrand(): consoleInterface
    {
        return new xboxConsole();
    }
}
function test(BrandFactory $factory){
    $console=$factory->consolBrand();
    $console->rate();
}
test(new sony);
