<?php

class Vertebrates {
    public function __construct() {
        $this->printVertebrate();
    }

    protected function printVertebrate() {
        echo "Sono un animale Vertebrato\n";
    }
}

class WarmBlooded extends Vertebrates {
    public function __construct() {
        parent::__construct();
        $this->printWarmBlooded();
    }

    protected function printWarmBlooded() {
        echo "Sono un animale a Sangue caldo\n";
    }
}

class Fish extends Vertebrates {
    public function __construct() {
        parent::__construct();
        $this->printFish();
    }

    protected function printFish() {
        echo "Sono un animale a Sangue Freddo\n";
    }
}

$magikarp = new Fish();
?>
