let candiesPerDay = [];

for (let i = 1; i <= 7; i++) {
let candies = prompt("Сколько конфет ты съела в день " ,{i}, "?");
candiesPerDay.push(Number(candies));
}

let sum = 0;
for (let i = 0; i < candiesPerDay.length; i++) {
sum += candiesPerDay[i];
}

let average = sum / candiesPerDay.length;

console.log("За последние 7 дней ты съела", sum, "конфет. Среднее количество конфет в день:" ,average);