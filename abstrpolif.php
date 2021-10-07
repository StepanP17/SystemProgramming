<?php
abstract class Flowers
{
    public abstract function makeSmell();
}
class Rose extends Flowers
{
    public function makeSmell()
    {
        echo 'Пахнет вкусно!';
    }
}
class Sarpantus extends Flowers
{
    public function makeSmell()
    {
        echo 'Пахнет ужасно!';
    }
}

class ManyFlowers
{
    public function smell(Flowers $flowers)
    {
        return $flowers->makeSmell();
    }
}
$rose = new Rose();
$sarpantus = new Sarpantus();

$v = new ManyFlowers();
$v->smell($rose);//$sarpantus