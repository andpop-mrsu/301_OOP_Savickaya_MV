<?php



namespace Task02;

class Vector
{
    private float $x;
    private float $y;
    private float $z;

    public function __construct(float $x, float $y, float $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function add(Vector $vector): Vector
    {
        return new Vector(
            $this->x + $vector->x,
            $this->y + $vector->y,
            $this->z + $vector->z
        );
    }

    public function sub(Vector $vector): Vector
    {
        return new Vector(
            $this->x - $vector->x,
            $this->y - $vector->y,
            $this->z - $vector->z
        );
    }

    public function product(float $number): Vector
    {
        return new Vector(
            $this->x * $number,
            $this->y * $number,
            $this->z * $number
        );
    }

    public function scalarProduct(Vector $vector): float
    {
        return $this->x * $vector->x + $this->y * $vector->y + $this->z * $vector->z;
    }

    public function vectorProduct(Vector $vector): Vector
    {
        return new Vector(
            $this->y * $vector->z - $this->z * $vector->y,
            $this->z * $vector->x - $this->x * $vector->z,
            $this->x * $vector->y - $this->y * $vector->x
        );
    }

    public function __toString(): string
    {
        return "({$this->x}; {$this->y}; {$this->z})";
    }
}
