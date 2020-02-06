<?php
namespace loteria\Contract;

interface GameInterface
{
    public function random();
    public function create($qtd) : array;
}