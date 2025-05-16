const events = {
  "2025-05-03": {
    title: "Coaching Action Orientation",
    description: "An introductory session to action coaching."
  },
  "2025-05-10": {
    title: "Black Horse near 22UB Practice",
    description: "<b>Course Summary:</b><br>Sign in will start at 8.  Rounds down range at 9.  Pay event director on site.  The Rifle Range is dedicated to this event until all shooters are finished, and the targets are removed."
  }
};

const calendarBody = document.getElementById("calendarBody");
const monthTitle = document.getElementById("monthTitle");

let currentDate = new Date(2025, 4); // May is 4 (zero-indexed)

function renderCalendar(date) {
  calendarBody.innerHTML = "";

  const year = date.getFullYear();
  const month = date.getMonth();
  const firstDay = new Date(year, month, 1).getDay();
  const daysInMonth = new Date(year, month + 1, 0).getDate();

  monthTitle.innerText = date.toLocaleString('default', { month: 'long', year: 'numeric' });

  let row = document.createElement("tr");
  for (let i = 0; i < firstDay; i++) {
    row.appendChild(document.createElement("td"));
  }

  for (let day = 1; day <= daysInMonth; day++) {
    const fullDate = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
    const td = document.createElement("td");
    td.innerHTML = `<div class="dayNum"><b>${day}</b></div>`;

    if (events[fullDate]) {
      const eventDiv = document.createElement("div");
      eventDiv.className = "event";
      eventDiv.innerText = events[fullDate].title;
      eventDiv.onclick = () => {
        const popup = td.querySelector(".event-popup");
        popup.style.display = popup.style.display === "flex" ? "none" : "flex";
      };

      const popupDiv = document.createElement("div");
      popupDiv.className = "event-popup";
      popupDiv.innerHTML = `<strong>${events[fullDate].title}</strong><p>${events[fullDate].description}</p>`;

      td.appendChild(eventDiv);
      td.appendChild(popupDiv);
    }

    if (
      day === new Date().getDate() &&
      month === new Date().getMonth() &&
      year === new Date().getFullYear()
    ) {
      td.classList.add("today");
    }

    row.appendChild(td);

    if ((firstDay + day) % 7 === 0 || day === daysInMonth) {
      calendarBody.appendChild(row);
      row = document.createElement("tr");
    }
  }
}

document.getElementById("prevMonth").addEventListener("click", () => {
  currentDate.setMonth(currentDate.getMonth() - 1);
  renderCalendar(currentDate);
});
document.getElementById("nextMonth").addEventListener("click", () => {
  currentDate.setMonth(currentDate.getMonth() + 1);
  renderCalendar(currentDate);
});

renderCalendar(currentDate);



jQuery(document).ready(function() {
  jQuery('.btn-minus').click(function() {
    let $input = jQuery(this).siblings('.quantity-input');
    let value = parseInt($input.val()) || 1;
    let min = parseInt($input.attr('min')) || 1;
    if (value > min) {
      $input.val(value - 1);
    }
  });

  jQuery('.btn-plus').click(function() {
    let $input = jQuery(this).siblings('.quantity-input');
    let value = parseInt($input.val()) || 1;
    $input.val(value + 1);
  });
});