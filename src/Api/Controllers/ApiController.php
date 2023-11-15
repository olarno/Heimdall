<?php

namespace Api\Controllers;

class ApiController {
    public function GetResult(): string {
        $dieuxNordiques = [
            [
                "nom" => "Odin",
                "attributs" => ["Sagesse", "Magie", "Guerre"]
            ],
            [
                "nom" => "Thor",
                "attributs" => ["Tonnerre", "Force", "Protection"]
            ],
            [
                "nom" => "Freya",
                "attributs" => ["Amour", "Fertilité", "Magie"]
            ],
            [
                "nom" => "Loki",
                "attributs" => ["Malice", "Ruse", "Transformation"]
            ],
            [
                "nom" => "Frigg",
                "attributs" => ["Maternité", "Sagesse", "Destin"]
            ]
        ];
        
        // Convertir en JSON si nécessaire
        $jsonDieuxNordiques = json_encode(["dieux" => $dieuxNordiques], JSON_PRETTY_PRINT);
        
        return $jsonDieuxNordiques;
    }
}