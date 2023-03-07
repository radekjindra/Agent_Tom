<?php
class Vek
{
private $nyni;
private $narozeni;
private $interval;
private $narozeniny;

public function __construct(string $narozeni)
{
    $this->narozeni = $narozeni;
}

public function __toString(): string
{
    $nyni = new DateTime();
    $narozeniny = new DateTime($this->narozeni);
    $interval = $narozeniny->diff($nyni);
    return $interval->format('Věk: %y let');
}

}