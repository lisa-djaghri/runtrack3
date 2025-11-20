function sommenombrespremiers(nbr1, nbr2) {

    for (let i = 2; i < nbr1; i++) {
        if (nbr1 % i === 0) return false;
    }

    for (let i = 2; i < nbr2; i++) {
        if (nbr2 % i === 0) return false;
    }

    return nbr1 + nbr2;
}

console.log(sommenombrespremiers(2, 7));
console.log(sommenombrespremiers(4, 7));