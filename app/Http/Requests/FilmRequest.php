<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return match($this->method()) {
            'POST' => [
                'title' => 'required|min:2|max:100|unique:films',
                'category_id' => 'required|exists:categories,id',
                'synopsis' => 'required|min:5|max:5000',
                "year" => "required|integer|min:1940|max:2023",
                'director' => 'required|min:2|max:40',
                'rented' => 'required|in:0,1',
                'poster' => 'required|mimes:jpeg,png,jpg,gif,svg|max:1024', 
            ],
            'PUT' => [
                'title' => 'required',$this->route('film')->id,
                'category_id' => 'required|exists:categories,id',
                'synopsis' => 'required|min:5|max:5000',
                "year" => "required|integer|min:1940|max:2023",
                'director' => 'required|min:2|max:40',
                'rented' => 'required|in:0,1',
                'poster' => 'required|mimes:jpeg,png,jpg,gif,svg|max:1024', 
            ],
        };
        }
    }