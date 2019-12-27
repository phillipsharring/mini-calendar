<?php

namespace MiniCal;

class Calendar
{
    /** @var int */
    public $year;

    /** @var int */
    public $month;

    /** @var int */
    public $day;

    /** @var array */
    public $daysInMonth;

    /**
     * MiniCalendar constructor.
     * @param $year
     * @param $month
     * @param $day
     */
    public function __construct($year, $month, $day)
    {
        $this->year = (int) $year;
        $this->month = (int) $month;
        $this->day = (int) $day;
    }

    public function init()
    {
        $this->daysInMonth = $this->getPaddedDaysInMonth();
    }

    public function getMonths()
    {
        return array_reduce(range(1,12), function($result, $m) {
            $result[$m] = date('F', mktime(0,0,0, $m,1));
            return $result;
        });
    }

    public function getClassesForDay($d)
    {
        return implode(' ', [
            $this->getDayOutOfMonthClass($d),
            $this->getDaySelectedClass($d),
            $this->getWeekendDayClass($d),
        ]);
    }

    private function getPaddedDaysInMonth()
    {
        $daysInMonth = $this->getDaysInMonth();
        $this->prePadMonth($daysInMonth);
        $this->postPadMonth($daysInMonth);
        return $daysInMonth;
    }

    private function getDaysInMonth()
    {
        return array_reduce(
            range(1, date('t', mktime(0, 0, 0, $this->month, 1, $this->year))),
            function($result, $dim) {
                $result[] = mktime(0, 0, 0, $this->month, $dim, $this->year);
                return $result;
            }
        );
    }

    private function prePadMonth(&$daysInMonth)
    {
        for($d = date('w', $this->getFirstDayOfMonth()) - 1, $i = 1; $d >= 0; $d -= 1, $i += 1) {
            array_unshift($daysInMonth, mktime(0, 0, 0, $this->month, date('j', $this->getFirstDayOfMonth()) - $i, $this->year));
        }
    }

    private function postPadMonth(&$daysInMonth)
    {
        for ($d = date('w', $this->getLastDayOfMonth()) + 1, $i = 1; $d <= 6; $d += 1, $i += 1) {
            array_push($daysInMonth, mktime(0, 0, 0, $this->month, date('j', $this->getLastDayOfMonth()) + $i, $this->year));
        }
    }

    private function getFirstDayOfMonth()
    {
        return mktime(0, 0, 0, $this->month, 1, $this->year);
    }

    private function getLastDayOfMonth()
    {
        $day = date('t', strtotime("{$this->year}-{$this->month}-1"));
        return strtotime("{$this->year}-{$this->month}-$day");
    }

    private function getDayOutOfMonthClass($d)
    {
        return $this->month != date('n', $d) ? 'out-of-month' : '';
    }

    private function getWeekendDayClass($d)
    {
        return (0 == date('w', $d) || 6 == date('w', $d)) ? 'weekend' : '';
    }

    private function getDaySelectedClass($d)
    {
        return ($this->month == date('n', $d) && $this->day == date('j', $d)) ? 'selected-day' : '';
    }
}
