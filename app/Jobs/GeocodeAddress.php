<?php

namespace App\Jobs;

use App\Models\Location;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GeocodeAddress implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public Location $location;

    /**
     * Create a new job instance.
     */
    public function __construct($location)
    {
        $this->location = $location;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $location = $this->location->load('country');
        $address = sprintf('%s, %s %s', $location->street, $location->zipcode, $location->city);

        $results = app('geocoder')->geocode(sprintf('%s, %s', $address, $location->country->name))->get();

        if ($results->isNotEmpty()) {
            $result = $results->first();
            $coordinates = $result->getCoordinates();

            $location->latitude = $coordinates->getLatitude();
            $location->longitude = $coordinates->getLongitude();

            $location->save();
        }
    }
}
