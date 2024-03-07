// Time from API (worldtimeapi.org)
const clock = document.getElementById("clock");
const loadingText = document.querySelector(".loading-text");
let isLoaded = false; // Flag to track if data has been loaded

function getTime() {
    if (!isLoaded) {
        const url = "https://worldtimeapi.org/api/timezone/Asia/Jakarta";
        fetch(url)
            .then((response) => response.json())
            .then((data) => {
                const dateTime = new Date(data.datetime);
                const hours = dateTime.getHours().toString().padStart(2, "0");
                const minutes = dateTime
                    .getMinutes()
                    .toString()
                    .padStart(2, "0");
                const seconds = dateTime
                    .getSeconds()
                    .toString()
                    .padStart(2, "0");
                clock.textContent = `${hours}:${minutes}:${seconds}`;
                clock.classList.remove("loading");
                loadingText.textContent = "";
                isLoaded = true; // Set the flag to true once data is loaded
            })
            .catch((error) => console.error(error));
    } else {
        // Update time every second after initial load
        const currentTime = clock.textContent.split(":");
        let [hours, minutes, seconds] = currentTime.map(Number);
        seconds++;

        if (seconds >= 60) {
            seconds = 0;
            minutes++;

            if (minutes >= 60) {
                minutes = 0;
                hours = (hours + 1) % 24;
            }
        }

        clock.textContent = `${hours.toString().padStart(2, "0")}:${minutes
            .toString()
            .padStart(2, "0")}:${seconds.toString().padStart(2, "0")}`;
    }
}

if ("IntersectionObserver" in window) {
    const observer = new IntersectionObserver(
        (entries) => {
            if (entries[0].isIntersecting) {
                setInterval(getTime, 1000);
                observer.disconnect();
            }
        },
        { threshold: 0.01 }
    );

    observer.observe(clock);
} else {
    setInterval(getTime, 1000);
    loadingText.textContent = "";
}

// Date from local computer
// const currentDate = new Date();
// const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
// const dayName = days[currentDate.getDay()];
// const dateContainer = document.getElementById("date-container");
// const dateElement = document.createElement("p");
// dateElement.textContent = `${currentDate.toLocaleDateString("id-ID", {
//     weekday: "long",
//     year: "numeric",
//     month: "long",
//     day: "numeric",
// })}`;

// dateContainer.appendChild(dateElement);
