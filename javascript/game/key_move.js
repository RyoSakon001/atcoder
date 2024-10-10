const slimes = [
  new Slime(120, 240),
  new Slime(240, 240),
  new Slime(360, 240),
]

window.addEventListener("keydown", (e) => {
  ctx.clearRect(0 ,0, CANVAS_SIZE_W, CANVAS_SIZE_H);
  slimes.forEach((slime) => {
    slime.moveByKey(e)
  })
})

window.addEventListener("click", (e) => {
  slimes.forEach((slime) => {
    const is_same_position = (slime.posX < e.clientX && e.clientX < slime.posX + slime.sizeX) && (slime.posY < e.clientY && e.clientY < slime.posY + slime.sizeY);
    slime.isActive = is_same_position;
    slime.img.src =  is_same_position ? "./images/slime_red.png" : "./images/slime.png";
  })
})

