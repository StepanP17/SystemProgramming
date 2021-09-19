<?php
// 1 Стиральная машина
class washing_machine
{
    public $door;               //дверь
    public $power_cord;         //шнур питания
    public $drum;               //барабан
    public $start_button;       //кнопка "старт"
    public $stop_button;        //кнопка "стоп"
}
$myWashingMachine = new washing_machine(); //создаём конкретный объект

$myWashingMachine->door = false;            //дверца закрыта
$myWashingMachine->power_cord = false;      //шнур питания не воткнут
$myWashingMachine->start_button = false;    //кнопка "старт" не нажата
$myWashingMachine->stop_button = false;     //кнопка "стоп" не нажата

public function TurnOnOff ()
{
    //код включения стиральной машинки "старт" ; код выключения стиральной машинки "стоп"
}
public function OpenCloseDoor ()
{
    //код открытия; закрытия двери
}
public function PowerCordOnOff ()
{
    //включение в розетку шнур питания; выключение
}
public function PutClothesInDrum ()
{
    //положить вещи в барабан
}

$myWashingMachine->PowerCordOnOff ();
$myWashingMachine->OpenCloseDoor ();
$myWashingMachine->PutClothesInDrum ();
$myWashingMachine->OpenCloseDoor ();
$myWashingMachine->TurnOnOff ();


public function __construct1($door, $power_cord, $drum, $start_button, $stop_button)
{
    $this->door = $door;
    $this->power_cord = $power_cord;
    $this->drum = $drum;
    $this->start_button = $start_button;
    $this->stop_button = $stop_button;
}
===============================================================================
// 2 Велосипед (Это вместо компьютерной игры)
class bicycle
{
    public $Pedal;      //педали
    public $purpose;    //цепь
    public $frame;      //рама
    public $seat;       //сидушка
}
$myBicycle = new bicycle(); //создаём конкретный объект
$myBicycle->Pedal = false;  //педали не крутятся


public function sit_on()
{
    //сесть на сидение
}
public function Push_back()
{
    //код Оттолкнуться от земли.
}
public function twist()
{
    //крутить педали
}
public function Stop_spinning ()
{
    //кодПерестать крутить педали
}

$myBicycle->sit_on();
$myBicycle->Push_back();
$myBicycle->twist();
$myBicycle->Stop_spinning ();

public function __construct2($Pedal, $purpose, $frame, $seat)
{
$this->Pedal = $Pedal;
$this->purpose = $purpose;
$this->frame = $frame;
$this->seat = $seat;
}
===============================================================================
// 3 Сплит-система
class split_system
{
    public $Temperature_controller;     //регулятор температуры
    public $Start_button;               //кнопка "старт"
    public $Stop_button;                //кнопка "стоп"
    public $Power_cord;                 //шнур питания
}

$mySplitSystem = new split_system(); //создаём конкретный объект

$myWashingMachine->Power_cord = false;      //шнур питания не воткнут
$myWashingMachine->Start_button = false;    //кнопка "старт" не нажата
$myWashingMachine->Stop_button = false;     //кнопка "стоп" не нажата

public function PowerCordOnOff1 ()
{
    //код включение в розетку шнур питания; выключение
}
public function TempControl ()
{
    //код настройка температуры
}
public function TurnOnOff1 ()
{
    //код включения стиральной машинки "старт" ; код выключения стиральной машинки "стоп"
}

$myWashingMachine->PowerCordOnOff1();
$myWashingMachine->TempControl();
$myWashingMachine->TurnOnOff1();

public function __construct3($temperature_controller, $start_button, $stop_button, $power_cord)
{
   $this->temperature_controller = $temperature_controller;
   $this->start_button = $start_button;
   $this->stop_button = $stop_button;
   $this->power_cord = $power_cord;
}
===============================================================================
// 4 Лампочка
class lamp
{
    public $Power;      //мощность
    public $Form;       //форма
    public $Switch;     //включатель
    //я не знаю, какие есть атрибуты у лампочки. Всё, что находится внутри лампочки, оно же не используется в жизненном цикле, поэтому я не использую это в атрибутах.
}

$myLamp = new lamp (); //создаём конкретный объект

$myLamp->Power = '50Вт';        //Мощность лампочки 50Вт
$myLamp->Form = 'Спиральная';   //Форма лампочки - спиральная
$myLamp->Switch = false;        //Включатель выключен

public function TurnOffOn ()
{
    //код нажатие включателя
}
public function lampOn ()
{
    //код лампочка включена
}
public function lampOff ()
{
    //код лампочка выключена
}

$myLamp->lampOff();
$myLamp->TurnOffOn();
$myLamp->lampOn();
$myLamp->TurnOffOn();
$myLamp->lampOff();

public function __construct4($Power, $Form, $Switch)
{
    $this->Power = $Power;
    $this->Form = $Form;
    $this->Switch = $Switch;
}
===============================================================================
// 5 Грузоподъёмный кран
class lifting_crane
{
    public $door;       //дверь
    public $buttons;    //кнопки
    public $hook;       //крюк
    public $levers;     //рычаги
}

$myLiftingCrane = new lifting_crane(); //создаём конкретный объект

$myLiftingCrane->door = false;      //дверь закрыта

public function OpenCloseDoor1 ()
{
    //код открытия; закрытия двери
}
public function StartStopEngine ()
{
    //код завести двигатель; выключить двигатель
}
public function SwitchingLevers ()
{
    //код переключение рычагов
}
public function ClickButtons ()
{
    //код нажатие кнопок
}
public function GrabTheLoad ()
{
    //код захватить груз крюком; отпустить груз
}
public function LiftTheLoad ()
{
    //код поднять груз крюком; опустить груз
}
public function TransferLoad ()
{
    //код переносить груз
}

$myLiftingCrane->OpenCloseDoor1();
$myLiftingCrane->StartStopEngine();
$myLiftingCrane->SwitchingLevers();
$myLiftingCrane->ClickButtons();
$myLiftingCrane->GrabTheLoad();
$myLiftingCrane->TransferLoad();
$myLiftingCrane->LiftTheLoad();
$myLiftingCrane->SwitchingLevers();
$myLiftingCrane->StartStopEngine();

public function __construct5($door, $buttons, $hook, $levers)
{
    $this->door = $door;
    $this->buttons = $buttons;
    $this->hook = $hook;
    $this->levers = $levers;
}
===============================================================================
// 6 Зарядка для телефона
class charging_phone
{
    public $wire;           //провод
    public $power_supply;   //блок питания
    public $plug;           //штекер
}
$myChargingPhone = new charging_phone(); //создаём конкретный объект

$myChargingPhone->power_supply = false; //блок питания не вставлен в розетку

public function WireToPowerSupply ()
{
    //воткнуть провод в блок питания
}
public function PowerSupplyToSocket ()
{
    //вставить блок питания в розетку; вытащить
}
public function Plug ()
{
    //вставить штекер в разъём для зарядки телефона
}

$myChargingPhone->WireToPowerSupply ();
$myChargingPhone->PowerSupplyToSocket ();
$myChargingPhone->Plug ();

public function __construct6($wire, $power_supply, $plug)
{
    $this->wire = $wire;
    $this->power_supply = $power_supply;
    $this->plug = $plug;
}
===============================================================================
// 7 Термометр
class thermometer
{
    public $scale;      //шкала
}
$myThermometer = new thermometer(); //создаём конкретный объект

$myThermometer->scale = 'C (Цельсия)';      //шкала измерения - градусы Цельсия

public function TakeTherm()
{
    //взятие термометра и помещение его под подмышку
}
public function PutTherm()
{
    //вытащить термометр и положить его
}
public function MeasureTheTemperature()
{
    //процесс измерения температуры, и показ результата измерения
}

$myThermometer->TakeTherm();
$myThermometer->MeasureTheTemperature();
$myThermometer->PutTherm();

public function __construct7($scale)
{
    $this->scale = $scale;
}
===============================================================================
// 8 Электрический чайник
class electric_kettle
{
    public $cap;          //крышка
    public $power_cord;   //шнур питания
    public $button;       //кнопка включения
}
$myElectricKettle = new electric_kettle();  //создаём конкретный объект

$myElectricKettle->cap = false;         //крышка чайника закрыта
$myElectricKettle->power_cord = false;  //шнур питания не включен в розетку
$myElectricKettle->button = false;      //кнопка не нажата

public function OpenCloseTheKettleLid ()
{
    //открыть; закрыть крышку чайника
}
public function HeatTheWater ()
{
    //нагревание воды
}
public function PourWater ()
{
    //Залить; вылить воду
}

$myElectricKettle->OpenCloseTheKettleLid ();
$myElectricKettle->PourWater ();
$myElectricKettle->OpenCloseTheKettleLid ();
$myElectricKettle->HeatTheWater ();
$myElectricKettle->OpenCloseTheKettleLid ();
$myElectricKettle->PourWater ();

public function __construct8($cap, $power_cord, $button)
{
    $this->cap = $cap;
    $this->power_cord = $power_cord;
    $this->button = $button;
}
===============================================================================
// 9 Освежитель воздуха
class Air_Freshener
{
    public $button;     //кнопка
}
$myAirFreshener = new Air_Freshener();  //создаём конкретный объект

$myAirFreshener->button = false; //кнопка не нажата

public function HoldDownTheButton ()
{
    //зажать; отпустить кнопку
}
public function ReleaseTheSmell ()
{
    //запах выпущен
}

$myAirFreshener->HoldDownTheButton();
$myAirFreshener->ReleaseTheSmell ();
$myAirFreshener->HoldDownTheButton ();

public function __construct9($button)
{
    $this->button = $button;
}
===============================================================================
// 10 Микроволновка
class Microwave
{
    public $door;           //дверца
    public $timer;          //таймер
    public $power_control;  //регулятор мощности
    public $button_start;   //кнопка "старт"
    public $power_cord;     //шнур питания
}
$myMicrowave = new Microwave(); //создаём конкретный объект

$myMicrowave->door = false;         //дверца закрыта
$myMicrowave->button_start = false;       //кнопка не нажата
$myMicrowave->power_cord = false;   // шнур питания не воткнут

public function PowerCordOnOff2 ()
{
    //включение в розетку шнур питания; выключение
}
public function Controller()
{
    //отрегулировать мощность, и выбрать время нагрева
}
public function OpenCloseDoor2 ()
{
    //код открытия; закрытия двери
}
public function TurnOn ()
{
    //код включения микроволновки кнопкой "старт"
}

$myMicrowave->PowerCordOnOff2 ();
$myMicrowave->OpenCloseDoor2 ();
$myMicrowave->Controller();
$myMicrowave->TurnOn ();
$myMicrowave->OpenCloseDoor2 ();

public function __construct10($door, $timer, $power_control, $button_start, $power_cord)
{
    $this->door = $door;
    $this->timer = $timer;
    $this->power_control = $power_control;
    $this->button_start = $button_start;
    $this->power_cord = $power_cord;
}
?>