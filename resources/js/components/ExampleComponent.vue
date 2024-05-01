<template>
    <div class="text-white mb-8">
        <div class="places-input text-gray-800">
            <input type="text" class="w-full" />
        </div>
        <div
            class="weather-container font-sans w-128 max-w-lg rounded-lg overflow-hidden bg-gray-900 shadow-lg mt-4"
        >
            <div
                class="current-weather flex items-center justify-between px-6 py-8"
            >
                <div class="flex items-center">
                    <div>
                        <div class="text-6xl font-semibold">8° C</div>
                        <div>Weather is good</div>
                    </div>
                    <div class="mx-5">
                        <div class="font-semibold">Cloudy</div>
                        <div>Canada</div>
                    </div>
                </div>
                <div>Icon</div>
            </div>

            <div
                class="future-weather text-sm bg-gray-800 px-6 py-8 overflow-hidden"
            >
                <div class="flex items-center">
                    <div class="w-1/6 text-lg text-gray-200">MON</div>
                    <div class="w-4/6 flex items-center">
                        <div>icon</div>
                        <div class="ml-3">Cloudy with a chance of showers</div>
                    </div>
                    <div class="w-1/6 text-right">
                        <div>8° C</div>
                        <div>-3° C</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        this.fetchDate();
    },
    methods: {
        fetchDate() {
            fetch("/api/weather")
                .then((response) => response.json())
                .then((data) => {
                    console.log(data);
                })
                .catch((error) => {
                    console.error("Error fetching weather data:", error);
                });
        },
    },
};
</script>
