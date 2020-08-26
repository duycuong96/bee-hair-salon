<div class="pick-date">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="col-md-6 date-item active">
            <a href="#homnay" aria-controls="homnay" role="tab" data-toggle="tab">
                <div class="name-day">Hôm nay</div>
                <span>Thứ {{ $now->dayOfWeek }}, {{ $now->day }}/{{ $now->month }}</span>
            </a>
        </li>
        <li role="presentation" class="col-md-6 date-item">
            <a href="#ngaymai" aria-controls="ngaymai" role="tab" data-toggle="tab">
                <div class="name-day">Ngày mai</div>
                <span>Thứ {{ $now->dayOfWeek + 1 }}, {{ $now->day + 1 }}/{{ $now->month + 1 }}</span>
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
                        <span class="not-free cl-white br-4">Còn chỗ</span>
                    </div>
                @endforeach

            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="ngaymai">
            <div class="form-group">
                @foreach ($dataTime as $row)
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="time_schedule_id_{{ $row->id }}_{{ $now->day + 1 }}" name="time_schedule_id" value="{{ $row->id }}">
                        <label for="time_schedule_id_{{ $row->id }}_{{ $now->day + 1 }}" class="custom-control-label">{{ $row->time_start}} - {{ $row->time_end}}
                        </label>
                        <span class="not-free cl-white br-4">Còn chỗ</span>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
