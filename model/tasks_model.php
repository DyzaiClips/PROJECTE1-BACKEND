<?php
//Array amb els To Do
$todoList = [
   [
      "id" => 0,
      "id_user" => 0,
      "name" => "Mario Bros 3",
      "hours_played" => "Hores Jugades: 10",
      "priority" => 0
   ],
   [
      "id" => 1,
      "id_user" => 0,
      "name" => "Second to do admin",
      "hours_played" => "He de fer una altra tasca 2 ",
      "priority" => 2
   ],
   [
      "id" => 2,
      "id_user" => 1,
      "name" => "First to do Raquel",
      "hours_played" => "He de fer una 1 ",
      "priority" => 2
   ],
   [
      "id" => 3,
      "id_user" => 1,
      "name" => "Second to do raquel",
      "hours_played" => "He de fer una altra tasca 2",
      "priority" => 1
   ],
   [
      "id" => 4,
      "id_user" => 0,
      "name" => "Second to do admin",
      "hours_played" => "He de fer una altra tasca 3 ",
      "priority" => 0
   ],
   [
      "id" => 5,
      "id_user" => 1,
      "name" => "First to do Raquel",
      "hours_played" => "He de fer una tasca 3 ",
      "priority" => 2
   ],
   [
      "id" => 6,
      "id_user" => 1,
      "name" => "Second to do raquel",
      "hours_played" => "He de fer una altra tasca 4",
      "priority" => 1
   ],
   [
      "id" => 7,
      "id_user" => 0,
      "name" => "First to do admin",
      "hours_played" => "He de fer una tasca ",
      "priority" => 0
   ],
   [
      "id" => 8,
      "id_user" => 0,
      "name" => "Second to do admin",
      "hours_played" => "He de fer una altra tasca dsafasd sdfafasd afdsafsa asdfa sd asdfasd f asdf ",
      "priority" => 2
   ],
   [
      "id" => 9,
      "id_user" => 1,
      "name" => "First to do Raquel",
      "hours_played" => "He de fer una tasca dfsad sadf sadf asd fsadf asd fsda ",
      "priority" => 1
   ],
   [
      "id" => 10,
      "id_user" => 1,
      "name" => "Second to do raquel",
      "hours_played" => "He de fer una altra tasca",
      "priority" => 0
   ],
   [
      "id" => 11,
      "id_user" => 0,
      "name" => "Second to do admin",
      "hours_played" => "He de fer una altra tasca dsafasd sdfafasd afdsafsa asdfa sd asdfasd f asdf ",
      "priority" => 2
   ],
   [
      "id" => 12,
      "id_user" => 1,
      "name" => "First to do Raquel",
      "hours_played" => "He de fer una tasca dfsad sadf sadf asd fsadf asd fsda ",
      "priority" => 1
   ],
   [
      "id" => 13,
      "id_user" => 1,
      "name" => "Second to do raquel",
      "hours_played" => "He de fer una altra tasca",
      "priority" => 0
   ]
];

$_SESSION['todoList'] = $todoList;