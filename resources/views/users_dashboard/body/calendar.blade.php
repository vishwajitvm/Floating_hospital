@extends('users_dashboard.user_master')
@section('user')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  <!--Jqery ajax cdn -->
@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
@endphp
{{-- @dd($route) --}}


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Calendar</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Extra</li>
								<li class="breadcrumb-item active" aria-current="page">Calendar</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <div class="row">
			
			<div class="col-12">
				<div class="box">
					<div class="box-body">
						<div class="row">
							<div class="col-xl-9 col-lg-8 col-12">	
								<div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left" aria-label="prev"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right" aria-label="next"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"><h2>December 2021</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 802px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 133px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2021-11-28"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2021-11-29"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2021-11-30"></td><td class="fc-day fc-widget-content fc-wed fc-today " data-date="2021-12-01"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-12-02"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-12-03"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-12-04"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2021-11-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2021-11-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2021-11-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-wed fc-today " data-date="2021-12-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-thu fc-future" data-date="2021-12-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-fri fc-future" data-date="2021-12-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-sat fc-future" data-date="2021-12-04"><span class="fc-day-number">4</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-danger fc-draggable"><div class="fc-content"><span class="fc-time">7:37p</span> <span class="fc-title">This is today check date</span></div></a></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 133px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-12-05"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-12-06"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2021-12-07"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-12-08"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-12-09"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-12-10"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-12-11"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2021-12-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-mon fc-future" data-date="2021-12-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-tue fc-future" data-date="2021-12-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-wed fc-future" data-date="2021-12-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-thu fc-future" data-date="2021-12-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-fri fc-future" data-date="2021-12-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-sat fc-future" data-date="2021-12-11"><span class="fc-day-number">11</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end bg-success fc-draggable"><div class="fc-content"><span class="fc-time">9:37p</span> <span class="fc-title">Like it?</span></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 133px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-12-12"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-12-13"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2021-12-14"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-12-15"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-12-16"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-12-17"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-12-18"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2021-12-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-mon fc-future" data-date="2021-12-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-tue fc-future" data-date="2021-12-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-wed fc-future" data-date="2021-12-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-thu fc-future" data-date="2021-12-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-fri fc-future" data-date="2021-12-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-sat fc-future" data-date="2021-12-18"><span class="fc-day-number">18</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 133px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-12-19"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-12-20"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2021-12-21"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-12-22"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-12-23"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-12-24"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2021-12-25"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2021-12-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-mon fc-future" data-date="2021-12-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-tue fc-future" data-date="2021-12-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-wed fc-future" data-date="2021-12-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-thu fc-future" data-date="2021-12-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-fri fc-future" data-date="2021-12-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-sat fc-future" data-date="2021-12-25"><span class="fc-day-number">25</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 133px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2021-12-26"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2021-12-27"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2021-12-28"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2021-12-29"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2021-12-30"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2021-12-31"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2022-01-01"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2021-12-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-mon fc-future" data-date="2021-12-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-tue fc-future" data-date="2021-12-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-wed fc-future" data-date="2021-12-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-thu fc-future" data-date="2021-12-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-fri fc-future" data-date="2021-12-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2022-01-01"><span class="fc-day-number">1</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 137px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2022-01-02"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2022-01-03"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2022-01-04"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2022-01-05"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2022-01-06"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2022-01-07"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2022-01-08"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2022-01-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2022-01-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2022-01-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2022-01-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2022-01-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2022-01-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2022-01-08"><span class="fc-day-number">8</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
							</div>
							<div class="col-xl-3 col-lg-4 col-12">
								<div class="box no-border no-shadow">
									<div class="box-header with-border">
									  <h4 class="box-title">Draggable Events</h4>
									</div>
									<div class="box-body p-0">
									  <!-- the events -->
									  <div id="external-events">
										<div class="external-event m-15 bg-primary ui-draggable ui-draggable-handle" data-class="bg-primary" style="position: relative;"><i class="fa fa-hand-o-right"></i>Lunch</div>
										<div class="external-event m-15 bg-warning ui-draggable ui-draggable-handle" data-class="bg-warning" style="position: relative;"><i class="fa fa-hand-o-right"></i>Go home</div>
										<div class="external-event m-15 bg-info ui-draggable ui-draggable-handle" data-class="bg-info" style="position: relative;"><i class="fa fa-hand-o-right"></i>Do homework</div>
										<div class="external-event m-15 bg-success ui-draggable ui-draggable-handle" data-class="bg-success" style="position: relative;"><i class="fa fa-hand-o-right"></i>Work on UI design</div>
										<div class="external-event m-15 bg-danger ui-draggable ui-draggable-handle" data-class="bg-danger" style="position: relative;"><i class="fa fa-hand-o-right"></i>Sleep tight</div>
									  </div>
									  <div class="event-fc-bt mx-15 my-20">
										<!-- checkbox -->
										<div class="checkbox">
											<input id="drop-remove" type="checkbox">
											<label for="drop-remove">
												Remove after drop
											</label>
										</div>
										<a href="#" data-toggle="modal" data-target="#add-new-events" class="btn btn-rounded btn-success btn-block my-10">
											<i class="ti-plus"></i> Add New Event
										</a>
									  </div>
								   </div>
							  </div>								
							</div>
						</div>
					</div>
				</div>  
			  </div>  
			  
			</div>
		  <!-- /.row -->

		</section>
		<!-- /.content -->
	  </div>
</div>
<!-- /.content-wrapper -->




@endsection
