<?php

namespace Serg\Repo;

class ChocolateFactory  
{
    public function orderSnack(string $type): void
    {
        $snack = $this->createSnack($type);

        if ($snack) {
            $snack->prepare();
            $snack->cut();
        }
    }

    protected function createSnack(string $type): ?Snack
    {
        $menu = [
            'шоколадка' => ['Шоколадная плитка', 'молочный', []],
            'чокопай' => ['Чокопай', 'белый', ['вафля', 'крем']],
            'печенье' => ['Шоколадное печенье', 'тёмный', ['крошка']]
        ];

        if (isset($menu[$type])) {
            return new Snack(...$menu[$type]);
        }

        echo "(!) Такого снека '{$type}' нет в меню\n";
        return null;
    }
}
