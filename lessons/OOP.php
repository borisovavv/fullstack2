<?php

class Car {   // Имена классов с большой буквы
          
    // protected означает, что свойства могут использоваься только внутри данного класа

    protected $brand;   // У всех экземпляров класса Car есть свойство brand
    protected $model; 
    protected $year; 
    protected $mileage;
    private $noAccess;


    public function __construct($b, $m, $y, $mileage = 0) // $b, $m, $y, $mileage - данные, кооторые пришли от пользователя
    {
       $this->brand = $b;
       $this->model = $m;
       $this->year = $y;
       $this->mileage = $mileage;
       $this->noAccess = true;
    }

    public function drive() {   // Публичная функция, доступная всем
        echo "$this->noAccess $this->brand $this->model ($this->year, $this->mileage) driving<br>";
    }

    //Изменить пробег, если стоит доступ protected

    public function addMileage($mileage) {
        $error = false;
        if ($mileage > 0) {                 //Условие, чтобы не было возможности уменьшить пробег
            $this->mileage += $mileage;
        } else {
            $error = true;
        }
        return [                            //Возвращает массив, в котором находятся статус ошибки и пробег
            'error' => $error,
            'mileage' => $this->mileage,
        ];
    }

    private function showNoAccess() {
        echo $this->noAccess;
    }


}   

class ElectroCar extends Car {  //ElectroCar наследует Car

    public $electroCar;

    public function __construct ($b, $m, $y, $mileage = 0) { // конструктор и свойства родительские 
        $this->electroCar = true;
        parent::__construct($b, $m, $y, $mileage); // Обращение к родительскому конструктору, вызов родительского конструктора
    }

    public function drive() {   // Публичная функция, доступная всем
        echo "Electrocar $this->brand $this->model ($this->year, $this->mileage) driving<br>";
    }

    public function parentDrive () { //Функция вызова родительского метода
        parent::drive();
    }
}

//Создание экземпляра класса
$audi = new Car('Audi', 'Q5', 2021);

//Это тоже экземпляр класса
$vesta = new Car('Lada', 'Vesta', 2020, 15000);

// Получается 2 машины, каждая из которых является экземпляром класса Car. И каждая из них может вызвать метод drive


// Поменять значение свойства. Невозможно использовать, если стоит свойства имеют тип protected
// $vesta->year = 2016; 


//Вызов метода drive
$audi->drive(); 
$vesta->drive();


$currentAudiMileage = $audi->addMileage(2000);

echo $currentAudiMileage['mileage'] . '<br>';

$res = $vesta->addMileage(1000);

//Проверка
if ($res['error']) {  //Если $error = true
    echo 'Не удалось увеличить пробег <br>';
} else {
    echo "Пробег увеличен. Текущий пробег: {$res['mileage']}<br>";
}

$audi->drive(); 
$vesta->drive();


$tesla = new ElectroCar ('Tesla', 'Model S', 2021);
$tesla->drive();
$tesla->parentDrive(); // Вызов родительского метода

// $tesla->showNoAccess();