<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class Product extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'product_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'name', 'code', 'price'
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'name'  => '',
        'code'  => '',
        'price' => 0.0
    ];

    public static $createRules = [
        'name'       => ['required', 'max:255'],
        'code'       => ['required'],
        'price'      => ['required']
    ];

    public static $updateRules = [
        'product_id' => ['unique:posts', 'int'],
        'name'       => ['required', 'max:255'],
        'code'       => ['required'],
        'price'      => ['required']
    ];



    public function validate($rules=[], $validationRules = []) {
        if (empty($rules)) {
            $rules = $this->toArray();
        }

        if (empty($validationRules)) {
            $validationRules = self::$updateRules;
        }

        $validator = Validator::make($rules, $validationRules);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }

    public function validateAndFill($inputArray, $validationRules) {
        // must validate input before injecting into model
        $this->validate($inputArray, $validationRules);
        $this->fill($inputArray);
    }
}
