<?php

namespace Database\Seeders;

use App\Models\Candidato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CandidatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $linguagens = [
            ["name" => "Assembly"], ["name" => "Bash"], ["name" => "C"], ["name" => "C++"],
            ["name" => "C#"], ["name" => "Crystal"], ["name" => "CSS"], ["name" => "Dart"],
            ["name" => "Elixir"], ["name" => "Go"], ["name" => "HTML"], ["name" => "Java"],
            ["name" => "Javascript"], ["name" => "Markdown"], ["name" => "Making Languages"], ["name" => "OCaml"],
            ["name" => "PHP"], ["name" => "Python"], ["name" => "R"], ["name" => "Rust"],
            ["name" => "Ruby"], ["name" => "Swift"], ["name" => "Typescript"], ["name" => "Haskell"],
            ["name" => "Kotlin"], ["name" => "NextJS"], ["name" => "Vue"], ["name" => "Flutter"],
            ["name" => "Django"], ["name" => "Spring"], ["name" => "React"], ["name" => "Express"],
            ["name" => "Rails"], ["name" => "Laravel"], ["name" => "Spring"], ["name" => "Angular"],
            ["name" => "Ember"], ["name" => "ASP"], ["name" => "Asp.Net"], ["name" => "Git"],
            ["name" => "RegEx"], ["name" => "Vim"], ["name" => "Window Manager"], ["name" => "Windows Subsystem for Linux"],
            ["name" => "Linux"], ["name" => "Windows Server"], ["name" => "UI"], ["name" => "UX"],
            ["name" => "MySQL"], ["name" => "MongoDB"], ["name" => "PostgreSQL"], ["name" => "SQL"],
            ["name" => "SQL Server"], ["name" => "SQLite"], ["name" => "POO"], ["name" => "QA"],
            ["name" => "Typescript"], ["name" => "Meteor"], ["name" => "Elixir"], ["name" => "JQuery"],
            ["name" => "Node"], ["name" => "MVC"], ["name" => "Metodologia Ágil"], ["name" => "Symfony"],
            ["name" => "Gatsby"], ["name" => "Flask"], ["name" => "Elixir"], ["name" => "Docker"],
            ["name" => "Kubernetes"], ["name" => "AWS"], ["name" => "Azure"], ["name" => "Cloud"],
            ["name" => "WordPress"], ["name" => "Arduino"], ["name" => "DynamoDB"], ["name" => "Redis "],
            ["name" => "Elasticsearch"], ["name" => "Firebase"], ["name" => "MariaDB"], ["name" => "Oracle"],
            ["name" => "Cassandra"], ["name" => "Couchbase"], ["name" => "Ionic"], ["name" => "Perl"]
        ];

        for ($i=0; $i < 1000; $i++) {
            $aux = [];
            for ($j=0; $j < rand(6,15); $j++) {
                array_unshift($aux, $linguagens[rand(0, ( count($linguagens) - 1 ))]['name'] );
            }
            array_unique($aux);
            Candidato::create([
                'nome' => "Candidato ".$i+1,
                'habilidades' => $aux
            ]);
        }
    }
}
