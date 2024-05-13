<?php
class Fare {
    public $age;
    public $distance;
    private $totalFare; 

    public function setValues($age, $distance) {
        $this->age = $age;
        $this->distance = $distance;
    }

    public function calculateFare() {
        $baseFare = 8;
        $succeedingFare = max(0, $this->distance - 4);
        $this->totalFare = $baseFare + $succeedingFare; 

        if ($this->age > 60) {
            $this->totalFare *= 0.8;
        }
        return $this ->totalFare;
    }

    public function getAge() {
        return $this->age;
    }

    public function getDistance() {
        return $this->distance;
    }

    public function getTotalFare() {
        return $this->totalFare; 
    }
}
?>
