<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class isValidWord implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $value = str_split($value);
        foreach ($value as $symbol) {
            if (is_numeric($symbol) or $symbol === " ") {
                $fail('Incorrect introduction');
            }
        }
    }
}
