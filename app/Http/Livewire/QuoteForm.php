<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Daynnnnn\StatamicDatabase\Entries\Entry;
use Livewire\Component;

class QuoteForm extends Component
{


    public $title;
    public $name;
    public $email;
    public $phone;
    public $pref_start_date;
    public $pref_end_date;
    public $no_of_adults;
    public $no_of_childrens;
    public $message;

    public function render()
    {
        return view('livewire.quote-form');
    }



    public function quote()
    {
  


        // dd("hello");

        $entry = Entry::make()
            ->collection('quotes')
            ->slug(str_slug($this->title, "-"))
            ->date(Carbon::now())
            ->data([
                'title' => $this->title,
                'name' => $this->name,
                'email' => $this->email,
                // 'phone' => $this->phone,
                // 'pref_start_date' => $this->pref_start_date,
                // 'pref_end_date' => $this->pref_end_date,
                // 'no_of_adults' => $this->no_of_adults,
                // 'no_of_childrens' => $this->no_of_childrens,
                'message' => $this->message,
                // 'template' => 'bookings/show'
            ]);
            
        $entry->save();

        // Booking Submited
        // Mail::to('safaris@tomodachisafaris.com')->send(new InquirySubmited($entry));

        return redirect('/thank-you');
    }
}
