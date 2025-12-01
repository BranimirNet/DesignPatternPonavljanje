<?php

namespace AutoApp\Observers;

class ProductionNotifier implements ObserverInterface {
    public function __construct(private string $korisnik){}

    public function update(string $message)
    {
        echo "<br>Notifikacija za korisnika {$this->korisnik}: {$message}";
    }
    
        
}






?>