function jourtravaille(date) {

    const joursFeries2020 = [
        "1-1",   // Jour de l'an
        "4-13",  // Lundi de Pâques
        "5-1",   // Fête du Travail
        "5-8",   // Victoire 1945
        "5-21",  // Ascension
        "6-1",   // Lundi de Pentecôte
        "7-14",  // Fête Nationale
        "8-15",  // Assomption
        "11-1",  // Toussaint
        "11-11", // Armistice
        "12-25"  // Noël
    ];

    const jour = date.getDate();
    const mois = date.getMonth() + 1;
    const annee = date.getFullYear();

    const key = `${mois}-${jour}`;

    if (joursFeries2020.includes(key)) {
        console.log(`Le ${jour} ${mois} ${annee} est un jour férié`);
        return;
    }

    const dayOfWeek = date.getDay();

    if (dayOfWeek === 0 || dayOfWeek === 6) {
        console.log(`Non, le ${jour} ${mois} ${annee} est un week-end`);
    } else {
        console.log(`Oui, le ${jour} ${mois} ${annee} est un jour travaillé`);
    }
}

jourtravaille(new Date(2020, 4, 1));
jourtravaille(new Date(2020, 6, 18));
jourtravaille(new Date(2020, 9, 12));