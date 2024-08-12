<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button name="add" id="add">aggiungi dati</button>
    <div id="tabella-conteiner"></div>
    

    <script>
        let persone;
        let inseriscibtn = document.querySelector('#add');
        inseriscibtn.addEventListener('click', inseriscipersona());
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

        function inseriscipersona(){
            console.log('persona inserita');
        }
        //INSERISCI
        // const formData = new FormData();
        // formData.append('nome', 'Lorenzo');
        // formData.append('cognome', 'ilmagnifico');
        // formData.append('email', 'lorenzooooo@gmail.com');
        // formData.append('pw', 'oidcrop');
        // formData.append('level', '0')
        // fetch('./php/insert.php', {
        //     method: 'POST',
        //     header:{
        //         'Content-Type': 'application/json'
        //     },
        //     body: formData
        // }).then(response => response.json())
        // .then(data => { 
        //     console.log(data);
        // })
        //  .catch((error) => {
        //     console.error("errore: ", error);
        // });


    </script>
</body>
</html>