<?php
namespace App\Models;

use Illuminate\Support\Arr;

class jobs{
    public static function getAll(): array {
        return [
            [
                "id"=> 1,
                "position"=> "CEO",
                "salary"=> 10000,
            ],
            [
                "id"=> 2,
                "position"=> "Manager",
                "salary"=> 5000,
            ],
            [
                "id"=> 3,
                "position"=> "Developer",
                "salary"=> 4000
            ]
        ];
    }
    public static function getById(int $id): array {
        $user = Arr::first(jobs::getAll(), fn($user) => $user["id"] == $id);
        if(!$user) {
            abort(404);
        }
        else {
            return $user;
        }
    }
}