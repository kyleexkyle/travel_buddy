<?php

namespace App\Http\Web\Controllers\Booking;

use App\Domain\Booking\Actions\CreateBookingAction;
use App\Domain\Booking\Actions\DeleteBookingAction;
use App\Domain\Booking\Actions\UpdateBookingAction;
use App\Domain\Booking\DataTransferObjects\BookingData;
use App\Domain\Booking\Models\Booking;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class BookingController extends Controller
{
    public function store(BookingData $data, CreateBookingAction $action): RedirectResponse
    {
        $action::execute($data, request()->user());

        return redirect()->back()->with('success', 'Booking has been created');
    }

    public function update(BookingData $data, Booking $booking, UpdateBookingAction $action): RedirectResponse
    {
        $action::execute($data, $booking);

        return redirect()->back()->with('success', 'Booking has been updated');
    }

    public function destroy(Booking $booking, DeleteBookingAction $action): RedirectResponse
    {
        $action::execute($booking);

        return redirect()->back()->with('success', 'Booking has been deleted');
    }
}
