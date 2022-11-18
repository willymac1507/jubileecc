<script setup>
import { Inertia } from '@inertiajs/inertia';
import { DatePicker } from "v-calendar";
import { ref } from "vue";
import {trim} from "lodash";
let date = ref(new Date());

function hasChanged(date) {
    let stringDate = date.toISOString().split('T')[0];
    Inertia.get('/', {date: stringDate})
}

</script>

<template>
    <div class="mt-6 grid items-center">
        <div class="max-w-lg">
            <!--        <Calendar is-expanded first-day-of-week="2"/>-->
            <DatePicker
                class="inline-block h-full"
                v-model="date"
                @dayclick="hasChanged(date)"
            >
                <template v-slot="{ inputValue, togglePopover }">
                    <h1>{{ date }}</h1>
                    <div class="flex items-center">
                        <button
                            class="p-2 bg-blue-100 border border-blue-200 hover:bg-blue-200 text-blue-600 rounded-l focus:bg-blue-500 focus:text-white focus:border-blue-500 focus:outline-none"
                            @click="togglePopover()"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                class="w-4 h-4 fill-current"
                            >
                                <path
                                    d="M1 4c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4zm2 2v12h14V6H3zm2-6h2v2H5V0zm8 0h2v2h-2V0zM5 9h2v2H5V9zm0 4h2v2H5v-2zm4-4h2v2H9V9zm0 4h2v2H9v-2zm4-4h2v2h-2V9zm0 4h2v2h-2v-2z"
                                ></path>
                            </svg>
                        </button>
                        <input
                            :value="inputValue"
                            class="bg-white text-gray-700 w-full py-1 px-2 appearance-none border rounded-r focus:outline-none focus:border-blue-500"
                            readonly
                            @input="alert('changed')"
                        />
                    </div>
                </template>
            </DatePicker>
        </div>
    </div>
    <form action="/users" method="get" id="dateForm">
        <input type="hidden" name="date" :value="date">
    </form>
    <div class="mt-10">

    </div>
</template>

<style />
