@extends('dashboard.layouts.master')
@section('title', 'Student Dashboard')
@section('sidebar')
    @include('dashboard.student.inc.sidebar')
@endsection

@section('content-header')
    <section class="content-header">
        <h1>
            Calender
        </h1>
        @include('dashboard.inc.breadcrumbs')
    </section>
@endsection

@section('content-main')
    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-md-3">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h4 class="box-title">Draggable Events</h4>
                    </div>
                    <div class="box-body">
                        <!-- the events -->
                        <div id="external-events">
                            <div class="external-event bg-green ui-draggable ui-draggable-handle" style="position: relative;">Lunch</div>
                            <div class="external-event bg-yellow ui-draggable ui-draggable-handle" style="position: relative;">Go home</div>
                            <div class="external-event bg-aqua ui-draggable ui-draggable-handle" style="position: relative;">Do homework</div>
                            <div class="external-event bg-light-blue ui-draggable ui-draggable-handle" style="position: relative;">Work on UI design</div>
                            <div class="external-event bg-red ui-draggable ui-draggable-handle" style="position: relative;">Sleep tight</div>
                            <div class="checkbox">
                                <label for="drop-remove">
                                    <input id="drop-remove" type="checkbox">
                                    remove after drop
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /. box -->
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Event</h3>
                    </div>
                    <div class="box-body">
                        <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                            <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                            <ul class="fc-color-picker" id="color-chooser">
                                <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                                <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                                <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                                <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                                <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                                <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                                <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                                <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                                <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                                <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                                <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                                <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                                <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                            </ul>
                        </div>
                        <!-- /btn-group -->
                        <div class="input-group">
                            <input id="new-event" class="form-control" placeholder="Event Title" type="text">

                            <div class="input-group-btn">
                                <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
                            </div>
                            <!-- /btn-group -->
                        </div>
                        <!-- /input-group -->
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-body no-padding">
                        <!-- THE CALENDAR -->
                        <div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"><h2>December 2017</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 374.65px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2017-11-26"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2017-11-27"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2017-11-28"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2017-11-29"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2017-11-30"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2017-12-01"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2017-12-02"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2017-11-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2017-11-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2017-11-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2017-11-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2017-11-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-fri fc-past" data-date="2017-12-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-sat fc-past" data-date="2017-12-02"><span class="fc-day-number">2</span></td></tr></thead><tbody><tr><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-not-end fc-draggable" style="background-color:#f39c12;border-color:#f39c12"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Long Event</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#f56954;border-color:#f56954"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">All Day Event</span></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2017-12-03"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2017-12-04"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2017-12-05"></td><td class="fc-day fc-widget-content fc-wed fc-today " data-date="2017-12-06"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2017-12-07"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2017-12-08"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2017-12-09"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2017-12-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-mon fc-past" data-date="2017-12-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-tue fc-past" data-date="2017-12-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-wed fc-today " data-date="2017-12-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-thu fc-future" data-date="2017-12-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-fri fc-future" data-date="2017-12-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-sat fc-future" data-date="2017-12-09"><span class="fc-day-number">9</span></td></tr></thead><tbody><tr><td class="fc-event-container" rowspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-not-start fc-end fc-draggable" style="background-color:#f39c12;border-color:#f39c12"><div class="fc-content"> <span class="fc-title">Long Event</span></div></a></td><td rowspan="2"></td><td rowspan="2"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#0073b7;border-color:#0073b7"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td><td class="fc-event-container" rowspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#00a65a;border-color:#00a65a"><div class="fc-content"><span class="fc-time">7p</span> <span class="fc-title">Birthday Party</span></div></a></td><td rowspan="2"></td><td rowspan="2"></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#00c0ef;border-color:#00c0ef"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2017-12-10"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2017-12-11"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2017-12-12"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2017-12-13"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2017-12-14"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2017-12-15"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2017-12-16"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2017-12-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-mon fc-future" data-date="2017-12-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-tue fc-future" data-date="2017-12-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-wed fc-future" data-date="2017-12-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-thu fc-future" data-date="2017-12-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-fri fc-future" data-date="2017-12-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-sat fc-future" data-date="2017-12-16"><span class="fc-day-number">16</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2017-12-17"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2017-12-18"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2017-12-19"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2017-12-20"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2017-12-21"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2017-12-22"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2017-12-23"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2017-12-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-mon fc-future" data-date="2017-12-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-tue fc-future" data-date="2017-12-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-wed fc-future" data-date="2017-12-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-thu fc-future" data-date="2017-12-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-fri fc-future" data-date="2017-12-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-sat fc-future" data-date="2017-12-23"><span class="fc-day-number">23</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style=""><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2017-12-24"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2017-12-25"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2017-12-26"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2017-12-27"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2017-12-28"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2017-12-29"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2017-12-30"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2017-12-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-mon fc-future" data-date="2017-12-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-tue fc-future" data-date="2017-12-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-wed fc-future" data-date="2017-12-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-thu fc-future" data-date="2017-12-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-fri fc-future" data-date="2017-12-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-sat fc-future" data-date="2017-12-30"><span class="fc-day-number">30</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" href="http://google.com/" style="background-color:#3c8dbc;border-color:#3c8dbc"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Click for Google</span></div></a></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 59px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2017-12-31"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2018-01-01"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2018-01-02"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2018-01-03"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2018-01-04"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2018-01-05"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2018-01-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2017-12-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2018-01-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2018-01-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2018-01-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2018-01-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2018-01-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2018-01-06"><span class="fc-day-number">6</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /. box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
@endsection

@section('sidebar-control')
    @include('dashboard.student.inc.sidebar-control')
@endsection
