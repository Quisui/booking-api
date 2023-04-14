<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Gate::allows('bookings-manage');
    }

    public function rules(): array
    {
        return [
            'rating' => 'integer|between:1,10',
            'review_comment' => 'min:20',
        ];
    }
}
