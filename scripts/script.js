// Set the number of stars we wish to display.
const NUM_STARS = 120;

// Get random x, y values based on the size of the container.
function getRandomPosition() {
  var y = window.innerWidth;
  var x = window.innerHeight;
  var randomX = Math.floor(Math.random() * x);
  var randomY = Math.floor(Math.random() * y);
  return [randomX, randomY];
}

function createStar(starNumber) {
  let star = document.createElement('div');
  star.className = starNumber % 2 ? 'small-star' : 'big-star';
  var xy = getRandomPosition();
  star.style.top = xy[0] + 'px';
  star.style.left = xy[1] + 'px';
  return star;
}

function createSky(numStars) {
  for (let starNumber = 0; starNumber < numStars; starNumber++) {
    const star = createStar(starNumber);
    document.body.append(star);
  }
}

createSky(NUM_STARS);