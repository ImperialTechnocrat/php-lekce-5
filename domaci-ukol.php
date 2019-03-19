<?php
interface Obrazec3D
{
    public function Povrch();
    public function Objem();
}

class Kvadr implements Obrazec3D
{
    private $a, $b, $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function Povrch()
    {

        return 2*$this->a*$this->b + 2*$this->a*$this->c + 2*$this->b*$this->c;
	}
    public function Objem()
    {

        return $this->a*$this->b*$this->c;
	}
}
class Krychle implements Obrazec3D
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }
    public function Povrch()
    {

        return 6*$this->a**2;
    }
    public function Objem()
    {

        return $this->a**3;
    }
}
class Koule implements Obrazec3D
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function Povrch()
    {

        return 4 * 3.14 * $this->a ** 2;
    }

    public function Objem()
    {
        return 4 * 3.14 / 3 * $this->a ** 3;
    }
}
class Jehlan implements Obrazec3D
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function Povrch()
    {
        return $this->a ** 2 + 4 * ($this->a * $this->b / 2);
    }

    public function Objem()
    {
        return $this->a**2 * $this->b / 3;
    }
}
function vypis(Obrazec3D $utvar)
{
    echo '<h3>' . get_class($utvar) . '</h3>';
    echo 'Povrch: ' . $utvar->Povrch() . '<br>';
    echo 'Objem: ' . $utvar->Objem() . '<br><br>';
}

$krychle = new Krychle(5);
vypis($krychle);
$kvadr = new Kvadr(2, 3, 7);
vypis($kvadr);
$koule = new Koule(6);
vypis($koule);
$jehlan = new Jehlan(3, 4);
vypis($jehlan);