<script setup>
import { Inertia } from "@inertiajs/inertia";
import { DatePicker } from "v-calendar";
import Cal from '../Shared/Cal.vue'
import { ref } from "vue";

let date = ref(new Date());

function hasChanged(date) {
    let stringDate = date.toISOString().split("T")[0];
    Inertia.get("/", { date: stringDate });
}

let props = defineProps({
    bookings: Object,
    selectedDate: Date
})

// console.log(props.bookings)
</script>

<template>
<!--        <div class="px-6 mt-6 flex justify-center">-->
<!--            <div class="mt-10">-->
<!--                <div class="px-4 sm:px-6 lg:px-8">-->
<!--                    <div class="sm:flex sm:items-center">-->
<!--                        <div class="sm:flex-auto">-->
<!--                            <h1 class="text-xl font-semibold text-gray-900">Bookings</h1>-->
<!--                            <p class="mt-2 text-sm text-gray-700">-->
<!--                                All bookings on the selected day.-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">-->
<!--                            <button-->
<!--                                type="button"-->
<!--                                class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"-->
<!--                            >-->
<!--                                Add user-->
<!--                            </button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="mt-8 flex flex-col">-->
<!--                        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">-->
<!--                            <div-->
<!--                                class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8"-->
<!--                            >-->
<!--                                <div-->
<!--                                    class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg"-->
<!--                                >-->
<!--                                    <table class="min-w-full divide-y divide-gray-300">-->
<!--                                        <thead class="bg-gray-50">-->
<!--                                        <tr>-->
<!--                                            <th-->
<!--                                                scope="col"-->
<!--                                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6"-->
<!--                                            >-->
<!--                                                Description-->
<!--                                            </th>-->
<!--                                            <th-->
<!--                                                scope="col"-->
<!--                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"-->
<!--                                            >-->
<!--                                                Date-->
<!--                                            </th>-->
<!--                                            <th-->
<!--                                                scope="col"-->
<!--                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"-->
<!--                                            >-->
<!--                                                Start-->
<!--                                            </th>-->
<!--                                            <th-->
<!--                                                scope="col"-->
<!--                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"-->
<!--                                            >-->
<!--                                                Duration-->
<!--                                            </th>-->
<!--                                            <th-->
<!--                                                scope="col"-->
<!--                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"-->
<!--                                            >-->
<!--                                                Booking Member-->
<!--                                            </th>-->
<!--                                            <th-->
<!--                                                scope="col"-->
<!--                                                class="relative py-3.5 pl-3 pr-4 sm:pr-6"-->
<!--                                            >-->
<!--                                                <span class="sr-only">Edit</span>-->
<!--                                            </th>-->
<!--                                        </tr>-->
<!--                                        </thead>-->
<!--                                        <tbody-->
<!--                                            class="divide-y divide-gray-200 bg-white"-->
<!--                                        >-->
<!--                                        <tr-->
<!--                                            v-for="booking in bookings"-->
<!--                                            :key="booking.id"-->
<!--                                        >-->
<!--                                            <td-->
<!--                                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6"-->
<!--                                            >-->
<!--                                                {{ booking.description }}-->
<!--                                            </td>-->
<!--                                            <td-->
<!--                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"-->
<!--                                            >-->
<!--                                                {{ booking.date }}-->
<!--                                            </td>-->
<!--                                            <td-->
<!--                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"-->
<!--                                            >-->
<!--                                                {{ booking.start }}-->
<!--                                            </td>-->
<!--                                            <td-->
<!--                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"-->
<!--                                            >-->
<!--                                                {{ booking.duration }}-->
<!--                                            </td>-->
<!--                                            <td-->
<!--                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"-->
<!--                                            >-->
<!--                                                {{ booking.user.name }}-->
<!--                                            </td>-->
<!--                                            <td-->
<!--                                                class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6"-->
<!--                                            >-->
<!--                                                <a-->
<!--                                                    href="#"-->
<!--                                                    class="text-indigo-600 hover:text-indigo-900"-->
<!--                                                >Edit<span class="sr-only"-->
<!--                                                >-->
<!--&lt;!&ndash;                                                {{ person.name }}&ndash;&gt;-->
<!--                                            </span-->
<!--                                            ></a-->
<!--                                                >-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        </tbody>-->
<!--                                    </table>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="px-6 mt-6 flex justify-center">
            <Cal :selectDate="selectedDate" :bookings="bookings"/>
        </div>
</template>

<style />
