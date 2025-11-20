function tri(numbers, order) {
    if (order === "asc") {
        numbers.sort(function(a, b) {
            return a - b;
        });
    } else if (order === "desc") {
        numbers.sort(function(a, b) {
            return b - a;
        });
    }
    return numbers;
}

console.log(tri([5, 2, 9, 1], "asc"));
console.log(tri([5, 2, 9, 1], "desc"));