<script setup>
import {
    eachDayOfInterval, format,
    isMonday, isSameDay, isSameMonth,
    isSunday, isThisMonth, isToday,
    lastDayOfMonth,
    nextSunday,
    previousMonday,
    startOfMonth
} from "date-fns";

let props = defineProps({
    selectedDate: Date
})

let calDays = [];
let today = props.selectedDate ? new Date(props.selectedDate) : new Date();
let firstMonday =
    isMonday(startOfMonth(today)) ? startOfMonth(today) : previousMonday(startOfMonth(today));

let lastSunday =
    isSunday(lastDayOfMonth(today)) ? lastDayOfMonth(today) : nextSunday(lastDayOfMonth(today));

let dateRange = eachDayOfInterval({
    start: firstMonday,
    end: lastSunday,
});

dateRange.forEach( (date) => {
    calDays.push({
        'date': format(date, 'yyyy-MM-dd'),
        'isCurrentMonth': isSameMonth(today, date),
        'isToday': isSameDay(today, date),
    });
});

console.log(today, calDays);

</script>

<template>
    <h1>Users {{ today }}</h1>
    <div>First Monday of the calendar should be {{ firstMonday }}</div>
    <div>Last Sunday of the calendar should be {{ lastSunday }}</div>
    <div v-for="date in dateRange">
        <div>{{ date.toISOString().split("T")[0] }}</div>
    </div>

</template>

<style/>
