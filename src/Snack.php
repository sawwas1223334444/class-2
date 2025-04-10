<?php

namespace Serg\Repo;

class Snack  
{
    public function __construct(
        public string $name,
        public string $chocolate,
        public array $toppings
    ) {}

    public function prepare(): void
    {
        echo "1. Началось создание снека: {$this->name}\n";
        echo "2. Используем шоколад: {$this->chocolate}\n";
        echo "3. Добавляем начинки: " . implode(', ', $this->toppings) . "\n";
    }

    public function cut(): void
    {
        echo "4. Нарезаем {$this->name} вертикально на порционные кусочки\n\n";
    }
}
