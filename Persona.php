<!-- Parte 1:
Creare un nuovo oggetto Persona con un metodo setAge() che cambia il valore della proprieta' age della classe Persona, che accetti esclusivamente un numero intero. Se il numero inserito come argomento non dovesse essere un numero intero: allora lanciare un'eccezione! -->

<?php
class Persona
{
    public $name;
    public $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function setAge($age)
    {
        if (!is_int($age)) {
            throw new Exception('l\'eta deve essere un intero');
        }
        return $age;
    }
}


try {
    $persona = new Persona('Anna', '15');
    echo 'Name' . $persona->name . 'Eta' . $persona->age;
} catch (Exception $e) {
    echo 'Errore' . $e->setAge();
}
?>