<?php
namespace App\Domains\Citizen\Validators;
use Api\Foundation\Validator;
/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class CitizenCreationValidator extends Validator
{
    protected $rules = [
        'name' => 'required',
        'email' => 'required|unique',
        'password' => 'required|min=4|max=8',
    ];
}