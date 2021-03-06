<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\League;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->defineAs(League::class, 'league', function ($faker) {
    return [
        'name' => $faker->name,
        'maxSize' => 4,
        'commish_id' => 1, # association
        'invite_code' => Str::random(10),
        'draft_datetime' => '2020-01-01 00:00:00',
        'qbs' => 1,
        'rbs' => 1,
        'wrs' => 1,
        'tes' => 1,
        'flex' => 0,
        'ks' => 1,
        'def' => 1,
        'playoff_length' => 2,
        'bench' => 2,
        'teamQbs' => false,
        'teamKs' => false,
        'superflex' => 0,
        'waiver_status' => 0,
        'week' => 1,
        'draftpick_time' => 0, # zero time for testing auto-draft
        'draft_nextpick' => '2020-01-01 00:00:00',
        //'draft_status',
        //'league_type',
        //'waiver_day',
        //'draft_current_drafter' => TODO,
        //'rule1',
        //'rule2',
        //'rule3',
        //'rule4',
        //'rule5',
        //'rule6',
        //'rule7',
        //'rule8',
        //'rule9',
        //'rule10',
        //'rule11',
        //'rule12',
        //'rule13',
        //'rule14',
        //'rule15',
        //'rule16',
        //'rule17',
        //'rule18',
        //'rule19',
        //'rule20',
        //'rule21',
        //'rule22',
        //'rule23',
        //'rule24',
        //'rule25',
        //'rule26',
        //'rule27',
        //'rule28',
        //'rule29',
        //'rule30',
        //'rule31',
        //'rule32',
        //'rule33',
        //'rule34',
    ];
});
