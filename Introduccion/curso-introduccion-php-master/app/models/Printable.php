<?php
namespace App\models;

Interface Printable {

    public function getPrintable();
}

// Las interfaces de objetos permiten crear código con el cual especificamos qué métodos deben ser implementados por una clase.
//  Se definen mediante el uso de la palabra clave interface,
// de la misma forma que con las clases estándar,
// pero sin métodos que tengan su contenido definido. Todos los métodos declarados en una interfaz deben ser públicos.

// Para implementar una interfaz, se utiliza el operador implements.
// Todos los métodos en una interfaz deben ser implementados dentro de la clase o dará error fatal. Las clases pueden implementar más de una interfaz.

// Las interaces se pueden extender al igual que las clases utilizando el operador extends.
//  La clase que implemente una interfaz debe utilizar exactamente las mismas estructuras de métodos que fueron definidos en la interfaz o dará error fatal.