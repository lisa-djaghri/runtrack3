function jsonValueKey(jsonString, key) {
    let jsonObject;
    try {
        const cleanedString = jsonString.replace(/(\w+):\s*(".*?"|\d+|true|false|null)/g, '"$1": $2');
        jsonObject = JSON.parse(cleanedString);
    } catch (e) {
        return undefined;
    }
    return jsonObject[key];
}

const jsonString = `{
name: "La Plateforme_",
address: "8 rue d'hozier",
city: "Marseille",
nb_staff: "11",
creation:"2019"
}`;
const key = "city";
const result = jsonValueKey(jsonString, key);

console.log(result);