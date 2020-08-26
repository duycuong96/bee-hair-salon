<div class="pick-date">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="col-md-6 date-item active">
            <a href="#homnay" aria-controls="homnay" role="tab" data-toggle="tab" class="hom-nay">
                <input type="radio" value="1" name="day" id="hom-nay" {{ $radio == 1 ? "checked" : '' }}>
                <label for="hom-nay">Hôm nay <span>Thứ {{ $now->dayOfWeek }}, {{ $now->day }}/{{ $now->month }}</span></label>
                {{-- <div class="name-day">Hôm nay</div> --}}

            </a>
        </li>
        <li role="presentation" class="col-md-6 date-item">
            <a href="#ngaymai" aria-controls="ngaymai" role="tab" data-toggle="tab" class="ngay-mai">
                <input type="radio" value="2" name="day" id="ngay-mai">
                <label for="ngay-mai">Ngày mai <span>Thứ {{ $now->dayOfWeek + 1 }}, {{ $now->day + 1 }}/{{ $now->month + 1 }}</span></label>
                {{-- <div class="name-day">Ngày mai</div> --}}

            </a>
        </li>
    </ul>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="homnay">
            <div class="form-group">
                @foreach ($dataTime as $row)
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="time_schedule_id_{{ $row->id }}" name="time_schedule_id" value="{{ $row->id }}">
                        <label for="time_schedule_id_{{ $row->id }}" class="custom-control-label">{{ $row->time_start}} - {{ $row->time_end}}
                        </label>
                        <span class="bg-success not-free cl-white br-4">Còn chỗ</span>
                    </div>
                @endforeach

            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="ngaymai">
            <div class="form-group">
                @foreach ($dataTimeTomorrow as $row)
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="time_schedule_id_{{ $row->id }}_{{ $now->day + 1 }}" name="time_schedule_id" value="{{ $row->id }}">
                        <label for="time_schedule_id_{{ $row->id }}_{{ $now->day + 1 }}" class="custom-control-label">{{ $row->time_start}} - {{ $row->time_end}}
                        </label>
                        <span class="bg-success not-free cl-white br-4">Còn chỗ</span>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
