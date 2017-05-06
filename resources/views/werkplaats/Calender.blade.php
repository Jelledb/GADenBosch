<html>
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/calendarStyle.css') }}"/>
</head>

</html>

@extends('layouts.website')
@section('content')

    <div class="container">

        <div class="row">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href='/werkplaats-overzicht'>Werkplaatsen</a></li>
                <li class="breadcrumb-item active">Kalender</li>
            </ol>
            <div class="panel panel-default">
                <h4 class="centerH1">Soort tafel: {{$selectedWorkspace->name.', '.$selectedWorkspace->size}} </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-11 ">

                <?php
                $c = new Calender($occupation, $selectedWorkspace);
                echo $c->show();

                ?>

            </div>

            <div class="col-md-1">
                <ul ul style="list-style: none" class="dates">

                    <li class=h4>legenda</li>
                    <li id="good" class="smallerfont">rustig</li>
                    <li id="normal" class="smallerfont">normaal</li>
                    <li id="bad" class="smallerfont">druk</li>
                    <li id="booked" class="smallerfont">vol</li>

                </ul>

            </div>
        </div>
    </div>
@endsection
<?php



class Calender
{

    private $selectedWorkspace;
    private $occupation;
    private $dayColor;
    private $totalSecondsInDay;

    /**
     * Constructor
     */
    public function __construct($occupation, $selectedWorkspace)
    {
        $this->selectedWorkspace = $selectedWorkspace;

        $this->occupation = $occupation;

        $this->totalSecondsInDay = 28800;

        $this->naviHref = url()->current();


    }

    /********************* PROPERTY ********************/
    private $dayLabels = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");

    private $currentYear = 0;

    private $currentMonth = 0;

    private $currentDay = 0;

    private $currentDate = null;

    private $daysInMonth = 0;

    private $naviHref = null;


    /********************* PUBLIC **********************/

    /**
     * print out the calendar
     */
    public function show()
    {
        $year = null;

        $month = null;

        if (null == $year && isset($_GET['year'])) {

            $year = $_GET['year'];

        } else if (null == $year) {

            $year = date("Y", time());

        }

        if (null == $month && isset($_GET['month'])) {

            $month = $_GET['month'];

        } else if (null == $month) {

            $month = date("m", time());

        }

        $this->currentYear = $year;

        $this->currentMonth = $month;

        $this->daysInMonth = $this->_daysInMonth($month, $year);

        $content = '<div id="calendar">' .
            '<div class="box">' .
            $this->_createNavi() .
            '</div>' .
            '<div class="box-content">' .
            '<ul class="label">' . $this->_createLabels() . '</ul>';

        $content .= '<div class="clear"></div>';
        $content .= '<ul class="dates">';

        $weeksInMonth = $this->_weeksInMonth($month, $year);
        // Create weeks in a month
        for ($i = 0; $i < $weeksInMonth; $i++) {

            //Create days in a week
            for ($j = 1; $j <= 7; $j++) {
                $content .= $this->_showDay($i * 7 + $j);
            }
        }

        $content .= '</ul>';

        $content .= '<div class="clear"></div>';

        $content .= '</div>';

        $content .= '</div>';
        return $content;
    }

    /********************* PRIVATE **********************/
    /**
     * create the li element for ul
     */
    private function _showDay($cellNumber)
    {

        if ($this->currentDay == 0) {

            $firstDayOfTheWeek = date('N', strtotime($this->currentYear . '-' . $this->currentMonth . '-01'));

            if (intval($cellNumber) == intval($firstDayOfTheWeek)) {

                $this->currentDay = 1;

            }
        }

        if (($this->currentDay != 0) && ($this->currentDay <= $this->daysInMonth)) {

            $this->currentDate = date('Y-m-d', strtotime($this->currentYear . '-' . $this->currentMonth . '-' . ($this->currentDay)));


            $cellContent =


                '<a href="/dag-planning/' . $this->currentDate . '/' . $this->selectedWorkspace->id . '"> ' . $this->currentDay . ' </a>';


            $this->currentDay++;

        } else {

            $this->currentDate = null;

            $cellContent = null;

            return;

        }

        $this->colorChanger();

        return '<li id="' . $this->dayColor . '" class="' . ($cellNumber % 7 == 1 ? ' start ' : ($cellNumber % 7 == 0 ? ' end ' : ' ')) .
            ($cellContent == null ? 'nine' : '') . '">' . $cellContent . '</li>';
    }

    /**
     * create navigation
     */
    private function _createNavi()
    {

        $nextMonth = $this->currentMonth == 12 ? 1 : intval($this->currentMonth) + 1;

        $nextYear = $this->currentMonth == 12 ? intval($this->currentYear) + 1 : $this->currentYear;

        $preMonth = $this->currentMonth == 1 ? 12 : intval($this->currentMonth) - 1;

        $preYear = $this->currentMonth == 1 ? intval($this->currentYear) - 1 : $this->currentYear;

        return
            '<div class="header">' .
            '<a class="prev" href="' . $this->naviHref . '?month=' . sprintf('%02d', $preMonth) . '&year=' . $preYear . '">Prev</a>' .
            '<span class="title">' . date('Y M', strtotime($this->currentYear . '-' . $this->currentMonth . '-1')) . '</span>' .
            '<a class="next" href="' . $this->naviHref . '?month=' . sprintf("%02d", $nextMonth) . '&year=' . $nextYear . '">Next</a>' .
            '</div>';
    }

    /**
     * create calendar week labels
     */
    private function _createLabels()
    {

        $content = '';

        foreach ($this->dayLabels as $index => $label) {

            $content .= '<li class="' . ($label == 6 ? 'end title' : 'start title') . ' title">' . $label . '</li>';

        }

        return $content;
    }


    /**
     * calculate number of weeks in a particular month
     */
    private function _weeksInMonth($month = null, $year = null)
    {

        if (null == ($year)) {
            $year = date("Y", time());
        }

        if (null == ($month)) {
            $month = date("m", time());
        }

        // find number of days in this month
        $daysInMonths = $this->_daysInMonth($month, $year);

        $numOfweeks = ($daysInMonths % 7 == 0 ? 0 : 1) + intval($daysInMonths / 7);

        $monthEndingDay = date('N', strtotime($year . '-' . $month . '-' . $daysInMonths));

        $monthStartDay = date('N', strtotime($year . '-' . $month . '-01'));

        if ($monthEndingDay < $monthStartDay) {

            $numOfweeks++;

        }

        return $numOfweeks;
    }

    /**
     * calculate number of days in a particular month
     */
    private function _daysInMonth($month = null, $year = null)
    {

        if (null == ($year))
            $year = date("Y", time());

        if (null == ($month))
            $month = date("m", time());

        return date('t', strtotime($year . '-' . $month . '-01'));
    }

    // return status
    private function colorChanger()
    {
        $percent = null;

        foreach ($this->occupation as $oc) {


            $convertIn = \Carbon\Carbon::parse($oc->date_in)->format('Y-m-d');
            $convertOut = \Carbon\Carbon::parse($oc->date_out)->format('Y-m-d');
            $convertCurrent = \Carbon\Carbon::parse($this->currentDate)->format('Y-m-d');
            $start_time = (int)strtotime($oc->date_in);
            $end_time = (int)strtotime($oc->date_out);


            //calculates interval between 2 dates
            if (strtotime($convertIn) == strtotime($convertCurrent)) {


                // $total_secs = $end_time - $start_time;


                $total_secs = $end_time - $start_time;


                //$elapsed_secs = $this->totalSecondsInDay - $start_time;


                if (isset($percent)) {
                    $percent += round(($total_secs / $this->totalSecondsInDay) * 100);
                } else {
                    $percent = round(($total_secs / $this->totalSecondsInDay) * 100);
                }


            }


        }


        if (isset($percent) || $percent < 25) {
            $this->dayColor = 'good';

        }
        if ($percent < 51 && $percent > 26) {
            $this->dayColor = 'normal';
        }
        if ($percent > 50) {
            $this->dayColor = 'bad';
        }
        if ($percent >= 100) {
            $this->dayColor = 'booked';
        }


    }


}
?>






