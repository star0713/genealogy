<?php

namespace App\Tables\Builders;

use App\Models\DnaMatching;
use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Tables\Contracts\Table;

class DnaMatchingTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/dnamatching.json';

    public function query(): Builder
    {
        $role = \Auth::user()->role_id;
        $userId = \Auth::user()->id;

        if (in_array($role, [1, 2])) {
            return DnaMatching::selectRaw('
            dna_matchings.id, dna_matchings.file1, dna_matchings.file2, dna_matchings.image, dna_matchings.created_at, dna_matchings.match_id, dna_matchings.total_shared_cm, dna_matchings.match_name, dna_matchings.largest_cm_segment');
        }

        return DnaMatching::selectRaw(' dna_matchings.id, dna_matchings.file1,
            dna_matchings.file2, dna_matchings.image, dna_matchings.created_at, dna_matchings.largest_cm_segment, dna_matchings.match_name, dna_matchings.total_shared_cm, dna_matchings.match_id')->where('dna_matchings.user_id', $userId)->orderBy('total_shared_cm', 'desc');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
