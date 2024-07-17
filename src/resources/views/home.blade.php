@extends('layouts.app')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('template/libs/jquery-sked-tape-master/jquery.skedTape.css') }}">
<style>

</style>
@endsection

@section('content')
@include('include.page-title-box')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-md-9 responsive-mobile-btn">
                        <button class="btn btn-success waves-effect waves-light" type="button"> <i class="fe-log-in"></i> Check IN </button>
                        <button class="btn btn-danger waves-effect waves-light" type="button"> <i class="fe-log-out"></i> Check OUT </button>
                        <button class="btn btn-warning waves-effect waves-light" type="button"> <i class="fe-briefcase"></i> Stay Overnight </button>
                        <button class="btn btn-dark waves-effect waves-light" type="button"> <i class="fe-grid"></i> #Room Grid </button>
                        <button class="btn btn-dark waves-effect waves-light" type="button"> <i class="fe-toggle-left"></i> Current Room Status </button>
                    </div>
                    <div class="col-md-3 text-right responsive-mobile-btn d-flex align-items-center">
                        <h4 class="m-auto"> Reception/GSA </h4>
                        <button class="btn btn-warning waves-effect waves-light ml-1" type="button"> <i class="fe-printer"></i> </button>
                        <button class="btn btn-secondary waves-effect waves-light ml-1" type="button"> <i class="fe-settings"></i> </button>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12 p-0">
                        <div class="mb-2" id="sked1" style="border: 1px solid #6c757d;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{ asset('template/libs/jquery-sked-tape-master/jquery.skedTape.js') }}"></script>
<script>
    // --------------------------- Data --------------------------------
    var locations = [{
            id: '1',
            name: '101 SDT',
            tzOffset: 7 * 60
        },
        {
            id: '2',
            name: '102 SDT',
            tzOffset: -10 * 60
        },
        {
            id: '3',
            name: '103 SPR',
            tzOffset: 4 * 60
        },
        {
            id: 'london',
            name: '104 SPR',
            tzOffset: -1 * 60
        },
        {
            id: '5',
            name: '105 B1',
            tzOffset: -2 * 60
        },
        {
            id: '6',
            name: '106 B2',
            tzOffset: -2 * 60
        },
    ];
    var events = [{
            name: 'Booking Mr. Odisan',
            location: 'london',
            start: today(4, 15),
            end: today(7, 30)
        },
        {
            name: 'Booking Mr. AA2 (ovelapping)',
            location: 'london',
            start: today(6, 30),
            end: today(9, 15)
        },
        {
            name: 'Booking Mr. BB3 (ovelapping)',
            location: 'london',
            start: today(9, 0),
            end: today(11, 30)
        },
        {
            name: 'Booking Mr. CC4 (ovelapping)',
            location: 'london',
            start: today(7, 45),
            end: today(8, 30)
        },
        {
            name: 'Booking Mr. RR5 (ovelapping)',
            location: 'london',
            start: today(8, 0),
            end: today(8, 15)
        },
        {
            name: 'Booking Mr. Saifah',
            location: '1',
            start: today(0, 0),
            end: today(1, 30)
        },
        {
            name: 'Booking Mr. Phaiwan',
            location: '5',
            start: today(0, 0),
            end: today(1, 30)
        },
        {
            name: 'Booking Mr. Odinsan',
            location: '1',
            start: today(10, 0),
            end: today(11, 30)
        },
        {
            name: 'Booking Mr. Soooooo',
            location: '2',
            start: yesterday(22, 0),
            end: today(1, 30),
            class: 'custom-class'
        },
        {
            name: 'Booking Mr. devin',
            location: '2',
            start: today(1, 45),
            end: today(2, 45),
            class: 'custom-class'
        },
        {
            name: 'And another one...',
            location: '2',
            start: today(3, 10),
            end: today(5, 30),
            class: 'custom-class'
        },
        {
            name: 'Disabled Booking Mr.',
            location: '3',
            start: yesterday(22, 15),
            end: yesterday(23, 30),
            disabled: true
        },
        {
            name: 'Booking Mr.',
            location: '3',
            start: yesterday(23, 45),
            end: today(1, 30)
        },
        {
            name: 'Booking Mr. that started early',
            location: '6',
            start: yesterday(21, 45),
            end: today(0, 45)
        },
        {
            name: 'Late Booking Mr.',
            location: '5',
            start: today(11, 15),
            end: today(13, 45)
        },
    ];
    // -------------------------- Helpers ------------------------------
    function today(hours, minutes) {
        var date = new Date();
        date.setHours(hours, minutes, 0, 0);
        return date;
    }

    function yesterday(hours, minutes) {
        var date = today(hours, minutes);
        date.setTime(date.getTime() - 24 * 60 * 60 * 1000);
        return date;
    }

    function tomorrow(hours, minutes) {
        var date = today(hours, minutes);
        date.setTime(date.getTime() + 24 * 60 * 60 * 1000);
        return date;
    }
    // --------------------------- Example 1 ---------------------------
    var $sked1 = $('#sked1').skedTape({
        caption: 'Room No.',
        start: yesterday(22, 0),
        end: today(12, 0),
        showEventTime: true,
        showEventDuration: true,
        scrollWithYWheel: true,
        locations: locations.slice(),
        events: events.slice(),
        maxTimeGapHi: 60 * 1000, // 1 minute
        minGapTimeBetween: 1 * 60 * 1000,
        snapToMins: 1,
        editMode: true,
        timeIndicatorSerifs: true,
        showIntermission: true,
        formatters: {
            date: function(date) {
                return $.fn.skedTape.format.date(date, 'l', '.');
            },
            duration: function(ms, opts) {
                return $.fn.skedTape.format.duration(ms, {
                    hrs: 'ч.',
                    min: 'мин.'
                });
            },
        },
        canAddIntoLocation: function(location, event) {
            return location.id !== 'london';
        },
        postRenderLocation: function($el, location, canAdd) {
            this.constructor.prototype.postRenderLocation($el, location, canAdd);
            $el.prepend('<i class="fas fa-thumbtack text-muted"/> ');
        }
    });
    $sked1.on('event:dragEnded.skedtape', function(e) {
        console.log(e.detail.event);
    });
    $sked1.on('event:click.skedtape', function(e) {
        $sked1.skedTape('removeEvent', e.detail.event.id);
    });
    $sked1.on('timeline:click.skedtape', function(e, api) {
        try {
            $sked1.skedTape('startAdding', {
                name: 'New Booking Mr.',
                duration: 60 * 60 * 1000
            });
        } catch (e) {
            if (e.name !== 'SkedTape.CollisionError') throw e;
            //alert('Already exists');
        }
    });
</script>
@endsection