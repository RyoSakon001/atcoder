const CANVAS_SIZE_W = 640
const CANVAS_SIZE_HW = 320 // 画面の半分の広さ(Half Width)
const CANVAS_SIZE_H = 480
const CANVAS_SIZE_HH = 240 // 画面の半分の高さ(Half Height)

const canvas = document.getElementById("canvas")
const ctx = canvas.getContext("2d")

class Slime {
  constructor(posX, posY) {
    const img = new Image()
    img.src = "./images/slime.png"
    this.img = img
    this.posX = posX
    this.posY = posY
    this.sizeX = 100
    this.sizeY = 100
    this.speed = 100
    this.isActive = false
    img.onload = () => this.drawImage()
  }

  drawImage() {
    ctx.drawImage(this.img, this.posX, this.posY, this.sizeX, this.sizeY)
  }

  moveByKey(e) {
    if (this.isActive) {
      if (e.key === "ArrowLeft") {
        this.posX -= this.speed
      }
      if (e.key === "ArrowUp") {
        this.posY -= this.speed
      }
      if (e.key === "ArrowRight") {
        this.posX += this.speed
      }
      if (e.key === "ArrowDown") {
        this.posY += this.speed
      }
    }
    this.drawImage()
  }

  moveByMouse(e) {
    if (this.isActive) {
      this.posX = e.clientX - this.sizeX / 2
      this.posY = e.clientY - this.sizeY / 2
    }
    this.drawImage()
  }
}

function isSamePosition(e, posX, posY, sizeX, sizeY) {
  return (posX < e.clientX && e.clientX < posX + sizeX) && (posY < e.clientY && e.clientY < posY + sizeY);
}

const slimes = [
  new Slime(120, 240),
  new Slime(240, 240),
  new Slime(360, 240),
]

window.addEventListener("mousedown", (e) => {
  slimes.forEach((slime) => {
    const is_same_position = (slime.posX < e.clientX && e.clientX < slime.posX + slime.sizeX) && (slime.posY < e.clientY && e.clientY < slime.posY + slime.sizeY);
    slime.isActive = is_same_position;
    slime.img.src =  is_same_position ? "./images/slime_red.png" : "./images/slime.png";
  })

})

window.addEventListener("mousemove", (e) => {
  let moveFlag = false;
  slimes.forEach((slime) => {
    if (slime.isActive) {
      moveFlag = true;
    }
  })

  if (!moveFlag) {
    return;
  }

  ctx.clearRect(0 ,0, CANVAS_SIZE_W, CANVAS_SIZE_H);
  slimes.forEach((slime) => {
    slime.moveByMouse(e)
  })

})

window.addEventListener("mouseup", (e) => {
  slimes.forEach((slime) => {
    slime.isActive = false;
  })
})

