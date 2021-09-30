<?php
//1 Лампочка
class Lamp
{
    public $form;
    public $power;


    public function setForm (string $forma)
    {$this->form = $forma;}

    public function setPower (int $mosh)
    {$this->power = $mosh;}


    public function getForm ()
    {return $this->form;}

    public function getPower ()
    {return $this->power;}

    public function __construct($form, $power)
    {
        $this->form = $form;
        $this->power = $power;
    }
}

$myLamp = new Lamp('Грушевидная', 50);

$myLamp->setForm('Грушевидная');
$myLamp->setPower(50);

echo 'Форма лампочки - '.$myLamp->getForm().'<br>';
echo 'Мощность лампочки (Вт) - '.$myLamp->getPower().'<br>';


//2 Зарядка для телефона
/**
 * class charging_phone
{
    public $type;
    public $lenght;


    public function setType (string $tip)
    {$this->type = $tip;}

    public function setLenght (int $dlinakabelya)
    {$this->lenght = $dlinakabelya;}


    public function getType ()
    {return $this->type;}

    public function getLenght ()
    {return $this->lenght;}

    public function __construct($type, $lenght)
    {
        $this->type = $type;
        $this->lenght = $lenght;
    }
}

$mycharging_phone = new charging_phone('type C', 1);

$mycharging_phone->setType('type C');
$mycharging_phone->setLenght(50);

echo 'Тип разъёма - '.$mycharging_phone->getType().'<br>';
echo 'Длина кабеля (м) - '.$mycharging_phone->getLenght().'<br>';
*/
//3 Электрический чайник
/**
class electric_kettle
{
    public $size;
    public $firm;
    public $color;

    public function setSize (int $razm)
    {$this->size = $razm;}

    public function setFirm (string $firma)
    {$this->size = $firma;}

    public function setColor (string $cvet)
    {$this->size = $cvet;}

    public function getSize ()
    {return $this->size;}

    public function getFirm ()
    {return $this->firm;}

    public function getColor ()
    {return $this->color;}

    public function __construct($size, $firm, $color)
    {
        $this->size = $size;
        $this->firm = $firm;
        $this->color = $color;
    }
}

$myElectricKettle = new electric_kettle(1, 'Polaris', 'Красный');

$myElectricKettle->setSize(1);
$myElectricKettle->setFirm('Polaris');
$myElectricKettle->setColor('Красный');

echo 'Объём чайника (л) - '.$myElectricKettle->getSize().'<br>';
echo 'Название фирмы изготовителя - '.$myElectricKettle->getFirm().'<br>';
echo 'Цвет чайника - '.$myElectricKettle->getColor().'<br>';
 */
//4 Велосипед
/**
class bicycle
{
    public $material;
    public $category;
    public $firm;

    public function setMaterial (string $material)
    {$this->material = $material;}

    public function setCategory (string $category)
    {$this->category = $category;}

    public function setFirm (string $firma)
    {$this->firm = $firma;}

    public function getMaterial ()
    {return $this->material;}

    public function getCategory ()
    {return $this->category;}

    public function getFirm ()
    {return $this->firm;}

    public function __construct($material, $category, $firm)
    {
        $this->material = $material;
        $this->category = $category;
        $this->firm = $firm;
    }
}

$myBicycle = new bicycle('Сталь', 'Подростковый', 'GT');

$myBicycle->setMaterial('Сталь');
$myBicycle->setCategory('Подростковый');
$myBicycle->setFirm('GT');

echo 'Материал велосипеда - '.$myBicycle->getMaterial().'<br>';
echo 'Категория - '.$myBicycle->getCategory().'<br>';
echo 'Фирма изготовителя - '.$myBicycle->getFirm().'<br>';
 */
//5 Термометр
/**
class thermometer
{
    public $scale;

    public function setScale (string $shkala)
    {$this->scale = $shkala;}

    public function getScale ()
    {return $this->scale;}

    public function __construct($scale)
    {
        $this->scale = $scale;
    }
}

$myThermometer = new thermometer('C (Цельсия)');

$myThermometer->setScale('C (Цельсия)');

echo 'Тип шкалы измерения - '.$myThermometer->setScale().'<br>';
 */
