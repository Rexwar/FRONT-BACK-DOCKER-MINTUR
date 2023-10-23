<?php

namespace Database\Seeders;

use App\Http\Controllers\Establishments\EstablishmentController;
use App\Models\Establishments\Establishment;
use App\Models\Establishments\Results;
use App\Models\Forms\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateResults166 extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        //
        try {
            DB::beginTransaction();
            $results = Results::where('resultable_id', '166')->update([
                'score'=>null
            ]);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            throw  new \Exception($exception->getMessage());
        }
    }
}
