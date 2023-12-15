<div wire:ignore>
    <div x-data="{
        calendar: null,
        events: @js($this->events),
        init() {
            this.calendar = new FullCalendar.Calendar(this.$refs.calendar, {
                events: (info, success) => success(this.events),
                slotDuration: @js($this->slotDuration()),
                nowIndicator: @js($this->nowIndicator()),
                displayEventEnd: @js($this->displayEventEnd()),
                displayEventTime: @js($this->displayEventTime()),
                locale: @js($this->locale()),
                initialDate: @js($this->initialDate()),
                initialView: @js($this->initialView()),
                firstDay: @js($this->firstDay()),
                showNonCurrentDates: @js($this->showNonCurrentDates()),
                fixedWeekCount: @js($this->fixedWeekCount()),
                weekends: @js($this->weekends()),
                slotMinTime: @js($this->slotMinTime()),
                slotMaxTime: @js($this->slotMaxTime()),
                businessHours: @js($this->businessHours()),
                headerToolbar: @js($this->headerToolbar()),
                footerToolbar: @js($this->footerToolbar()),
                eventClick: function(info) {
                    @this.eventClick(info.event);
                },
                selectable: false,
                unselectAuto: true,
                editable: false
            })

            this.calendar.render()
        }
    }"
    >
        <div id="calendar-container">
            <div x-ref="calendar" class="!z-0 m-6"></div>
        </div>

    </div>

</div>
