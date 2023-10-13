<script>
function popString(str) {
  if (str.length > 0) {
    var dernierCaractere = str.charAt(str.length - 1);
    str = str.slice(0, -1); // Retire le dernier caractère
    return { dernierCaractere, nouvelleChaine: str };
  } else {
    return { dernierCaractere: null, nouvelleChaine: str };
  }
}

var maChaine = "Exemple";
var result = popString(maChaine);

console.log(result.dernierCaractere); // Dernier caractère retiré
console.log(result.nouvelleChaine); // Chaîne mise à jour sans le dernier caractère

</script>