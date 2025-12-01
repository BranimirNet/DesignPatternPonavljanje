<?php

namespace AutoApp\Models;

use Iterator;

class CarCollection implements Iterator {

    private array $cars = [];
    private int $position = 0;

    public function add(Car $car): void {
        $this->cars[] = $car;
    }

    public function current(): Car {
        return $this->cars[$this->position];
    }

    public function key(): int {
        return $this->position;
    }

    public function next(): void {
        $this->position++;
    }

    public function rewind(): void {
        $this->position = 0;
    }

    public function valid(): bool {
        return isset($this->cars[$this->position]);
    }

    public function count(): int {
        return count($this->cars);
    }

    public function last(): ?Car {
    if (empty($this->cars)) {
        return null;
    }

    return $this->cars[count($this->cars) - 1];
}
}








?>