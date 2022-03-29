<?php

namespace App\Models;


class Pelayanan
{
    private static $layanan = [
        [
            "title" => "Pelayanan Publik",
            "kode" => 1,
            "keterangan" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere nulla minima deleniti, beatae porro ad nam provident sit nihil alias tempore soluta distinctio sapiente, obcaecati consectetur ullam cum et consequatur?"
        ],
        [
            "title" => "Pelayanan Publik",
            "kode" => 2,
            "keterangan" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere nulla minima deleniti, beatae porro ad nam provident sit nihil alias tempore soluta distinctio sapiente, obcaecati consectetur ullam cum et consequatur?"
        ]
    ];

    public static function all()
    {
        return self::$layanan;
    }
}
