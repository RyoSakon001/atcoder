const slimes = [
  new Slime(120, 0),
  new Slime(240, 0),
  new Slime(360, 0),
]

let count = 0;
const intervalId = setInterval(() => {
  slimes.forEach((slime) => {
    let randSpeed = Math.random() * 10;
    slime.freeFall(randSpeed);
  });

  if(count > 10) {
    clearInterval(intervalId);
  }}, 1000);