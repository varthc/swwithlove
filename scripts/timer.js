const movieDates = [
  '03/23/2020 10:00:00 PM',
  '03/30/2020 10:00:00 PM',
  '04/06/2020 10:00:00 PM',
  '04/13/2020 10:00:00 PM',
  '04/20/2020 10:00:00 PM',
  '04/27/2020 10:00:00 PM',
  '05/04/2020 10:00:00 PM',
  '05/11/2020 10:00:00 PM',
  '05/18/2020 10:00:00 PM',
  '05/25/2020 10:00:00 PM'
];

const _second = 1000;
const _minute = _second * 60;
const _hour = _minute * 60;
const _day = _hour * 24;

function showRemaining() {
  const distance = getEndDate();

  const days = Math.floor(distance / _day);
  const hours = Math.floor((distance % _day) / _hour);
  const minutes = Math.floor((distance % _hour) / _minute);
  const seconds = Math.floor((distance % _minute) / _second);

  document.getElementById('days').innerHTML = timeWithPad(days);
  document.getElementById('hours').innerHTML = timeWithPad(hours);
  document.getElementById('mins').innerHTML = timeWithPad(minutes);
  document.getElementById('secs').innerHTML = timeWithPad(seconds);
}

setInterval(showRemaining, 1000);

function getEndDate() {
  const now = new Date();
  const end = movieDates.reduce((prev, current) => 
    new Date(prev).getTime() > now.getTime() && now.getTime() < new Date(current).getTime() ? prev : current
  );
  const distance = new Date(end) - now;
  return distance;
}

function timeWithPad(time) {
  return time < 10 ? '0' + time : time;
}