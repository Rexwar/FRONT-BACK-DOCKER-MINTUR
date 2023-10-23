<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Helpers\Installer;
use App\Models\Forms\Question;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(Permissions::class);
       Installer::createUser('Administrador', 'daniel.arboleda@cgesplan.com.ec', 'cgesplan1234');
       $this->call(ComponentsTableSeeder::class);
       $this->call(SubTopicsTableSeeder::class);
       $this->call(EstablishmentTypesTableSeeder::class);
       $this->call(FormsTableSeeder::class);
       $this->call(FormsComponentsTableSeeder::class);
       $this->call(CatalogGeographicClassifierSeeder::class);
       $this->call(QuestionsTableSeeder::class);
       $this->call(QuestionSubTopicTableSeeder::class);
       $this->call(EstablishmentTypeQuestionsTableSeeder::class);
       $this->call(QuestionsDependentsTableSeeder::class);
        // $this->call(CompleteMissingResults::class);
//        $this->call(UpdateResultsD12::class);
        // $this->call(UpdateResults166::class);
    }
}
