const coins = [
  new Coin(0, 0),
  new Coin(0, 0),
  new Coin(0, 0),
  new Coin(0, 0),
  new Coin(0, 0),
];

let count = 0;
let score = 0;

const intervalId = setInterval(() => {
  ctx.clearRect(0 ,0, CANVAS_SIZE_W, CANVAS_SIZE_H);
  coins.forEach((coin) => {
    coin.posX = Math.floor(Math.random() * 540) + 50;
    coin.posY = Math.floor(Math.random() * 390) + 50;
    coin.drawImage()
  });

  if(count > 10) {
    clearInterval(intervalId);
  }
}, 2000);

let scoreContent = document.getElementById("score");

window.addEventListener("click", (e) => {
  coins.forEach((coin) => {
    const is_same_position = (coin.posX < e.clientX && e.clientX < coin.posX + coin.sizeX) && (coin.posY < e.clientY && e.clientY < coin.posY + coin.sizeY);
    if (is_same_position) {
      score += 100;
      scoreContent.textContent = score;

      console.log(score);
    }
  })
})

