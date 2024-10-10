const leaves = [
  new Leaf(0, 0),
  new Leaf(0, 0),
  new Leaf(0, 0),
  new Leaf(0, 0),
  new Leaf(0, 0),
];

let count = 0;
let score = 0;

const intervalId = setInterval(() => {
  ctx.clearRect(0 ,0, CANVAS_SIZE_W, CANVAS_SIZE_H);
  leaves.forEach((leaf) => {
    leaf.posX = Math.floor(Math.random() * 540) + 50;
    leaf.posY = Math.floor(Math.random() * 390) + 50;
    leaf.drawImage()
  });

  if(count > 10) {
    clearInterval(intervalId);
  }
}, 1500);

let scoreContent = document.getElementById("score");

window.addEventListener("click", (e) => {
  leaves.forEach((leaf) => {
    const is_same_position = (leaf.posX < e.clientX && e.clientX < leaf.posX + leaf.sizeX) && (leaf.posY < e.clientY && e.clientY < leaf.posY + leaf.sizeY);
    if (is_same_position) {
      score += 10;
      scoreContent.textContent = score;

      console.log(score);
    }
  })
})

