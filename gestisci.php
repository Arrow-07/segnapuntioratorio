<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="tabella-conteiner"></div>
    

    <script>
        let persone;

        fetch('./php/select.php', {
            method: 'POST',
            header:{
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            persone = data;
            console.log("dati ricevuti: ", data);
            let tabella = `
                <table>
                    <thead>
                        <tr>
                            <td><button name="add" id="add">aggiungi dati</button> </td>
                        </tr>
                        <tr>
                            <td>id</td>
                            <td>email</td>
                            <td>nome</td>
                            <td>cognome</td>
                            <td>level</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        ${generaRighe(data)}
                    </tbody>
                </table>`;

                let tabellaconteiner = document.querySelector("#tabella-conteiner");
                tabellaconteiner.insertAdjacentHTML("beforeend",tabella);
        })
        .catch((error) => {
            console.error("errore: ", error);
        });

        function generaRighe(persone){
            let righe = ' ';
            persone.forEach(persona => {
                let riga = `
                            <tr>
                                    <td>${persona.id}</td>
                                    <td>${persona.email}</td>
                                    <td>${persona.name}</td>
                                    <td>${persona.cognome}</td>
                                    <td>${persona.level}</td>
                                    <td>
                                        <button class="elimina-persona" data-val=${persona.id}>elimina</button>
                                        <button class="modifica-persona" ata-val=${persona.id}>modifica</button>
                                    </td>
                            </tr>`;
                            
                            righe += riga;
            });

            return righe;
        }
    </script>
</body>
</html>