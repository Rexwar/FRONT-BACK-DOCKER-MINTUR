<?php

namespace Database\Seeders;

use App\Http\Controllers\Establishments\EstablishmentController;
use App\Models\Establishments\Establishment;
use App\Models\Establishments\Results;
use App\Models\Forms\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateResultsD12 extends Seeder
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
            $questiond12 = Question::where('code', 'd12')->first();
            $children = $questiond12->children()->pluck('id')->toArray();
            array_push($children, $questiond12->id);
            $results = Results::whereIn('resultable_id', $children)
                ->where('resultable_type', Question::class)
                ->with(['resultable.children'])->get();
            foreach ($results->where('resultable_id', $questiond12->id) as $result) {
                $ques = $result->resultable;
                if ($ques->code == 'd12' && $result->score == null) {
                    foreach ($result->resultable->children()->pluck('id') as $id) {
                        $answer = $results
                            ->where('resultable_id', $id)
                            ->first();
                        $answer->score = null;
                        $answer->save();
                    }
                }

            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            throw  new \Exception($exception->getMessage());
        }
    }
}
