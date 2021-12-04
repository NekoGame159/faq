var catNames = ['Pushok', 'Marsik', 'Mafik', 'Tusik'];
var catColors = ['black', 'orange', 'red'];
var catLen = [25, 30, 15];

var arrayCats = [];

for (var i = 0;i < random(1, 12); i++) {
	var cat = {
	name: catNames[random(0, catNames.length - 1)],
	color: catColors[random(0, catColors.length - 1)],
	len: catLen[random (0, catLen.length - 1)],
};
arrayCats.push(cat);

for (var i = 0;i < arrayCats.length; i ++) {
	console.log(arrayCats[i]);
}
}
function random(min, max) {
  return Math.floor(Math.random() * (max - min + 1 )) + min;
}
console.log(random(0, 5));