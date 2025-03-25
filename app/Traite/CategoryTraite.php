<?php

namespace App\Traite;

trait CategoryTraite
{
    public function categorys(): array
    {
        $categories = [
            'boxes' => 'Boxes',
            'equipment' => 'Equipment',
            'mattress-covers' => 'Mattress Covers',
            'tv-art-boxes' => 'TV & Art Boxes',
            'moving-kits' => 'Moving Kits',
            'packing' => 'Packing',
            'wrapping' => 'Wrapping'
        ];

        return $categories;
    }   
}
