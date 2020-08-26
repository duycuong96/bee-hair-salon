@foreach ($dataSalon as $row)
<div class="section over-hide z-bigger">
    <div class="section over-hide z-bigger">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <input class="checkbox-tools" type="radio" name="salon_id" id="salon-{{ $row->id }}" value="{{ $row->id }}">
                    <label class="for-checkbox-tools" for="salon-{{ $row->id }}">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="{!! url('storage/'.  $row->image) !!}"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $row->name }}</h5>
                                        <p class="card-text">{{ $row->address }}</p>
                                    </div>
                                </div>
                            </div>
                    </label>
                </div>

            </div>
        </div>
    </div>
</div>
@endforeach
