# GADenBosch
GitHub repository voor de website van het Grafisch Atelier Den Bosch gemaakt door Groep T.

## Ontwikkelomgeving opzetten

Hieronder staan een aantal stappen die je moet ondernemen om de ontwikkelomgeving succesvol werkende te krijgen.

- Aangeraden IDE: PHPStorm (je kunt deze gratis krijgen met je @avans.nl e-mailadres)
- Aangeraden Git-client: SourceTree (GitHub desktop kan ook)

(Er wordt vanuit gegaan dat je PHP al kunt gebruiken, omdat je dit al bij WEBS2 hebt opgezet)

1. Installeer NodeJS, dit staat hier uitgelegd: http://blog.teamtreehouse.com/install-node-js-npm-windows
2. Check of NodeJS/NPM goed is geïnstalleerd, door `npm -v` en/of `node -v` te runnen in je commandline.
3. Installer Gulp globaal, dit doe je door `npm install gulp -g`.
4. Controlleer dit ook even door `gulp -v` uit te voeren.
5. Je kunt nu succesvol gulp taken starten, die staan beschreven in de `gulpfile.js`. Voor uitleg over Gulp kun je Googlen :smiley:
6. Installeer ook nog de dependencies van het project. Dit doe je door `npm install` uit te voeren. **Let hierbij op dat je in de goede directory zit! (Dus waar de package.json zich bevindt)**
7. Als alles goed is gegaan kun je nu aan de slag :-)

## Live omgevingen

### Productie/Acceptatie
Deze omgeving wordt per sprint geüpdatet. Hierop staat een volwassen en werkende versie van het product. Deze omgeving wordt automatisch geüpdatet als er een nieuwe commit komt op de `master` branch. Deze omgeving wordt gebruikt om nieuwe changes per sprint te laten zien aan de klant.
Deze omgeving kun je hier vinden: http://student.aii.avans.nl/ICT/jburger

### Test
Deze omgeving wordt vaker geüpdatet, namelijk bij elke commit op de `develop` branch. Deze omgeving is minder stabiel dan productie, maar ook deze omgeving zou af en toe gebruikt kunnen worden om te laten zien aan de klant. De klant kan dan makkelijk feedback geven.
Deze omgeving kun je hier vinden: http://student.aii.avans.nl/ICT/jburger
